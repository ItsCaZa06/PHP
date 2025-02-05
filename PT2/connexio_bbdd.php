<?php
$servidor = "localhost";
$usuari = "phpbbdd";
$contrasenya = "ubuntu";
$base_dades = "phpbbdd";

$conn = new mysqli($servidor, $usuari, $contrasenya, $base_dades);
if ($conn->connect_error) {
    die("Error en la connexió: " . $conn->connect_error);
}
//echo "Connexió correcta!";


?>