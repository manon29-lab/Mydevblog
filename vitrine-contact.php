<main> 
    <section class= "Contact">
    <h2>Contact</h2>
    <h1> Vous trouverez dans cette rubrique un formulaire à compléter afin de me contacter. N'hésitez pas si vous avez la moindre question! </h1>
    <img src="logo_bretagne"> 
  </section>
  </html>


            <section>
                <form action="/ma-page-de-traitement" method="post">
                    <div>
                        <input type="text" id="name" name="user_name" placeholder="Votre Nom.">
                    </div>
                    <div>
                        <input type="email" id="mail" name="user_mail" placeholder="Votre email.">
                    </div>
                    <div>
                        <textarea id="msg" name="user_message"placeholder="Comment améliorer mon site ?"></textarea>
                    </div>
                    <div class="button">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </section>
            
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

$users= $pdo->query("SELECT*FROM Article blog")->fetchAll();
     echo "<ul>";
foreach ($users as $user)
 { 
     echo "<a href = \"articles.php\">". $user ['Titre']."  </a>";

     
     echo $user ['Résumé']."<br></p>";
}
echo "</ul>";
?>
</main>
</body>
</html>

</main>