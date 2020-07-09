<?php
include('conectar.php'); //se llama al archivo de conexion

//se obtiene los datos del usuario 
$id=$_GET["id"];
$usuario=$_GET["usuario"];

//se declara una variable vacia para su posterior insercione en la db 
$pass1 ="";

//cuando el usuario presiona el boton Registrar se capturan los datos para comparar el pasword ingresado
if(isset($_POST['Registrar'])){ 
  $pass1 = $_POST['passwd1'];//se obtienen los datos del formulario
  $pass2 = $_POST['passwd2'];
  
  if ($pass1==$pass2){ //se compara si los paswords son iguales
    if(verificar($pass1)){ // y que no sea corta
      insertPasswd($id,$usuario,$pass1); //si todo esta bien se inserta el pasword en la tabla password y el usuario esta registrado
    }else{
      error("error la longitud de la contrase;a debe ser mayor a 3");
  }
    
  }else{
    error("Las contraseñas deben ser iguales");
 
  }
}

//echo "id ".$id." usuario ". $usuario." passwd ".$pass1;

//inserta el pasword en la db y regresa a la pagina principal
function insertPasswd($id,$usuario,$pass1){
  global $mysqli;
  $sql="INSERT INTO password (usuario, paswd, cuenta) VALUES ('$usuario',MD5('$pass1'),'$id');";
  //echo "consulta: ".$sql;
  if (!$mysqli -> query($sql)) {
    error("<br>ERROR EN LA INSERCION: " . $mysqli -> error); 
  }else{
    allok("Registro completado");
    //back();
    header("Location: ../index.php");
    exit();
  }
}

?>

<div class='imput'>
  <form action='' method='post'>
      <center>
      <label for='fname'>Contraseña</label>
      <input type='text'  name='passwd1'>
      <label for='fname'>Repita Contraseña</label>
      <input type='text'  name='passwd2'>
      </center>
      <input type='submit' name='Registrar'>
  </form>
</div>

