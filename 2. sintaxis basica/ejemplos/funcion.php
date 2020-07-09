<?php

function suma(){
    $a=1;
    $b=2;
    $res=$a+$b;
    echo "<br>";
    echo "resultado: ".$res;
}

function resta($a,$b){
    //$a=1;
    //$b=2;
    $res=$a-$b;
    echo "<br>";
    echo "\nresultado resta: ".$res;
}

function compuesto($a,$b){
    //$a=1;
    //$b=2;
    $res=$a-$b;
    echo "<br>";
    //echo "resultado resta: ".$res;
    return $res;
}

suma();
resta(3,4);
$tmp=compuesto(4,8);
echo "\ncompuesto: ". $tmp;
?>