<?php
$cookie_name = "nombre";
$cookie_value = "jose";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); //se crea lo cookie y establece la duracion en un dia
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) { //esta funcion permite verificar si una variable esta declaradas
  echo "nombre de la Cookie '" . $cookie_name . "' aun no esta disponible!";
} else {
  echo "la Cookie '" . $cookie_name . "' esta disponible!<br>";
  echo "su valor es: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html> 