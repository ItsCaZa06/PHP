<?php
include 'cap.php';
include 'connexio_bbdd.php';

$usuari = $_POST['usuari'];
$contra = $_POST['contra'];

$sql = "SELECT * FROM usuaris WHERE usuari='$usuari'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['contra'] === md5($contra)) {
            echo "Contrasenya Correcta!<br>";
        } else {
            echo "Contrasenya Incorrecta!<br>";
        }
    }
} else {
    echo "Usuari no trobat: $usuari";
}
$conn->close();
include 'peu.php';
?>
