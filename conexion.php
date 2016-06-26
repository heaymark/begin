<?php
// Se crea el archivo de conexion

try {
    $gbd = new PDO('mysql:host=localhost;dbname=agendawebphp', $usuario, $contraseña);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
