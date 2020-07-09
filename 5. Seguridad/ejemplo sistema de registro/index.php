<?php
session_start(); //se inicializa le sesion

//se crea una cookie para contar el numero de accesos al sistema
if(isset($_COOKIE['accesos'])){
  setcookie("accesos",$_COOKIE['accesos']+1, time() + (86400 * 3), "/");
}else{
  setcookie("accesos",1, time() + (86400 * 3), "/");
}
//si ya existe una sesion se pasa directamente a su panel de control de lo contrario 
//muestra el login
if(array_key_exists("logged",$_SESSION)){
  if($_SESSION["logged"]==true){
    header("Location: panel");
  }  exit();
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>nasa </title>
    <link rel="stylesheet" href="assets/styles.css">
</head> 
<body>
<div class="imput">
    <center><h3>Welcome to NASA</h3></center>
    <center><img src="assets/nasa.png" width="200"  height="100"></center>
</div>    

 <div class="imput"> 
  <form action="registro/ingresar.php" method="post">
    <center>
    <label for="fname">correo</label>
    <input type="text"  name="usuario">
    <label for="fname">Contraseña</label>
    <input type="text"  name="paswd">
    </center>
    <input type="submit" name="Ingresar">
  </form>
  <form action="registro/insertar.html">
    <input type="submit" value="Registrese" />
</form>

</div>

</body>
</html>