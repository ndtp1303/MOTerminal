<?php

require __DIR__ . '/SuSu/Platform/MOTerminal.php';

use SuSu\Platform\MOTerminal;

$MOTerminal = new MOTerminal;

$name = $MOTerminal->input("Mời bạn nhập tên : ");

$MOTerminal->out("Tên của bạn là: " . $name);
