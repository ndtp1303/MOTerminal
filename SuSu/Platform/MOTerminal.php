<?php

namespace SuSu\Platform;

class MOTerminal
{
    protected $input = NULL;

    /**
     * @param string $input
     * 
     * @return void
     */

    public function setDataInput(string $input): void
    {
        $this->input = $input;
    }

    /**
     * @param null|string $message
     * 
     * @return string
     */

    public function input(?string $message): string
    {
        if (!empty($message)) {
            $this->out($message);
        }

        $this->setDataInput(
            trim(fgets(STDIN))
        );

        return $this->input;
    }

    /**
     * @param string $message
     * 
     * @return void
     */

    public function out(string $message): void
    {
        echo $message;
    }
}
