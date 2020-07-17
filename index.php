<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="vitrine-mydevblog.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<header>
  <nav>
                    <a  href ="index.php?Page=accueil"> Accueil </a> 
                    <a  href ="index.php?Page=contact"> Contacts</a> 
                    <a  href ="index.php?Page=Articles"> Articles</a>
                    <a  href ="index.php?Page=connexion"> Connexion</a>
            </nav>
            
<h1> My Dev Blog - La Bretagne </h1>
</header>


<?php 
if ($_GET["Page"] == "accueil"){
        include ("vitrine-accueil.php"); 
}

elseif ($_GET ["Page"] == "contact-form") {

    include ("vitrine-contact.php"); 
}
elseif ($_GET["Page"] == "Articles"){
    include ("vitrine-articles.php");
}

elseif ($_GET["Page"] == "contact"){
    include ("contact-form.php");}

elseif ($_GET["Page"] == "connexion"){
        include ("connexion.php");}


else
{include '404.php';}


?>
   <footer>
<h2>Liens externes</h2>
<h3>Mes sites internet</h3>
<ul>
</li>
<li> Présentation Summer code camp
<a href="http://192.168.64.2/ISCC-2020/ISCC-2020-J03/ex-02.html" target="_blank">http://192.168.64.2/ISCC-2020/ISCC-2020-J03/ex-02.html</a><br/> 
</li>
<li> Création d'un CV 
<a href="http://192.168.64.2/ISCC-2020/ISCC-2020-J03/mon-cv.html" target="_blank">http://192.168.64.2/ISCC-2020/ISCC-2020-J03/mon-cv.html</a><br/>
</li>
</ul>
<a href = "https://www.linkedin.com/in/manon-rolland-4a5543163/" > Profil Linkedin </a>
    <a href = "https://github.com/manon29-lab"> Profil Github </a>
 <h3>Mon profil GitHub</h3>
<a href="https://github.com"target="_blank">https://github.com</a>



</footer>
</main>
</body>
</html>