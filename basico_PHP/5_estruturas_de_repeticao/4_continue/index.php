<?php


    $a = 10;


    while ($a > 0 ){

        echo "Executando o loop $a <br>"; 

        if($a == 5 or $a ==7){

            echo "Pulou a execução $a <br>";

            $a--;

            continue;
        }

        if ($a == 2){


            echo "Terminando o loop break $a <br>";
            break;
        }



        $a--;
    }

