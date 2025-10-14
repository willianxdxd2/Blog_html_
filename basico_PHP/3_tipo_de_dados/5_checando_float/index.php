    <?php


    $a = "teste";
    $b = 12.8;
    if(is_float($a)){
        echo "é float 1! <br>";
    }
    if(is_float($b)){
        echo "é float 2! <br>";
    }
    if(is_float(65.63)){
        echo "é float 3! <br>";
    }
        if(is_float("É float")){
        echo "é float 4! <br>";
    }