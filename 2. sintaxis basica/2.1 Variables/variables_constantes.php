<?php
//ejemplos de variables 
$nombre="jose"; //
$edad=34;

//mostrar en pantalla 
echo "la edad es $nombre y su edad es $edad";

//se define una constante
define("var","este valor");
echo "y la variable constante es ".constant("var");

//varibles tipo cadena
$apmaterno="blas";
$appaterno="ralde";
echo "<br>";
echo "Apellido paterno:".$apmaterno." Apellido materno:".$appaterno;
echo "<br>suma rara</br>";

//variables de tipo caractaer numericas enteros y de punto flotante
$val1=4;    //tipo entero
$val2=2.34; //tipo float 
$val3="4";  //tipo cadena
$val4='4';  //tipo caracter

//suma de variables
$sum=$val1+$val2+$val3+$val4;
echo "resultado: ".$sum;

//variable de variables
$a="demo";
$demo="jaja";
echo "<br>";
echo "valor de variable de otra variable ".$$a."\n"; // el /n significa salto de linea

?>