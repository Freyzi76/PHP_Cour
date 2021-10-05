<?php

foreach (count_chars($argv[1], 1) as $i => $val) {
    echo chr($i) . '=>' . $val . PHP_EOL;
}
