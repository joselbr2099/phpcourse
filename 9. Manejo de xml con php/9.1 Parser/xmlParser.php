<?php
//xml parser

//iniciar analizador
$parser = xml_parser_create();

// Función a utilizar al inicio de un elemento:
function start($parser,$elemento,$atributos) {
    switch($elemento) {
        case "usuario":
            echo "Datos de usuario: <br>";
            break;
        case "nombre":
            echo "Nombre: ";
            break;
        case "apellido":
            echo "Apellido: ";
            break;
        case "ciudad":
            echo "Ciudad: ";
            break;
        case "pais":
            echo "País: ";
    }
}

// Función a emplear al final de un elemento:
function stop($parser,$elemento) {
    echo "<br>";
}

// Función que se emplea cuando se encuentra un carácter
function char($parser,$data) {
    echo $data;
}

// Especificar el handler de elementos
xml_set_element_handler($parser,"start","stop");

// Especificar el handler de datos
xml_set_character_data_handler($parser,"char");

// Abrir un archivo xml
$fp = fopen("ejemplo.xml","r");

// Leer los datos
while ($data = fread($fp,4096)) {
    xml_parse($parser,$data,feof($fp)) or
    die (sprintf("Error XML: %s en la línea %d",
        xml_error_string(xml_get_error_code($parser)),
        xml_get_current_line_number($parser)));
}
// Liberar el analizador
xml_parser_free($parser);
?>