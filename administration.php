<div>
    <div>
        <h2>Liste des utilisateurs : </h2>
        <table>
            <tr>
                <td>Manon Rolland</td>


<h2>Ajout des utilisateurs</h2>
<form action="back.php?Page=administration" method="post">
<div>
<input type="text" id="name" name="user_name" placeholder="Nom d'utilisateur">
</div>
<div>

<br>
<div>
<textarea type="text" name="user_password" placeholder="Mot de passe"></textarea>
</div>
</form>

<?php

function connect_to_database()
{
    $servername = 'localhost';
    $username = 'root';
    $password= '';
    $madatabase = 'base-site-rooting';
}
try { 
    $pdo = new PDO("mysql:host=$servername;dbname=$madatabase",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully"; 
    return $pdo;
}
catch (PDOException $e){
    echo "connection failed : ".$e->getMessage();
}

$pdo= connect_to_database();

$sql = "INSERT $nom, $login, $mdp INTO utilisateur(nom,login, mdp) values($nom, $login, $mdp);";


if (isset($_POST['Nom']))
header("Location: back.php");

?>
    <?php
    
    include "ajout_utilisateur.php"
    ?>
    </div>
</div>