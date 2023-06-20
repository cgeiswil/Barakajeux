
<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Baraka Jeux</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./Barakajeux/slay.css" type="text/css">

</head>

<body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<?php
include ("./ruban.html");

echo "<div class='affichage-profil'>";

echo '<form action="upload.php" method="POST" enctype="multipart/form-data" style="text-align: left">
    <label for="imageInput">Changer la photo de profil </label><br>
    <input style="font-size: 10px;" type="file" id="imageInput" name="imageInput">
    <br>
    <input class="btn btn-primary" id="importer" type="submit" value="Importer">
    </form>';

?>