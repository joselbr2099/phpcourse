<?php
//para el manejo de archivoz xml se hara uso de la extenxion SimpleXML

//cargar un archivo
if(!$xml = simplexml_load_file('ejemplo.xml')){
    echo "<br>No se ha podido cargar el archivo";
} else {
    echo "<br>El archivo se ha cargado correctamente";
}

//acceder a los datos
echo "<br> acceso --------------------------------------";
if(!$xml = simplexml_load_file('ejemplo.xml')){
    echo "No se ha podido cargar el archivo";
} else {
    foreach ($xml as $usuario){
        echo 'Nombre: '.$usuario->nombre.'<br>';
        echo 'Apellido: '.$usuario->apellido.'<br>';
        echo 'Dirección: '.$usuario->direccion.'<br>';
        echo 'Ciudad: '.$usuario->ciudad.'<br>';
        echo 'País: '.$usuario->pais.'<br>';
        echo 'Teléfono: '.$usuario->contacto->telefono.'<br>';
        echo 'Url: '.$usuario->contacto->url.'<br>';
        echo 'Email: '.$usuario->email->nombre.'<br>';
    }
}

//iterar entre elementos
echo "<br> iteracion --------------------------------------";
$usuarios = new SimpleXMLElement('ejemplo.xml', 0, true); //SimpleXMLElement Representa un elemento en un documento XML. 
foreach ($usuarios as $usuario){
    echo "Nombre: ". $usuario->nombre ."<br>";
    foreach($usuario->contacto as $contact){
        echo "Teléfono: ". $contact->telefono . "<br>";
        echo "Email: ".$contact->email . "<br>";
        }
}


?>