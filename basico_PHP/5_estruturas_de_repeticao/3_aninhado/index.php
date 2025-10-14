<?php

    $i = 1;

    $c = "Variável teste";

    while($i <= 10){

        echo "Loop externo $i <br>";

        $j = 1;

        echo "$c <br>";


        while($j <= 5){

            echo "Loop interno $j <br>";
            $j++;

        }


        $i++;
    }