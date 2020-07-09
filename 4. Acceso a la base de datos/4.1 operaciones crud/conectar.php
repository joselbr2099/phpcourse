
<?php
//archivo principal que establece la conexion a la base de datos
//en $mysqli se almacena la conexion
$mysqli = new mysqli("127.0.0.1", "root", "", "php", 3306); //se establece la conexion a la db usando el esquema de orientado a objetos

//condicion para mostrar un posible error de conexion
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{
    echo "conexion correcta: ".$mysqli->host_info . "\n";
}

?>
