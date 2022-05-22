<?php

    $epressao = "5" * 12;
    /*echo "5" * 12;*/
    $epressaoDouble = "5.9" * 12;
    /*echo "5" * 12;*/
    $epressaoBool = 52>3;
    $epressaoString= "Isso é uma String";
  

    echo gettype($epressao);
    echo "<br>";
    echo gettype($epressaoDouble);
    echo "<br>";
    echo gettype($epressaoBool);
    echo "<br>";
    echo gettype($epressaoString);
    echo "<br>";
    echo gettype([]);
    echo "<br>";
    echo gettype();
?>