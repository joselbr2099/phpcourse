<?php
session_start(); //se inicializa la sesion
include("../registro/conectar.php"); //se llama al archivo de conexion

// en este caso unicamente se lista por usuario, no son necesarias las demas consultas ni utilizar el array

//se obtiene los datos del formulario en un array
/*$datos=array(
    "id" => $_GET["id"],
    "nombre" => $_GET["nom"],
    "paterno" => $_GET["pat"],
    "materno"=>$_GET["mat"],
    "ci"=>$_GET["ci"],
    "correo"=>$_GET["correo"] //se obtiene de la sesion
);*/


//tampoco es necesario iterar para comprobar los datos

//se itera sobre el array para poder procesar cada dato del array
/*foreach($datos as $clave=>$valor){
    if(!empty($valor)){  //se verifica que el valor de cada clave no este vacia con la funcion empty y anteponiendo el simbolo de admiracion
        if($clave=="id"){
            listar($clave,$valor); //la funcion listar se encarga de preparar la consulta sql
            continue;               //con esta instruccion le decimos al foreach que siga con la siguiente instruccion
        }
        
        if(verificar($clave,$valor)){  //verifica la longitud de cada dato del formulario
            listar($clave,$valor);     //lista el dato obtenido del formulario
        }else{
             echo "el dato ingresado ".$clave." con el valor (".$valor.") no cumple con la longitud de 5 caracateres como minimo";
        }    
    }else{
        echo "<br> el campo: ".$clave." esta vacio ".$valor;
    } 
}*/

//solo necesitamos llamar a la funcion listar con el nombre de usuario(el correo)
listar("correo",$_SESSION["usuario"]);

//esta funcion se encarga de preparar la consulta sql segun cada dato no vacio obtenido del foemulario
//cuando la consulta sql esta lista esata es enviada a la funcion show() que se encarga se mostrarla en pantalla
function listar($clave, $valor){
    global $mysqli; //se define la variable que contiene la conexion en el archivo conectar.php 
    switch ($clave) {
        /*case "id":
            echo "<br> listando por id------------------------";
            $sql="SELECT * FROM cuenta WHERE id='$valor'"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                echo("<br>ERROR EN EL LISTADO id: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
                ECHO "<BR> consulta original: ".$sql;
            }else{
                $result = $mysqli -> query($sql); //se realiza la consulta 
                show($result);                     //se la envia a esta funcion para mostrarla en pantalla
                spc();
                echo "EXITO EN EL LISTADO";
            }
            break;
        case "nombre":
            echo "<br> listando por nombre------------------------";
            $sql="SELECT * FROM cuenta WHERE nombre='$valor'"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                echo("<br>ERROR EN EL LISTADO NOMBRE: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
                ECHO "<BR> consulta original: ".$sql;
            }else{
                $result = $mysqli -> query($sql);
                show($result);
                spc();
                echo "EXITO EN EL LISTADO";
            }
            break;
        case "paterno":
            echo "<br> listando por paterno------------------------";
            $sql="SELECT * FROM cuenta WHERE paterno='$valor'"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                echo("<br>ERROR EN EL LISTADO PATERNO: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
                ECHO "<BR> consulta original: ".$sql;
            }else{
                $result = $mysqli -> query($sql);
                show($result);
                spc();
                echo "EXITO EN EL LISTADO";
            }
            break;
        case "materno":
            echo "<br> listando por materno------------------------";
            $sql="SELECT * FROM cuenta WHERE materno='$valor'"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                echo("<br>ERROR EN EL LISTADO MATERNO: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
                ECHO "<BR> consulta original: ".$sql;
            }else{
                $result = $mysqli -> query($sql);
                show($result);
                spc();
                echo "EXITO EN EL LISTADO";
            }
            break;
        case "ci":
            echo "<br> listando por ci------------------------";
            $sql="SELECT * FROM cuenta WHERE ci='$valor'"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                echo("<br>ERROR EN EL LISTADO CI: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
                ECHO "<BR> consulta original: ".$sql;
            }else{
                $result = $mysqli -> query($sql);
                show($result);
                spc();
                echo "EXITO EN EL LISTADO";
            }
            break;*/
        case "correo":
            //echo "<br> listando por correo------------------------";
            $sql="SELECT * FROM cuenta WHERE correo='$valor'"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
            if (!$mysqli -> query($sql)) {                                //insercion en la db  
                //echo("<br>ERROR EN EL LISTADO CORREO: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
                //ECHO "<BR> consulta original: ".$sql;
                error("ERROR EN EL LISTADO CORREO: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
            }else{
                $result = $mysqli -> query($sql);
                show($result);
                //spc();
                //echo "EXITO EN EL LISTADO";
            }
            break;
    }
}


//esta funcion verifica que el dato ingresasdo del formulario cumpla con una longitud mayor de 5
/*function verificar($cad){
    if (strlen($cad)<5){
        return false; 
    }else{
        return true;
    }
}*/

//$sql="SELECT * FROM  cuenta WHERE idM1O>=(SELECT FLOOR( MAX( idM1O ) * RAND( ) )  FROM  modul1open) 
//ORDER BY idM1O LIMIT 1"


//esta funcion se encarga de mostrar los resultados de la consulta sql
function show($result){
    if ($_SESSION["formEdit"]) {  //verificamos que la respuesta a la consulta tenga mas de uns fila con num_rows
        // se puede editar los campos
        while($row = $result->fetch_assoc()) { //se obtiene en $row cada fila de la consulta con la funcion fetch_assoc()
          //echo "<br>"."id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Paterno: " . $row["paterno"]." - Materno: " . $row["materno"]." - Ci: " . $row["ci"]." - Correo " . $row["correo"]. "<br>";
        
          echo "<div class='imput'>";
          echo "    <center><h3>Mis datos</h3></center>";
          echo "    <br>";
          echo "    <form action='actualizar.php' method='POST'>";
          echo "        Nombre <input  type='text' name='nombre' value='".$row["nombre"]."'><br>";
          echo "        Paterno <input type='text' name='pat' value='".$row["paterno"]."'><br>";
          echo "        Materno <input  type='text' name='materno' value='".$row["materno"]."'><br>";
          echo "        CI <input  type='text' name='ci' value='".$row["ci"]."'><br>";
          echo "        <input type='submit' value='Actualizar'>";
          echo "    </form>";
          echo "</div>";
        }
        back(); //boton para regresar a la pagina anterior
      } else {
         //no se puede editar los campos
         while($row = $result->fetch_assoc()) { //se obtiene en $row cada fila de la consulta con la funcion fetch_assoc()
            //echo "<br>"."id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Paterno: " . $row["paterno"]." - Materno: " . $row["materno"]." - Ci: " . $row["ci"]." - Correo " . $row["correo"]. "<br>";
          
            echo "<div class='imput'>";
            echo "    <center><h3>Mis datos</h3></center>";
            echo "    <br>";
            echo "     Nombre <input disabled type='text' value='".$row["nombre"]."'><br>";
            echo "     Paterno <input disabled type='text' value='".$row["paterno"]."'><br>";
            echo "     Materno <input disabled type='text' value='".$row["materno"]."'><br>";
            echo "     CI <input disabled type='text' value='".$row["ci"]."'><br>";
            echo "     Correo <input disabled type='text' value='".$row["correo"]."'><br>";
            echo "</div>";
          }
          back(); //boton para regresar a la pagina anterior
      }
    
}

//imprime un salto de linea
/*function spc(){
    echo "<br>";
}*/
?>