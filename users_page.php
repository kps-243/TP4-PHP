<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TP4";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_SESSION['id_user'])) {
    echo 'Vous êtes connecté,' . $_SESSION['id_user'];
} else {
    header('Location: ./login.php');
}
?>
<a href="./logout.php">Déconnexion</a>