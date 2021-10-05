<?php

$resultStrtolower = strtolower($argv[1]);

foreach (count_chars($resultStrtolower, 1) as $i => $val) {
    echo chr($i) . '=>' . $val . PHP_EOL;
}
