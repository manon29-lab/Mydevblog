<?php
$_page = "ajout_utilisateur";
include ("header.php")
?>

<form>

<p>NOM : </p>
<textarea></textarea>

<p>LOGIN : </p>
<textarea></textarea>

<p>MOT DE PASSE: </p>
<textarea></textarea>

</form>

<?php 
      function connect_to_database(){
     $servername = 'localhost';
     $username = 'root';
     $password= '';
     $madatabase = 'mini-site-rooting';
try { 
    $pdo = new PDO("mysql:host=$servername;dbname=$madatabase",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully"; 
    return $pdo;
}
catch (PDOException $e){
    echo "connection failed : ".$e->getMessage();
}
}
$pdo= connect_to_database();

$sql = "INSERT $nom, $login, $mdp INTO utilisateur(nom,login, mdp) values($nom, $login, $mdp);";

if ($conn->query($sql) == TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
;
?>
<?php
include ("footer.php")
?>