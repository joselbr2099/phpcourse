<?php
require '../vendor/autoload.php';
//codigo que guarda el archivo pdf en un aarchivo
/*
    I: send the file inline to the browser. The PDF viewer is used if available.
    D: send to the browser and force a file download with the name given by name.
    F: save to a local file with the name given by name (may include a path).
    S: return the document as a string.
*/


//funcion imprime en pdf
function printPdf($msg){
    $pdf = new FPDF();   //se crea un objeto en pdf
    $pdf->AddPage();     //nueva pagina
    $pdf->SetFont('Arial','B',16); //agregar fuente
    $pdf->Cell(40,10,$msg);        //sea agrega texto al pdf
    $pdf->Output("d","pruebe.pdf");                //se imprime en pantalla el pdf
}

printPdf("hola jose");
?>