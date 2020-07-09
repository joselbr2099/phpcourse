<?php
//arrays------------------------------------------------------------------
echo "<br>";
echo "valor del array\n";
$array=array(
    'a' => "letra a",
    "b" => "letra b",
    1=>"numero 1",    
);

echo var_dump($array);
echo "\n";
echo "valor de un solo elemto\n";
echo $array['a'];

//definiendo otro array
$array2=array('a','b','b',1);
echo "valor de array unico\n";
echo var_dump($array2)."\n";
echo var_dump($array2[0])."\n";

//agregar, quitar,cambiar elementos array
//cambiar elemento
echo "valor previo array1: ".$array['a']." valor previo array2: ".$array2[3];
$array['a']="letra cambiada";
$array2[3]="numero";
echo "\nvalor nuevo array1: ".$array['a']." nuevo valor array2: ".$array2[3];

//agregar elemento
$array['x']="nuevo elemento";
$array2[]='x';
echo "\nvalor agregado array1: ".$array['x']." nuevo valor agregado array2: ".$array2[4];

//borrado de elemento
unset($array['x']);
unset($array2[4]);
echo "valor de arrays actualizado\n";
echo var_dump($array)."\n";
echo var_dump($array2)."\n";

?>