<?php

if(isset($_POST['ver'])){ 
    $_SESSION["archivo"]=$_POST['ver'];
    header("Location: ver.php");
    exit();
}

if(isset($_POST['editar'])){ 
    header("Location: editar.php");
    exit();
}

if(isset($_POST['borrar'])){ 
 
    header("Location: index.php");
    exit();
}

function botones($file){
    print "
    <div class='panel'>
    <center><span class='label'>$file</span></center>
        <form action='' method='post'>
            <center>
                <button name='ver' type='submit' value='$file'>Ver</button>
                <button name='editar' type='submit' value='$file'>Editar</button>
                <button name='borrar' type='submit' value='$file'>Borrar</button>
            </center>
        </form>
    </div>";
}


function back(){
    print "
    <div class='panel'>
        <form >
        <input type='submit' value='Regresar' onclick='history.back()'>
        </form>
    </div>    ";
}

function mensaje($dato){
    echo "<br>";
    echo "<div class='panel'>";
    echo "<center><span class='label'>$dato</span></center>";
    echo "</div>";
}

//muestra un error
function error($dato){
    echo "<br>";
    echo "<div class='warning'>";
    echo "<center><span class='label'> $dato </span></center>";
    echo "</div>";
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>nasa </title>
    <link rel="stylesheet" href="assets/styles.css">
</head> 
<body>
<div class="panel">
    <center><h3>Faster file manager</h3></center>
    <center><img src="assets/fm.png" width="200"  height="200"></center>
</div>