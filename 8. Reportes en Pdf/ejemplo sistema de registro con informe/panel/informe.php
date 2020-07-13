<?php
session_start();  //se inicia la sesion
include("../registro/conectar.php"); //se llama al script de conexion

//se obtiene el correo de la sesion
$correo=$_SESSION["usuario"];

//se realiza la consulta sql
$sql="SELECT * FROM cuenta WHERE correo='$correo'"; //consulta original: UPDATE cuenta SET nombre="test" WHERE id=22
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



//funcion que imprime el resultado en pdf
function show($result){
    ob_start();
    require '../../../vendor/autoload.php';//se llama a la biblioteca de pdf
    $pdf = new FPDF();   //se crea un objeto en pdf
    $pdf->AddPage();     //nueva pagina
    $pdf->SetFont('Arial','B',16); //agregar fuente
    $pdf->Image('images.jpg',10,6,30); //se agrega imagen al pdf
    $pdf->Ln(20);
    while($row = $result->fetch_assoc()) {
        /*Nombre <input  type='text' name='nombre' value='".$row["nombre"]."'><br>";
        echo "        Paterno <input type='text' name='pat' value='".$row["paterno"]."'><br>";
        echo "        Materno <input  type='text' name='materno' value='".$row["materno"]."'><br>";
        echo "        CI <input  type='text' name='ci' value='".$row["ci"]."'><br>";*/
        $pdf->Cell(0,10,'Nombre: '.$row['nombre'],0,1);        //sea agrega texto al pdf
        $pdf->Cell(0,10,'Ap paterno: '.$row['paterno'],0,1);        //sea agrega texto al pdf
        $pdf->Cell(0,10,'Ap materno: '.$row['materno'],0,1);        //sea agrega texto al pdf
        $pdf->Cell(0,10,'Ci: '.$row['ci'],0,1);        //sea agrega texto al pdf
        $pdf->Cell(0,10,'Correo: '.$_SESSION["usuario"],0,1);        //sea agrega texto al pdf
    }
    $pdf->Output();  //se imprime en pantalla el pdf
    ob_end_flush(); 
}


printPdf("hola jose");
?>