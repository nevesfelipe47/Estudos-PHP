<?php

    $x = 10; 
    $y =& $x;

    echo "$x <br>";
    echo "$y <br>";
    $y = 15;
    echo "$x <br>";
    echo "$y <br>";

    $x = 45;
    echo "$x <br>";
    echo "$y <br>";

?>