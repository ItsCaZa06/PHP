<?php
include 'cap.php';
$numeros = explode(",", $_POST["numeros"]);
$numerosParells = array_filter($numeros, fn($num) => $num % 2 == 0);
echo "<p>Números introduïts: " . implode(", ", $numeros) . "</p>";
echo "<p>Números parells: " . implode(", ", $numerosParells) . "</p>";
echo "<p>Total de nombres parells: " . count($numerosParells) . "</p>";
include 'peu.php';
?>
