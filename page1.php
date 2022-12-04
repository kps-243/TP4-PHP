<?php

session_start();
$_SESSION['nom'] = "Kpassi";
$_SESSION['prenom'] = "Morgan";
$_SESSION['email'] = "manjiro243@gmail.com";
$_SESSION['date'] = time();

header("Location: ./page2.php");
exit;
