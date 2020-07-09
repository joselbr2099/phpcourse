<?php
include('conectar.php'); //se llama al archivo de conexion


$id=rand(2,100); //se genera un numero id aleatorio

//se obtiene los datos del formulario en un array
$datos=array(
    "id"=> $id,
    "nombre" => $_GET["nom"],
    "paterno" => $_GET["pat"],
    "materno"=>$_GET["mat"],
    "ci"=>$_GET["ci"],
    "correo"=>$_GET["correo"]
);
//echo $datos["nombre"] //jose

//cada dato que cumpla los requisitos minimos(longitud minima) se le asigna un valor de 1 
//si todos los datos cumplen los requisitos la suma total de estos es 5
//y si todos cumplen los requisitos se procede a insertarlos en la db
$tmp=0; //esta varable controla la suma total de la descripcion anterior

//se itera en el array
foreach($datos as $dato){
    spc();
    if (verificar($dato)){ //se verifica que los datos ingresados cumplan los requisitos       
        ++$tmp;            //si cumple, ese dato vale 1 que se suma a la variable $tmp
        echo "<br>";
        echo " dato: ".$dato." correcto";
    }else{
        echo "<br>";
        echo " dato: ".$dato." no es correcto";
    }
}

//si todos los datos cumplen se procede a la insercion en la db
if ($tmp==5){
    spc();
    echo "Datos correctos insertando datos en la db";
    
    $columnas = implode(", ",array_keys($datos));    //se extraen las llaves que son iguales a las columnas de la db
    $toInsert = implode("','",array_values($datos)); //se extraen los datos para ser insertados
    
    echo "<br> columnas a insertar: ".$columnas;     //mensajes de depuracion
    echo "<br> fila a insertar: ".$toInsert;         //
    
    $sql="INSERT INTO cuenta ($columnas) VALUES ('$toInsert'); "; //consulta a realizar
    echo "<br>consulta a realizar: ".$sql;                        //mensaje de depuracion
    if (!$mysqli -> query($sql)) {                                //insercion en la db  
        echo("<br>ERROR EN LA INSERCION: " . $mysqli -> error);   //muestra error si hay problemas en la insercion
    }else{
        spc();
        echo "EXITO EN LA INSERCION";
    }
}else{
    echo "<br>";
    echo "el dato: los datos ingresados no cumplen con la longitud de 5 caracateres como minimo";
}

//verifica que el dato ingresdo cumple con los requisitos para la insercion
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