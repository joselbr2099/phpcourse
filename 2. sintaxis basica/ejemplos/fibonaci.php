<?php
    /*sucesion de fibonacci:
    0,1,1,2,3,5,8,13...
    https://es.wikipedia.org/wiki/Sucesi%C3%B3n_de_Fibonacci
    
    algoritmo:
    el primer 0 puede mostrarse por separado los valores iniciales son: de $a es 0 y de $b es 1
    $a+$b
    0+1=1 
    1+0=1
    1+1=2
    2+1=3
    3+2=5
    ...
    como se ve en la sucesion despues de la suma
    1-primero se hace una copia de $a osea $tmp=$a
    2-luego $a debe tomar el valor de la suma $a=$a+$b
    3-finalmente $b debe tener el valor original de $a antes de la suma osea $b=$tmp
    4-se regresa al punto 1-

    */
    
    //mostrar los 20 primeros numeros de fibonacci
    $a=0;
    $b=1;
    $tmp=0;
    echo "0"; //imprimimos el primer 0 por separado
    for($i=1;$i<=20;$i++){
        $tmp=$a;
        $a=$a+$b;
        echo " ".$a;
        $b=$tmp;
    }