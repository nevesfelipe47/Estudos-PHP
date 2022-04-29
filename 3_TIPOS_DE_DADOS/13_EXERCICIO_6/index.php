<?php

    $carro = ['ano'=> 2016, 
              'cor'=> 'verde', 
              'modelo'=>'prisma', 
              'marca'=> 'chevrolet'];
    //-------------------------------------
    print_r($carro);
    echo'<br>';
    echo $carro['marca'];
    echo'<br>';
    echo $carro['modelo'];
    echo'<br>';
    //-----------
    $Lilian = [
        'nascimento' => 2000,
        'nome' => 'Lilian',
        'personalidade' => 'braba',
        'altura' => 1.25,
        'idade' => 18
    ];
    print_r($Lilian);
    echo'<br>';

    if($Lilian['idade']>=18){
        echo "Maior de idade";
    }
    else{
         echo "é Pirralha muito pirralha";
        }
    

    

?>