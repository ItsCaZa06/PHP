<?php
include 'cap.php';
include 'connexio_bbdd.php';
$sql = "SELECT id, usuari, correu, nom, cognoms FROM usuaris";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . " - Usuari: " . $row['usuari'] . " - Correu: " . $row['correu'] . " - Nom: " . $row['nom'] . " " . $row['cognoms'] . "<br>";
    }
} else {
    echo "No hi ha usuaris.";
}
$conn->close();
include 'peu.php';
?>