<?php

require_once "data/Conflct.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Conflict();

helpMe();
echo APPLICATION . PHP_EOL;