<?php
session_start(); //se inicializa la sesion
include("../registro/conectar.php"); //se llama al archivo de conexion

//definimos el array datos
$datos=array();

//extraemos el usuario de la sesion
$usuario=$_SESSION["usuario"];

//se obtienen los dartos en un array
$datos=array(
    "nombre" => $_POST["nombre"],
    "paterno" => $_POST["pat"],
    "materno"=>$_POST["materno"],
    "ci"=>$_POST["ci"]
);



//si el id esta vacio no puede hacerse nada mas
/*if(empty($id)){
    echo "<br> error debe especificar un ID";
    return;
}*/

//se itera sobre el array
foreach($datos as $clave=>$valor){
    if(!empty($valor)){  //se verifica que la toda clave tenga un valor
        if(verificar($valor)){ //se verifica que los datos imgresasdos sean correctos
            update($usuario,$clave,$valor);  //si todo esta correcto se procede con la actualizacion
        }else{
            //echo "el dato ingresado ".$clave." con el valor (".$valor.") no cumple con la longitud de 5 caracateres como minimo";
            error("el dato ingresado ".$clave." con el valor (".$valor.") no cumple con la longitud de 5 caracateres como minimo");
        }
    }else{
        //echo "<br> el campo: ".$clave." esta vacio ".$valor;
        error("el campo: ".$clave." esta vacio ");
    }
   
}

//verifica que el dato ingresado sea correcto
/*function verificar($cad){
    if (strlen($cad)<5){
        return false;
    }else{
        return true;
    }
}*/

//funcion que actualiza los datos, esta crea la consulta sql y la ejecuta
//para esra accion se cambio $id por correo y tambien en las 
function update($correo,$clave, $valor){
    global $mysqli; //se define la variable que contiene la conexion en el archivo conectar.php 
    switch ($clave) {
        case "nombre":
            $sql="UPDATE cuenta SET nombre='$valor' WHERE correo='$correo'"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                //echo("<br>ERROR EN LA INSERCION NOMBRE: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
                //ECHO "<BR> consulta original: ".$sql;
                error("<br>ERROR EN LA INSERCION NOMBRE: " . $mysqli -> error);
            }else{
                //spc();
                //echo "EXITO EN LA INSERCION";
                allOk("Se actualizo el nombre");
               
            }
            break;
        case "paterno":
            $sql="UPDATE cuenta SET paterno='$valor' WHERE correo='$correo'"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                echo("<br>ERROR EN LA INSERCION PATERNO: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
            }else{
                //spc();
                //echo "EXITO EN LA INSERCION";
                allOk("Se actualizo el paterno");
               
            }
            break;
        case "materno":
            $sql="UPDATE cuenta SET materno='$valor' WHERE correo='$correo'"; 
            if (!$mysqli -> query($sql)) {                               
                echo("<br>ERROR EN LA INSERCION MATERNO: " . $mysqli -> error);   
            }else{
                //spc();
                //echo "EXITO EN LA INSERCION";
                allOk("Se actualizo materno");
               
            }
            break;
        case "ci":
            $sql="UPDATE cuenta SET ci='$valor' WHERE correo='$correo'"; 
            if (!$mysqli -> query($sql)) {                                
                echo("<br>ERROR EN LA INSERCION CI: " . $mysqli -> error);   
            }else{
                //spc();
                //echo "EXITO EN LA INSERCION";
                allOk("Se actualizo el ci");
                
            }
            break;
        case "correo":
            $sql="UPDATE cuenta SET correo='$valor' WHERE correo='$correo'"; 
            if (!$mysqli -> query($sql)) {                                
                echo("<br>ERROR EN LA INSERCION CORREO: " . $mysqli -> error);   
            }else{
                //spc();
                //echo "EXITO EN LA INSERCION";
                allOk("EXITO EN LA INSERCION");
                
            }
            break;
    }
}

gourl("index.php");
/*function spc(){
    echo "<br>";
}*/

?>
