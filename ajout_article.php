<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="vitrine-mydevblog.css">
    </head>
    <body>
        <div >

            <header>
                <nav>
                    <ul id="menu">
                        <li class="choix" ><a href="vitrine-accueil.php" id="ici">Accueil</a></li>
                        <li class="choix"><a href="vitrine-contacts.php">Contact</a></li>
                        <li class="choix"> <a href="articles.php">Articles</a></li>
                    </ul>
                </nav>
                <div id="titre_principal">
                    <h1>MyDevBlog</h1>

                    <?php
                    
                    $page_title="Contact";
                    include ("navigation.php")
                    ?>
<main class= "AJOUT">

<h2>Ajout article</h2>

</main>
<main class= "cadre">
    <form action= "articles.php" method="post">


    <p><input type="text" id="name" name="user_titre" value="Un titre"></p>

    <p><input type="file" id="img-path" name="user_image" value="Une image"></p>


    <p><input type="text" id="text" name="user_date" value="Une date de publication"></p>
    <p><input type="text" id="name" name="user_name" value="Une auteur"></p>
    <p><input type="text" id="text" name="user_message" value="Une contenu texte"></p>
    <p><input type="text" id="text" name="user_extrait" value="Un extrait"></p>

    <div class="bouton">
        <input type="submit" value="Envoyer">
</form>


                </div>
            </header>

