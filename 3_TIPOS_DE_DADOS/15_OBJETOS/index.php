<?php

    class Pessoa {
        function falar(){
            echo "olá pessoal";
        }
    }

    $felipe = new Pessoa();
    $felipe -> nome = "Felipe";

    echo $felipe ->nome;

    echo"<br>";
    $felipe -> falar();

    



?>