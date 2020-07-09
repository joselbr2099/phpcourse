<?php
    //este codigo suma 2 numeros mediante peticion post
    $a=$_POST["num1"];
    $b=$_POST["num2"];
    $resultado=$a+$b;
    echo "resultado : ".$resultado;
?>