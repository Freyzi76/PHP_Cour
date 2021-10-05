<?php

$explodeArg = explode(' ', $argv[1]);

foreach ($explodeArg as $arg) {

    $result .= strrev($arg) . ' ';

}

echo ($result);
