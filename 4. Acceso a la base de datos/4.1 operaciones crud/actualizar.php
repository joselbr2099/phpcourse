<?php
include('conectar.php'); //se llama al archivo de conexion

//este codigo actualiza un dato de la db especificando un id

//se obtiene el id de manera independiente para su verificacion
$id=$_GET["id"];

//se obtienen los dartos en un array
$datos=array(
    "nombre" => $_GET["nom"],
    "paterno" => $_GET["pat"],
    "materno"=>$_GET["mat"],
    "ci"=>$_GET["ci"],
    "correo"=>$_GET["correo"]
);

//si el id esta vacio no puede hacerse nada mas
if(empty($id)){
    echo "<br> error debe especificar un ID";
    return;
}

//se itera sobre el array
foreach($datos as $clave=>$valor){
    if(!empty($valor)){  //se verifica que la toda clave tenga un valor
        if(verificar($valor)){ //se verifica que los datos imgresasdos sean correctos
            update($id,$clave,$valor);  //si todo esta correcto se procede con la actualizacion
        }else{
            echo "el dato ingresado ".$clave." con el valor (".$valor.") no cumple con la longitud de 5 caracateres como minimo";
        }
    }else{
        echo "<br> el campo: ".$clave." esta vacio ".$valor;
    }
   
}

//verifica que el dato ingresado sea correcto
function verificar($cad){
    if (strlen($cad)<5){
        return false;
    }else{
        return true;
    }
}

//funcion que actualiza los datos, esta crea la consulta sql y la ejecuta
function update($id,$clave, $valor){
    global $mysqli; //se define la variable que contiene la conexion en el archivo conectar.php 
    switch ($clave) {
        case "nombre":
            $sql="UPDATE cuenta SET nombre='$valor' WHERE id=$id"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                echo("<br>ERROR EN LA INSERCION NOMBRE: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
                ECHO "<BR> consulta original: ".$sql;
            }else{
                spc();
                echo "EXITO EN LA INSERCION";
            }
            break;
        case "paterno":
            $sql="UPDATE cuenta SET paterno='$valor' WHERE id=$id"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                echo("<br>ERROR EN LA INSERCION PATERNO: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
            }else{
                spc();
                echo "EXITO EN LA INSERCION";
            }
            break;
        case "materno":
            $sql="UPDATE cuenta SET materno='$valor' WHERE id=$id"; 
            if (!$mysqli -> query($sql)) {                               
                echo("<br>ERROR EN LA INSERCION MATERNO: " . $mysqli -> error);   
            }else{
                spc();
                echo "EXITO EN LA INSERCION";
            }
            break;
        case "ci":
            $sql="UPDATE cuenta SET ci='$valor' WHERE id=$id"; 
            if (!$mysqli -> query($sql)) {                                
                echo("<br>ERROR EN LA INSERCION CI: " . $mysqli -> error);   
            }else{
                spc();
                echo "EXITO EN LA INSERCION";
            }
            break;
        case "correo":
            $sql="UPDATE cuenta SET correo='$valor' WHERE id=$id"; 
            if (!$mysqli -> query($sql)) {                                
                echo("<br>ERROR EN LA INSERCION CORREO: " . $mysqli -> error);   
            }else{
                spc();
                echo "EXITO EN LA INSERCION";
            }
            break;
    }
}

function spc(){
    echo "<br>";
}
?>