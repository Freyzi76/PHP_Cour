<?php

// Ceci est un commentaire
Skrom($argv[0]);


function Skrom($age) 
{

    if($age == 1) {

        echo 'Skrom a ' . $age[1] . ' an';

    } else {

        echo 'Skrom a ' . $age[1] . ' ans';

    }

    Skrom($age);

}
