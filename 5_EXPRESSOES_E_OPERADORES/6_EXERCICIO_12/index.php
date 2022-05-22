<?php

    $A = 8;
    $B = 2;
    $C = 3;
    $D = 4;

    $soma = $A + $B + $C + $D;
    $subtracao = $A - $B - $C - $D;
    $multi = $A * $B * $C * $D;
    $divisao = $A / $B / $C / $D;

    $op1 = $soma +$divisao;
    $op2 = $op1 / $multi;
    $op3 = $op1 * $op2;

    echo $soma ;
    echo"<br>";
    echo $subtracao ;
    echo"<br>";
    echo $multi ;
    echo"<br>";
    echo $divisao ;
    echo"<br>";
    echo $op1 ;
    echo"<br>";
    echo $op2;
    echo"<br>";
    echo $op3;
    echo"<br>";

    echo gettype($op1);
    echo"<br>";
    
    echo gettype($op2);
    echo"<br>";
    
    echo gettype($op3);
    echo"<br>";
?>