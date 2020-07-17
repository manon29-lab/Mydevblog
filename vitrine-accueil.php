<header>
                
                <div id="titre_principal">
                    <h1>MyDevBlog</h1>
                    
                </div>
    <?php

$page_title= $_Page;
    include ("navigation.php")
    ?>
            </header>

<main> 
    <section class= "Accueil">
    <h2>Accueil</h2>
    <p>  Bonjour à tous, et bienvenue sur MyDevBlog ! Étudiante à l'ISEG Nantes, mon projet est de créer un blog simple, afin de montrer les connaissances acquises durant le Summer Code Camp.
                        J'ai alors décidé de créer ce blog sur la Bretagne, dans lequel vous trouverez pleins d'articles intéressants !
                        Alors, si vous avez des questions, n'hesitez pas à utiliser la section CONTACT ! 
                        Sinon, bonne lecture et peut-être à bientôt en Bretagne ;) 
                       <br> N'hésitez pas à descendre la page pour vous donner un avant goût de la beauté de cette région ! ---> </br></p>
    <img src="bretagne_0.png"> 
    <img src= "bretagne_sunset.jpg">
  </section>
  </html>



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

$users= $pdo->query("SELECT * FROM `Article blog`")->fetchAll();
     echo "<ul>";
foreach ($users as $user)
 { 
     echo "<a href = \"articles.php\">". $user['Titre']."  </a>";

     
     echo $user['Résumé']."<br></p>";
}
echo "</ul>";
?>
</main>
</body>
</html>

</main>