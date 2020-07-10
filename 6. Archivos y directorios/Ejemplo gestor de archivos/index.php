<?php
session_start(); //se inicializa le sesion

include("functions.php");

//obtenemos el directorio actial
$dir=getcwd()."\\"; //agregar barra al final, para poder imprimir caracteres especiales se agrega \

mensaje("Directorio actual ".$dir);

//inicia un gestor de directirio
// Abre un directorio conocido, y procede a leer el contenido;

if (is_dir($dir)) {  //se verifica que el directorio actual es un directorio
    if ($dh = opendir($dir)) { //se abre el directorio
        while (($file = readdir($dh)) !== false) {  //con read dir obtenemos cada elemento de la carpea
            if ("file"==filetype($dir . $file)){
                botones($file);
            }else{
                mensaje("nombre archivo: $file : tipo archivo: " . filetype($dir . $file));
            }
        }
        closedir($dh); //se cierra la gestion
    }
}
?>