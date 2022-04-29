<?php

    $x = 10;

    echo "$x GLOBAL <b>";


    function teste(){
        $x = 5;
        echo "$x local teste <br>";
    }
    echo "<br>";
    teste();
    echo "<br>";
    function testando(){
        $x = 17;
        echo "$x local 2  testando <br>";
    }
    testando();
    echo "<br>";
    teste();
    echo "<br>";
    echo "$x global <br>";

?>