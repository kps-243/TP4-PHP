<?php

session_start();

echo "Bonjour mon nom est ", $_SESSION["nom"] . "<br/>";
echo "mon prenom est ", $_SESSION["prenom"] . "<br/>";
echo "mon email est ", $_SESSION["email"] . "<br/>";
echo "la date est ", date("H:i:s", $_SESSION["date"]);

include("connexion.php");
$admins = mysqli_query($conn, "SELECT * FROM admins ");
$catch = mysqli_fetch_row($admins);
print_r($catch);
