<?php

  

    if(is_int(5)){
        echo "É um inteiro <br>";
    }

    if(is_int("String")){//false
        echo "Não é um inteiro <br>";
    }

    $a= 10;

    if(is_int($a)){
        echo "É um inteiro <br>";
    }

    if(is_string("String")){
        echo "Isso é uma String <br>";
    }

    if(is_bool(5>2)){
        echo "Verdadeiro <br>";
    }

    $float = 3.14;
    if(is_float($float)){
        echo $float;
    }
?>