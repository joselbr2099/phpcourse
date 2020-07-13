<?php
require '../vendor/autoload.php';

//funcion imprime en pdf
function printPdf($msg){
    $pdf = new FPDF();   //se crea un objeto en pdf
    $pdf->AddPage();     //nueva pagina
    $pdf->SetFont('Arial','B',16); //agregar fuente
    $pdf->Cell(40,10,$msg);        //sea agrega texto al pdf
    $pdf->Output();                //se imprime en pantalla el pdf
}

printPdf("hola jose");
?>