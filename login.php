<?php

session_start();
include('connexion.php');

if ($_POST) { //On vérifie si la variable globale $_POST est vrai
    require_once 'connexion.php'; // Vérifie si la page est déjà relier à la page connexion.php 
    extract($_POST); // Vérifie si la clé à un nom de variable valide
    if ($type_user == "admin") { // On utilise une structure conditionnelle pour vérifier si le type 
        //d'utilisateur est un administrateur,
        $sql = "VOTRE REQUETE SQL"; // Alors on applique la requête en SQL
    } else {
        $sql = "VOTRE REQUETE SQL "; // Sinon on applique l'autre requête
    }
    $resultat = mysqli_query($bdd, $sql); // On stocke dans une variable la commande qui permet 
    //d'exécuter des requêtes SQL
    if ($resultat) {
        if (mysqli_num_rows($resultat) == 0) {
            echo 'Utilisateur ou mot de passe incorrecte !!'; //Si le résultat de la requête est nul 
            //alors cela affiche un message d'erreur
        } else if ($type_user == "admin") {
            $row = mysqli_fetch_assoc($resultat); // On stocke dans la variable $row la lecture du résultat
            // donné par MySQL de la variable $resultat
            $_SESSION['id_admin'] = $row['id_admin']; // Si l'ID et le login de l'administrateur 
            //contenu dans la variable globale $_SESSION 
            $_SESSION['login_admin'] = $row['login_admin']; // est la même que celle de la base de données 
            header('Location: ./admins_page'); // Alors il redirige vers la page administrateur
        } else {
            $row = mysqli_fetch_assoc($resultat);
            $_SESSION['id_user'] = $row['id_user']; // Idem pour l'utilisateur
            $_SESSION['login_user'] = $row['login_user'];
            header('Location: ./users_page');
        }
    }
    $close = mysqli_close($conn);
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="tp4" method="POST">
        <input type="text" placeholder="user name" name="user_name" />
        <input type="text" placeholder="password" name="password" /><br>
        <input type="" placeholder="" name="type_user" />
        <input type="submit" name="formajout" value="Se connecter">
    </form>
</body>

</html>