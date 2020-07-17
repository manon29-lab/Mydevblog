<?php 
      function connect_to_database(){
     $servername = 'localhost';
     $username = 'root';
     $password= '';
     $madatabase = 'base-site-rooting';
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
?>
<?php 
$users = $pdo->query("SELECT *FROM `Article blog`")->fetchAll();//requete sql
       echo "<ul>";
foreach ($users as $user){
    echo "<li>" . $user ['Titre'] ."<br></li>";
    echo $user ['Image'] ."<br>";
    echo $user ['Date'] ."<br>";
    echo "<image src='$user[Image]'/>";
    echo $user ['Auteur'] ."<br>";
    echo $user ['Résumé'] ."<br>";
    echo $user ['Contenu'] ."<br>";
    echo "</ul>";
}

?>