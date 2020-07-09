<?php
session_start(); //se onicializa la sesion
include('conectar.php'); //se incluye el archivo de conexion
$usuario=$_POST["usuario"]; //se obtienen datos del formulario
$paswd=$_POST["paswd"];

//se verifica que el usuario ingresado exista o este bien escritp
if (existe($usuario)){
    if(existePasword($paswd,$usuario)){ //si el usuario existe se verifica su password 
        $_SESSION["logged"]=true;       //se establecen datos para la sesion
        $_SESSION["usuario"]=$usuario;
        $_SESSION["contrasena"]=$paswd;
        header("Location: ../panel");   //se procede al panel de control del usuario
        exit();
    }else{
        error("La contraseña no existe");
        back();
    }
}else{
    error("El usuario $usuario no esta registrado");
    back();
}

//verifica que exista un usuario en la db
function existe($usuario){
    global $mysqli;
    $sql="select id from cuenta where correo='$usuario'"; //se prepara la consulta sql
    $result = $mysqli->query($sql);
    
    if($result->num_rows!=0){
        return true;
    }
    else{
        return false;
    }
}

//verifica que el password exista en la db y esta corresponda al usuario
function existePasword($pass,$usuario){
    global $mysqli;
    $sql="SELECT paswd FROM password where paswd=MD5('$pass') and usuario='$usuario';"; //se prepara ls consulta sql
    $result = $mysqli->query($sql);

    if($result->num_rows>0){
        return true;
    }
    else{
        return false;
    }
}


?>