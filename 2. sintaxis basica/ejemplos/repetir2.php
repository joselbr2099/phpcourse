<?php
    //codigo que suma los 10 primeros numeros naturales usando do-while
    //1+2+3+4+5+6+7+8+9+10=55
    $a=0; //variable acumulativa aqui se guarda la suma
    $b=1; //variable de incremento

    // en la condicion del while se especifica hasta donde debe sumar en esta caso hasta 10
    do{
        $a=$a+$b;
        $b++;
    }while($b<=10);
    echo "resultado :".$a;
?>    