<?php
include('conectar.php'); //se llama al archivo de conexion

//$id=rand(2,100);
//la db tiena la funcion de autoincremento en el id

//se obtienen los datos en un array
$datos=array(
    //"id"=> $id,
    "nombre" => $_GET["nom"],
    "paterno" => $_GET["pat"],
    "materno"=>$_GET["mat"],
    "ci"=>$_GET["ci"],
    "correo"=>$_GET["correo"]
);

//se verifica los datos como se hizo en la seccion se operaciones crud
$tmp=0;
foreach($datos as $dato){
    //spc();
    if (verificar($dato)){       
        ++$tmp; 
        //echo "<br>";
        //echo " dato: ".$dato." correcto";
        //allok("CORRECTO el dato: ".$dato." cumple con la longitud de 4 caracteres");
    }else{
        //echo "<br>";
        //echo " dato: ".$dato." no es correcto";
        error("ERROR: el dato: ".$dato." no cumple(n) con la longitud de 4 caracateres como minimo");
    }
}

if ($tmp==5){
    //spc();
    //echo "Datos correctos insertando datos en la db";
    //allok("Datos correctos insertando datos en la db");

    $columnas = implode(", ",array_keys($datos));    //se extraen las llaves que son iguales a las columnas de la db
    $toInsert = implode("','",array_values($datos)); //se extraen los datos para ser insertados
    
    //echo "<br> columnas a insertar: ".$columnas;     //mensajes de depuracion
    //echo "<br> fila a insertar: ".$toInsert;         //
    
    if(email($datos["correo"])){                      //si todos los datos son correctos se verifica que el correo no este registrado prviamente
        error("el correo ".$datos["correo"]." ya esta registrado");
        back();
    }else{
        $sql="INSERT INTO cuenta ($columnas) VALUES ('$toInsert'); "; //consulta a realizar
        //echo "<br>consulta a realizar: ".$sql;                        //mensaje de depuracion
        if (!$mysqli -> query($sql)) {                                //insercion en la db  
            //echo("<br>ERROR EN LA INSERCION: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
            error("<br>ERROR EN LA INSERCION: " . $mysqli -> error);
        }else{
            //spc();
            //echo "EXITO EN LA INSERCION";
            //allok("EXITO EN LA INSERCION");
            $last_id = $mysqli->insert_id; //obtiene el ultimo id insertado
            header("Location: passwd.php?id=$last_id&usuario={$datos['correo']}"); //si todo esta correcto se procede a la creacion del pasword
            exit();
            
        }
    }
   
}else{
    //echo "<br>";
    //echo "el dato: los datos ingresados no cumplen con la longitud de 5 caracateres como minimo";
    error("ERROR: CORRIGA LOS HERRORES PARA COMPLETAR SU REGISTRO");
    back();
}

//verifica que el dato ingresdo cumple con los requisitos para la insercion
/*function verificar($cad){
    if (strlen($cad)<3){
        return false;
    }else{
        return true;
    }
}*/

function email($email){
    global $mysqli;
    $sql="SELECT id FROM cuenta WHERE correo='$email';";
    $result = $mysqli->query($sql);
    if($result->num_rows>0){
        return true;
    }
    else{
        return false;
    }
}

?>
