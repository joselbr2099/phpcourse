<?php
session_name("suma");
session_start();
$res=$_SESSION["a"]+$_SESSION["b"];
echo "resultado: ".$res;
?>