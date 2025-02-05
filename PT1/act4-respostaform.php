<?php
include 'cap.php';
echo "<p>Nom: " . $_POST["nom"] . "</p>";
echo "<p>Edat: " . $_POST["edat"] . "</p>";
if ($_POST["edat"] < 35) {
    echo "<p>Ets jove!</p>";
} else {
    echo "<p>Ja tens que passar la ITV!</p>";
}
include 'peu.php';
?>