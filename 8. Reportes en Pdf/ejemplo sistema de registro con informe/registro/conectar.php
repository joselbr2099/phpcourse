
<?php
//en $mysqli se almacena la conexion
$mysqli = new mysqli("127.0.0.1", "root", "", "php", 3306);

//en este codigo se agregan funciones que se pueden llamar desde diferentes partes del sistema de registro

if ($mysqli->connect_errno) {
    //echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    error("Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}else{
    //echo "conexion correcta: ".$mysqli->host_info . "\n";
    allok("conexion correcta: ".$mysqli->host_info . "\n");
}

/////////////////////////
//mensajes html

//muestra un error
function error($dato){
    echo "<br>";
    echo "<div class='warning'>";
    echo "<center><span class='label'> $dato </span></center>";
    echo "</div>";
}

//muestra un mensaje correcto
function allok($dato){
    echo "<br>";
    echo "<div class='success'>";
    echo "<center><span class='label'>$dato</span></center>";
    echo "</div>";
}

//muestra un boton de regresar a la pagina anterior
function back(){
    print "
    <div class='imput'>
        <form >
        <input type='submit' value='Regresar' onclick='history.back()'>
        </form>
    </div>    ";
}

//funcion lleva a pagina especifica
function goUrl($url){
    print "
    <div class='imput'>
        <form action='$url'>
            <input type='submit' value='Vamos' />
        </form>
    </div>";
}

//muestra un mensaje cualquiera
function mensaje($dato){
    echo "<br>";
    echo "<div class='success'>";
    echo "<center><span class='label'>$dato</span></center>";
    echo "</div>";
}

//verifica que una cadena tenga una longitud de mas de 3
function verificar($cad){
    if (strlen($cad)<3){
        return false;
    }else{
        return true;
    }
}
/*function next($dato){
    print "
    <div class='imput'>
        <form >
        <input type='submit' value='Regresar' onclick='history.back()'>
        </form>
    </div>    ";
}*/

////////////en php code

?>

<!-- codigo pricipal para todas las paginas -->
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>nasa </title>
    <link rel="stylesheet" href="../assets/styles.css">
</head> 
<body>
<div class="imput">
    <center><h3>Welcome to NASA</h3></center>
    <center><img src="../assets/nasa.png" width="200"  height="100"></center>
</div>    

