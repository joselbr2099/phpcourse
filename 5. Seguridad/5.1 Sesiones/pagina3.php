<?php
session_name("prueba");
session_start();
echo "sesion :".print_r($_SESSION);
session_destroy();
?>