<?php
include('conectar.php'); //se llama al archivo de conexion

//se obtiene datos en un array
$datos=array(
    "id" => $_GET["id"],
    "nombre" => $_GET["nom"],
    "paterno" => $_GET["pat"],
    "materno"=>$_GET["mat"],
    "ci"=>$_GET["ci"],
    "correo"=>$_GET["correo"]
);


//se iteran los datos del array
foreach($datos as $clave=>$valor){
    if(!empty($valor)){ //se verifica que el valor de una clave no este vacia
        if($clave=="id"){
            if(delete($clave,$valor)){ //esta funcion borra una fila de la db en funcion de la clave y el valor dado
            break; //se rompe el ciclo foreach ya que si se elimino la fila no hay nada mas que borrar
            }
        }else{
            if(verificar($clave,$valor)){ //verificamos que el dato ingresasdo sea un dato correcto
                if(delete($clave,$valor)){ //esta funcion borra una fila de la db en funcion de la clave y el valor dado
                break; //se rompe el ciclo foreach ya que si se elimino la fila no hay nada mas que borrar
                }
            }else{
                echo "el dato ingresado ".$clave." con el valor (".$valor.") no cumple con la longitud de 5 caracateres como minimo";
            }
        }
    }else{
        echo "<br> el campo: ".$clave." esta vacio ".$valor;
    } 
}

//funcion para borrara una fila del la db, esta prepara la consulta de borrado y la ejecuta
function delete($clave,$valor){
    global $mysqli; //se define la variable que contiene la conexion en el archivo conectar.php 
    switch ($clave) {
        case "id":
            $sql="DELETE FROM cuenta WHERE id=$valor;"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                echo("<br>ERROR EN EL BORRADO DE ID: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
                ECHO "<BR> consulta original: ".$sql;
                return false;
            }else{
                spc();
                echo "EXITO EN EL BORRADO";
                return true;
            }
        case "nombre":
            $sql="DELETE FROM cuenta WHERE nombre='$valor';"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                echo("<br>ERROR EN EL BORRADO DE NOMBRE: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
                echo "<BR> consulta original: ".$sql;
                return false;
            }else{
                spc();
                echo "EXITO EN EL BORRADO";
                return true;
            }

        case "paterno":
            $sql="DELETE FROM cuenta WHERE paterno='$valor';"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                echo("<br>ERROR EN EL BORRADO DE PATERNO: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
                echo "<BR> consulta original: ".$sql;
                return false;
            }else{
                spc();
                echo "EXITO EN EL BORRADO";
                return true;
            }
            break;
        case "materno":
            $sql="DELETE FROM cuenta WHERE materno='$valor';"; 
            if (!$mysqli -> query($sql)) {                               
                echo("<br>ERROR EN EL BORRADO DE MATERNO: " . $mysqli -> error);   
                echo "<BR> consulta original: ".$sql;
                return false;
            }else{
                spc();
                echo "EXITO EN EL BORRADO";
                return true;
            }

        case "ci":
            $sql="DELETE FROM cuenta WHERE ci=$valor;";
            if (!$mysqli -> query($sql)) {                                
                echo("<br>ERROR EN EL BORRADO DE CI: " . $mysqli -> error);   
                echo "<BR> consulta original: ".$sql;
                return false;
            }else{
                spc();
                echo "EXITO EN EL BORRADO";
                return true;
            }

        case "correo":
            $sql="DELETE FROM cuenta WHERE correo='$valor';";
            if (!$mysqli -> query($sql)) {                                
                echo("<br>ERROR EN EL BORRADO DE CORREO: " . $mysqli -> error);   
                echo "<BR> consulta original: ".$sql;
                return false;
            }else{
                spc();
                echo "EXITO EN EL BORRADO";
                return true;
            }

    }
}

function verificar($cad){
    if (strlen($cad)<5){
        return false;
    }else{
        return true;
    }
}

function spc(){
    echo "<br>";
}


?>