<?php 

array_shift($argv);

sort($argv);

$json_data = json_encode($argv);

file_put_contents('contenu.json', $json_data);