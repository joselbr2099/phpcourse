<?php
//mas ejemplos http://meudiseny.com/miphp/ejmExpreRegul.php

// Buscar una cadena dentro de otra (/ ... /) 

// Función que mostrará si existe o no, el patrón indicado 
function existe( $valor ) {
   
    if ( $valor ){ // si existe patrón ... 
		
        echo "\n<br>Patron existe en cadena.";
		
    }else { // si no existe patrón ... 
	
        echo "\n<br>Patron no existe en cadena.";
		
	}
		
}

// Signo / ... / (patrón entre barras) sin espacios 
echo "\n <br>usando /../ ---------------------------------";
$patrCad=' /ab/ ';
$cadena='aba';
existe(preg_match ($patrCad, $cadena));
$cadena='bab';
existe(preg_match ($patrCad, $cadena));
$patrCad=' /eb/ ';
$cadena='baba';
existe(preg_match ($patrCad, $cadena));
$patrCad='/ab/';
$cadena='ba';
existe(preg_match ($patrCad, $cadena)); 

//comparacion con mayusculas
echo "\n <br>usando /../i ---------------------------------";
$patrCad='/SCRIP/i';
$cadena="javascript";
existe(preg_match($patrCad,$cadena));

// Signo ^ (patrón al inicio de cadena de caracteres) 
echo "\n <br>usando ^ ---------------------------------";
$patrAncla=' /^ab/ ';
$cadena='aba';
existe(preg_match ($patrAncla, $cadena));

$cadena='bab';
existe(preg_match ($patrAncla, $cadena));

$cadena='baba';
existe(preg_match ($patrAncla, $cadena));

// Signo $ (patrón al final del conjunto de caracteres) 
echo "\n <br>usando $ ---------------------------------";
$patrAncla=' /ab$/ ';
$cadena='aba';
existe(preg_match ($patrAncla, $cadena));

$cadena='bab';
existe(preg_match ($patrAncla, $cadena));

$cadena='baba';
existe(preg_match ($patrAncla, $cadena)); 

// Barra invertida, escapar carácter 
// Carácter que termine con 410 
echo "<br>Cadena a comparar: '410$' --------------------";
$patrEscapar = '/410$/'; 
$cadena = '410$';

existe( preg_match ($patrEscapar, $cadena ) ); // No existe

// Escapar símbolo dolar $ 
// Carácter que termine con 410$ 
$patrEscapar = '/410\$$/';
$cadena = '410$';
existe( preg_match ($patrEscapar, $cadena ) ); // Sí existe  

// Metacarácter punto (.) 
echo "\n <br>uso del punto ---------------------";
$patrPunto = '/^.P/';
$cadena = 'PHP';
existe( preg_match ( $patrPunto, $cadena ) ); // No existe, ya que apunta a la 'H'

// Tres puntos indican la búsqueda a partir del tercer carácter.
// Si el patrón contiene más de un carácter la comparación se
// hará con el mismo orden en que están colocados en el patrón. 
$patrPunto = '/^...ip/';
$cadena = 'script';
existe( preg_match ( $patrPunto, $cadena ) ); // Sí existe, coinciden en orden y situación

?>