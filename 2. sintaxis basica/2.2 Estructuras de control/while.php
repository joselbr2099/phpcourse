<?php
    //estructura while itera mientras la condicion "while(aqui)" sea verdadera 
    $a=1;
    $b=2;
    while($a<10){
        echo "\nvalor: ".$a;
        $a++;
    }
    echo "\nterminado";

    //estructura do-while
    echo "\ninicia do-while";
    $a=1;
    $b=2; 
    do{
        echo "\nvalor: ".$a;
        $a++;
    }while($a<10);
?>