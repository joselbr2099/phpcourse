<?php
//setcookie("texto", 5, time() + (86400 * 30),"/");
setcookie("a", 5,30,"/");
setcookie("b", 1, time() + (86400 * 30),"/");
?>
<html>
<body>
<?php
if(!isset($_COOKIE["b"])){
    echo "la cookie aun no esta lista recargue con f5";
}else{
    echo "la cookie esta lista";
}
?>
