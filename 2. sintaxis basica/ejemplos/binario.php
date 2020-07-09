<?php
    //codigo para convertir un numero en binario
    /*
        algoritmo
        ejemplo convertir el numero 13 en binario
        
        paso 1 extraer los modulos de 13 (algoritmo)

        $numero /2 = $resto => ($resto*2)-$numero=$mod
        ==============================================
        13      /2 = 6      => 13-(6*2) =[1](modulo)
        6       /2 = 3      => 6-(3*2)  =[0]
        3       /2 = [1]    => 3-(1*2)  =[1]
                  |  
        [1] es el ultimo valor y no puede dividirse mas (el 1 de 3\2)
        
        paso 2 extrar los numeros (fijarse el orden )
        13 en binario es 1101

        ejemplo adicional 14 en binario
        paso1 
        14 / 2 = 7   => 14-(7*2)=[0]
        7  / 2 = 3   => 7-(3*2) =[1]
        3 /  2 = [1] => 3-(1*2) =[1]
        paso2
        14 en binario es 1110

        NOTA: en este ejemplo se hace uso de la funcion intval() que retorna la parte entera
              de un numero decimal 
              
    */
    $numero=14; //numero a convertir en binario
    $resto=0;
    $mod="";
    //en este caso en conveniente usar do-while por la forma del algoritmo
    do{

        $resto=intval($numero / 2);   
        $mod=$numero-($resto*2).$mod; //en $mod se concatena(unir cadenas de texto o caracteres) el resultado del modulo
                                      //la concatenacion se da hacia adelante osea si quiero unir 1 a 10 sera 110 
                                      // 0 a 110 sera 0110   

        //actualizo la variable $numero
        $numero=$resto;

    }while($resto!=1); //mientras $resto sea distinto de 1 el ciclo continuara, cuando $resto sea 1 osea 1!=1 (distinto) que es falso el ciclo terminara 

    $mod=($resto*2)-$numero.$mod;  //se invierte el orden por el signo negativo
    function mostrar($mods){
        echo "\n".$mods;
      }
?>    