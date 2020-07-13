<?php
session_start();
include("../registro/conectar.php");
mensaje("bienenido ".$_SESSION['usuario']); // el nombre de usuario es el correo
//mensaje("tu contrasena es ".$_SESSION['contrasena']);
//mensaje("tu id de sesion ".print_r($_SESSION));

//si presion salir se cierra la sesion se usuario
if(isset($_POST['salir'])){ 
    session_destroy();
    header("Location: ../index.php");
    exit();
}

//si presiona borrar se eliminara la cuenta el usuario
if(isset($_POST['borrar'])){ 
    header("Location: borrar.php");
    exit();
}

//si presiona actualizar se actualizan los datos del usuario
if(isset($_POST['actualizar'])){ 
    header("Location: listar.php");
    $_SESSION["formEdit"]=true; //nos mostrara el formulario listar pero con opcion a editar
    exit();
}
  
//si presiona listar se muestran los datos del usuario
if(isset($_POST['listar'])){ 
    header("Location: listar.php");
    //creamos una variable en la sesion que nos permitira tener un con trol del formulario
    $_SESSION["formEdit"]=false; //que solo nos muestre la informacion sin editarla
    exit();
}

//si presiona informe se generara un reporte en pdf
if(isset($_POST['informe'])){ 
    header("Location: informe.php");
    //creamos una variable en la sesion que nos permitira tener un con trol del formulario
    exit();
}

mensaje("Numero de accesos al sistema: ".$_COOKIE["accesos"]);

?>
<div class='imput'>
<center><img src="images.jpg" width="200"  height="100"></center>
    <form action='' method='post'>
        <input type='submit' value='Ver mis datos' name="listar">        
    </form>
    <form action='' method='post'>
        <input type='submit' value='Actualizar mis datos' name="actualizar">        
    </form>
    <form action='' method='post'>
        <input type='submit' value='Generar informe' name="informe">        
    </form>
</div>
<div class='danger'>
    <form action='' method='post'>
        <input type='submit' value='Borrar mi cuenta' name="borrar">        
    </form>
</div> 

<div class='warning'>
    <form action='' method='post'>
        <input type='submit' value='Cerrar sesión' name="salir">        
    </form>
</div>    