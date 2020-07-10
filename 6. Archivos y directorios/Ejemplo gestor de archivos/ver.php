<?php
session_start();
include("functions.php");

mensaje("Contenido del archivo: ".$_SESSION["archivo"]);

//mostrar contenido de un archivo
if (!$fp = fopen($_SESSION["archivo"], "r")){  //r indica de solo lectura, retorna false si hubo un error
    arror("No se ha podido abrir el archivo");
}else{
    $contents = fread($fp, filesize($_SESSION["archivo"])); //para cada lectura debe especificarse tambien su tamaño en bytes 
    mensaje($contents);
    back();
}

?>