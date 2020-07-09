<?php
  //$numero=2099; dato que debemos recivir del cliente
  $numero=$_POST["numero"];
  $resto=0;
  $mod="";

  procesar($numero,$resto,$mod);

  function procesar($numero,$resto,$mod)
  {
      do{

        $resto=intval($numero / 2);   
        $mod=$numero-($resto*2).$mod; 
        $numero=$resto;

    }while($resto!=1); 

    $mod=($resto*2)-$numero.$mod; 
  
    mostrar($mod);
  }
 
  function mostrar($mod){
    echo "\n".$mod;
  }
?>   