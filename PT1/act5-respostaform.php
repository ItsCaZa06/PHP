<?php
include 'cap.php';
function felicitarAniversariEspelmes($edat) {
    for ($i = 0; $i < $edat; $i++) {
        echo "<img src='espelma.jpg' alt='Espelma' width='20'> ";
    }
}
echo "<p>Nom: " . $_POST["nom"] . "</p>";
echo "<p>Edat: " . $_POST["edat"] . "</p>";
felicitarAniversariEspelmes($_POST["edat"]);
include 'peu.php';
?>