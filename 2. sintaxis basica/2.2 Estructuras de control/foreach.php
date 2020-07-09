<?php
//estructura foreach se utiliza para iterar en todos los elementos de un array
$array=array(
    'a' => "letra a",
    "b" => "letra b",
    1=>"numero 1",    
);
foreach($array as $var){
    echo "\nvalor de array: ".$var;
}
?>