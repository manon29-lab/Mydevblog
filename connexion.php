<main> 
<body>

 <header>


 <div id="titre_principal">
     <h1>Connectez vous ci-dessous :</h1>
 </div>

</header>

<form action="securite.php" method="post">
    

<div>
    <input placeholder="login" type="text" id="login" name= "login">
</div>


<div>
    <input placeholder="password" type="password" name="password">
    <div>
        <input type="submit" value= "Envoyer un formulaire">

        
<footer>
    

    <?php
    if (isset ($_SESSION['user'])&& $_SESSION ['user'] ['is_admin']) {
        echo"<a href='index.php?page=6'> Administration </a>";

    }
    ?>
    </footer>



</div>
</div>
</form>
</main>
</body>

<?