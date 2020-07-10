<?php
//script para ver el manejo de dorectorios en php
//todas las funciones retornan true si la ruta directorio existe de lo contrario retorna false

//listar el directorio actual
$ficheros1  = scandir(".");  //retorna un array
print_r($ficheros1);

//muestra el directorio actual
echo "<br>\n Directorio actual ".getcwd();

//cambiar a un directorio
chdir("../"); //se cambia al directorio anterior
echo "<br>\n Directorio actual ".getcwd();

//verifica si un directorio es un directorio
if(is_dir(getcwd())){
    echo "<br>\n el archivo si es un directorio";
}else{
    echo "<br>\n el archivo no es un directorio";
}

//inicia un gestor de directirio
// Abre un directorio conocido, y procede a leer el contenido
echo "<br>\n gestor de directorio-----------------------------------\n";
$dir=getcwd()."\\"; //agregar barra al final, para poder imprimir caracteres especiales se agrega \
echo "<br>Directorio actual: ".$dir."\n";
if (is_dir($dir)) {  //se verifica que el directorio actual es un directorio
    if ($dh = opendir($dir)) { //se abre el directorio
        while (($file = readdir($dh)) !== false) {  //con read dir obtenemos cada elemento de la carpea
            echo "<br>nombre archivo: $file : tipo archivo: " . filetype($dir . $file) . "\n";
        }
        closedir($dh); //se cierra la gestion
    }
}
?> 