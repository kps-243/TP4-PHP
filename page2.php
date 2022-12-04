<?php

session_start();

echo "Bonjour mon nom est ", $_SESSION["nom"] . "<br/>";
echo "mon prenom est ", $_SESSION["prenom"] . "<br/>";
echo "mon email est ", $_SESSION["email"] . "<br/>";
echo "la date est ", date("H:i:s", $_SESSION["date"]);
