<?php 

$inputArg = $argv;

$json_data = json_encode($inputArg);
file_put_contents('contenu.json', $json_data);