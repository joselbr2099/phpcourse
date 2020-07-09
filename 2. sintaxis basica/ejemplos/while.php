<?php
    //estructura while
    $a=1;
    $b=2;
    while($a<10){
        echo "\nvalor: ".$a;
		echo "<br>";
        $a++; //$a=$a+1
    }
    echo "\nterminado";

    //estructura do-while
    echo "\ninicia do-while";
    $a=1;
    $b=2; 
    do{
        echo "\nvalor: ".$a;
		echo "<br>";
        $a++;
    }while($a<10);
	echo "<br>";
?>