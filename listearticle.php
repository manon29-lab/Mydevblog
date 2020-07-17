<?php

try {
    $pdo = new PDO("mysql:host=$servername; dbname=$madatabase" , $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion reussie';
return $pdo;}

    récuperer les données table sql (titre extrait
    
    se connecter a la base de donnée et les afficher
    jour 10 
    avec la base de donnée tu écris le nom des articles)