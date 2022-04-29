<?php
$Lilian = [
        'nascimento' => 2000,
        'nome' => 'Lilian',
        'personalidade' => 'Insuportavelmente agradavel',
        'altura' => 1.25,
        'idade' => 14
    ];
    print_r($Lilian);
    echo'<br>';

    $maiorIdade = 18;

    if($Lilian['idade'] >=$maiorIdade){
        echo "Maior de idade";
    }
    else{
         echo "é Pirralha muito pirralha";
        }
    
?>