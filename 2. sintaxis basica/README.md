Curso de introduccion a:

    ██████╗ ██╗  ██╗██████╗ 
    ██╔══██╗██║  ██║██╔══██╗
    ██████╔╝███████║██████╔╝
    ██╔═══╝ ██╔══██║██╔═══╝ 
    ██║     ██║  ██║██║     
    ╚═╝     ╚═╝  ╚═╝╚═╝Jose Luis Blas Ralde

CODIGO
 todo el código en php debe estar entre las etiquetas:

 <?php
    //todo el código debe estar aqui y tambien se esta manera se escriben comentarios en php
 ?>

 IMPRIMIR EN PANTALLA
 Para una impresion en pantalla rapida puede usarse la instrucción "echo", en código:

 <?php
    //se imprime en pantalla
    //el final de cada instrucción debe terminar con ;
    echo "Hola mundo";
 ?>

 echo tambien puede usarse para introducir codigo html

 EJECUCIÓN
 Todo archivo que contenga código php debe tener extension .php y el nombre del archivo no debe contener espacios
 
 -Ejecución en terminal: php <nombre_archivo>.php
 -Ejecución en servidor web: el archivo .php debe estar en la carpeta raiz del servidor web
                             y se debe invocar al archivo desde el navegardor por la barra de
                             direcciónes: http://localhost/<nombre_archivo>.php

SERVIDOR WEB DE PHP
Php tiene su propio servidor web, en la terminal escribir:
php -S 0.0.0.0:8080 . 
esto iniciara el servidor web en la carpeta actual 

