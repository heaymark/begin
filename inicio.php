<?php
include(conexion.php);
echo "Hola desde php!";
$edicion = "editado";
echo "este es un archivo ".$edicion;

//Se pretende obtener la informacion conseguida de la conexion a BD
$sql = "SELECT * FROM tabla1 WHERE id = ".$id;
?>
