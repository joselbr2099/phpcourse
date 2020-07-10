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
    $contents = fread($fp, filesize("prueba.txt")); //para cada lectura debe especificarse tambien su tamaño en bytes 
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

//escribir en un archivo, si el archivo no existe lo creara
if (!$fp = fopen("prueba.txt", "w")){  //w indica escritura (se sobreescribiran los datos que exista en el archivo)
    echo "No se ha podido abrir el archivo";
}else{
    echo "Archivo habierto, escribiendo datos:\n";
    fwrite($fp,"nuevo texto insertado");           //con esta funcion se escribe en el archivo
    fclose($fp); // siempre despues de procesar el archivo
}



