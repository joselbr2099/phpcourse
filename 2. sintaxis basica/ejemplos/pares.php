<?php
    //muestra los primeros 20 numeros pares usando for
    $contador=0; //variable que cuenta los numeros pares
    $a=0; //variable de la que se extraera el numero par

    /*algoritmo
    1- se extrae el modulo 2 del numero a probar si es par (el operador % extrae el modulo) ejemplo; 5%2 
    2- si el modulo es 0 el numero es par, si el modulo es 1 el numero es impar
    3- se regresa a 1 hasta completar encontrar 20 numeros pares 
    */

    // se usara do-while 
    do{
        $a++; //incrementamos $a en una unidad osea $a=$a+1
        if($a%2==0){
            echo "<br>";
            echo "\n($contador) ".$a." es par";
            $contador++; //como se encontro un numero par se incrementa el contador
        }
    }while($contador<=200);
        