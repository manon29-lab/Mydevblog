<form action= "fichier.admin.php" method="POST" enctype="multipart/form-data">
<input type="file" accept="image/png, image/jpeg, image/png " name="fichier">
<input type="text" name="login">
<input type="text" name="password">
<input type="submit" name="submit">

</form>

<?php

if ($_FILES ['fichier']['size']> 2097152) {
    echo "Le fichier est trop grand";
    $uploadOk = 0;
}

if ($_FILES ['fichier'] ['name']);
$longueur=strlem($_FILES ['fichier']['name']);

if ($longueur < 4) {
    echo "le nom du fichier est trop petit";
}
session_start();


$_SESSION ['image']=$_FILES ['fichier'] ['name'];

?>