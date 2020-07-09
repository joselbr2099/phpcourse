<?php
//las funciones permiten llamar a porciones de codigo 

hola(); //se llama a la funcion hola

//funcion hola que muestra el mensaje hola mundo una funcion que no retorna un valor tambien puede llamarse procedimiento
function hola(){
    echo "Hola mundo";
}

holaTu("jose"); //funcion con envio de parametros


//funcion recive parametros
function holaTu($msg){
    echo "hola ".$msg;
}

//se llama a la funcion para que retorne una respuesta
$res=suma('1','2');
echo "resultado suma: ".$res;   

//esta funcion toma 2 parametros los suma y retorna su resultado
function suma($a,$b){
    return $a+$b;
}

?>