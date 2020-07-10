<?php
$cadena1 = "1234567";
$cadena2 = "abcdefg";
$patron = "/^[[:digit:]]+$/";

if (preg_match($patron, $cadena1)) {
    print "<p>La cadena $cadena1 son sólo números.</p>\n";
} else {
    print "<p>La cadena $cadena1 no son sólo números.</p>\n";
}

if (preg_match($patron, $cadena2)) {
    print "<p>La cadena $cadena2 son sólo números.</p>\n";
} else {
    print "<p>La cadena $cadena2 no son sólo números.</p>\n";
}
?>