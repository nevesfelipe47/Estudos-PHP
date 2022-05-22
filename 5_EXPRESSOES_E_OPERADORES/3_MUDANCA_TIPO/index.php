<?php

    echo 5 / 2;
    echo "<br>";

    if (is_float(5/2)){
        echo"É float";
    }
    echo "<br>";
    echo "<br>";
    echo 5 . 2;
    echo "<br>";

    if (is_string(5 . 2)){
        echo"É String";
    }
    echo"<br>";
    echo"<br>";
    if (is_float(5/2)){
         echo "É float <br>";
    }

    echo"<br>";

    $nome = "Felipe";
    $sobrenome = "Neves";

    $nomeCompleto = $nome . " " . $sobrenome;
    
    echo $nomeCompleto;
    echo "<br>";