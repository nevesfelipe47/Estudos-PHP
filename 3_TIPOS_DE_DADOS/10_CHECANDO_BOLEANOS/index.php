<?php

    $podeEntrar = true;

    if(is_bool($podeEntrar)){
        echo "É boleano 1 <br>";
    }

    
    if(is_bool(0)){
        echo "É boleano 2 <br>";
    }

    if(is_bool(false)){
        echo "É boleano 3<br>";
    }

    if(is_bool(0.0 == false)){ // 0 é considerado falso!
        echo "Sá assim pra trazer o falso <br>";
    }

?>