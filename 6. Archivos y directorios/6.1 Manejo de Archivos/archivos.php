<?php
//archivo para la gestion de archivos

//leer un archivo
if (!$fp = fopen("prueba.txt", "r")){  //r indica de solo lectura, retorna false si hubo un error
    echo "No se ha podido abrir el archivo";
}else{
    echo "Archivo habierto\n";
}

//mostrar contenido de un archivo
if (!$fp = fopen("prueba.txt", "r")){  //r indica de solo lectura, retorna false si hubo un error
    echo "No se ha podido abrir el archivo";
}else{
    echo "Archivo habierto, contenido:\n";
    $contents = fread($fp, filesize("prueba.txt"));
    print $contents;
}

//cerar el archivo despues de procesarlo
if (!$fp = fopen("prueba.txt", "r")){  //r indica de solo lectura, retorna false si hubo un error
    echo "No se ha podido abrir el archivo";
}else{
    echo "Archivo habierto, contenido:\n";
    $contents = fread($fp, filesize("prueba.txt"));
    print $contents;
    fclose($fp); // siempre despues de procesar el archivo
}


