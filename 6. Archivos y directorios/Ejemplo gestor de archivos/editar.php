<?php
session_start();
include("functions.php");
mensaje("Editando el archivo: ".$_SESSION["archivo"]);

if(isset($_POST['Guardar'])){ 

    echo "valor de post; ".$_POST['Guardar'];
    echo "valor de post; ".$_POST['text'];
    //escribir en un archivo, si el archivo no existe lo creara
    if (!$fp = fopen($_POST["text"], "w")){  //w indica escritura (se sobreescribiran los datos que exista en el archivo)
        error("No se ha podido abrir el archivo");
    }else{
        //echo "Archivo habierto, escribiendo datos:\n";
        fwrite($fp,$_POST['texto']);           //con esta funcion se escribe en el archivo
        fclose($fp); // siempre despues de procesar el archivo
    }
 
    exit();
}


?>

<div class="panel">
    <form action='' method='post'>
        <center>
        <label >Ingrese nuevo contenido:</label>
            <textarea name="text" rows="4" cols="40">
            
            </textarea>
        </center>    
        <br><br>
        <input type="submit" value="Guardar">
    </form>
</div