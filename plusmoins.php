<?php


setArgument($argv);


function setArgument($maxRand) {

    $vie = 2;

    $nombreRandom = rand(0, $maxRand[1]);

    gameIndex($vie, $nombreRandom);

}


function gameIndex($vie, $nombreRandom) 
{

    echo ('' . PHP_EOL);
    echo ('' . PHP_EOL);

   $inputGamer = readline("Devine le chiffre : ");



   if($nombreRandom < $inputGamer && $vie > 0)
   {

        $vie--;

        echo ('C\'est moin' . PHP_EOL);

        if($vie == 0) {

            echo ('tu n\'a plus de vie, Dernière chance' . PHP_EOL);

        } else {

            echo ('tu n\'a plus que ' . $vie . ' vie' . PHP_EOL);

        }


        gameIndex($vie, $nombreRandom);



   } elseif ($nombreRandom > $inputGamer && $vie > 0) {

        $vie--;

        echo ('C\'est plus' . PHP_EOL);

        if($vie == 0) {

            echo ('tu n\'a de vie, Dernière chance' . PHP_EOL);

        } else {

            echo ('tu n\'a plus que ' . $vie . ' vie' . PHP_EOL);

        }

        gameIndex($vie, $nombreRandom);


   } elseif ($nombreRandom == $inputGamer && $vie >= 0) {


        echo ('Tu a Trouver' . PHP_EOL);

        if($vie == 0) {

            echo ('tu n\'a de vie, Bien joué' . PHP_EOL);

        } else {

            echo ('tu avais encore ' . $vie . ' vie' . PHP_EOL);

        }

        replay();


   } elseif ($vie == 0) {

        echo ('C\'etait ' . $nombreRandom . ' qu\'il fallait trouver' . PHP_EOL);

        echo ('GAME OVER' . PHP_EOL);

        replay();


   }

}



function replay()
{

    $inputGamer = readline("Veut-tu rejouer [Y/n] : ");

    if($inputGamer == 'Y') {

        $maxRand = readline("Donner la valeur maximum de jeu : ");

        setArgument($maxRand);

    } elseif ($inputGamer == 'n') {

        echo 'GAME END';

    }


}

