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
session_start();

if(isset($_SESSION['u'])) {
       

include("./fonction.php");
$bdd = getBD();


//print_r($_SESSION['u']) ;

//echo "Bonjour ".$_SESSION['u']["pseudo"]." !"; 

// Récupération des informations de profil de l'utilisateur
//echo $_SESSION['u']['photo'];
$utilisateurId = $_SESSION['u']['id_u']; // ID de l'utilisateur 
//echo $utilisateurId;

// Requête SQL pour récupérer les informations de profil de l'utilisateur

$sql = $bdd -> prepare("SELECT photo, pseudo, niveau FROM utilisateurs WHERE id_u =$utilisateurId");
$resultat = $sql->execute();


echo $resultat ;

if ($resultat) {
    // Affichage des informations de profil de l'utilisateur
    $row = $sql->fetch(PDO::FETCH_ASSOC);

    $photo = $row["photo"];
    $pseudo = $row["pseudo"];
    $niveau = $row["niveau"];


    // Affichage HTML du profil

    echo "<div class='affichage-profil'>";

    echo "<h1>Bonjour $pseudo !</h1>";

    echo "<div style='text-align: left;'><a href='before_upload.php'>Changer la photo de profil</a></div>";

    echo "<div class='photo-container'>";
    
    echo "<img src='$photo' alt='Photo de profil' class='photo_u'>";
    //echo "<a href='./nouvel_utilisateur.php' target='_parent'>
    //Ajouter une photo
    //</a>";
    echo '</div>';
    echo "<p>Pseudo : $pseudo</p>";
    echo "<p>Niveau : $niveau</p>";
    echo "<p>Nombres de Jeux : </p>";

    echo "<footer><a href='disconnect.php' target = '_parent'> Se d&eacute;connecter :( </a></footer>";

    echo '</div>';


} else {
    echo "<div id='fond'> Aucun utilisateur trouvé.<div>";
}

// Fermeture de la connexion à la base de données
$bdd->close();


}else{
    echo "<br>
    <div class='affichage-profil-vide'><h3><a href = './se_connecter.php'> Veuillez vous connecter </a></h3></div>";
}
?>

