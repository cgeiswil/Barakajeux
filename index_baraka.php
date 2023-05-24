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
    include "ruban.html";
    include "fonction.php";
    ?>

    <div class="text-center" >

    <br>
    <a href="./nouvel_utilisateur.php">
        <a href="nouvel_utilisateur.php" id="createAccountButton" type="button" class="btn btn-primary " style="background-color: #00006E; border: none; width : 70%;" >Créer un compte</a>
    </a>
    <div class="mt-2 mb-2" id="fond">
    <p> En créant un compte, vous pourrez <b>enregistrer les jeux</b> que vous avez fait à <b>Baraka Jeux</b>, les noter, et gagner des points pour obtenir le grade tant convoit&eacute; de <b>Pilier de bar</b> ! </p>
</div>
    </div>

    <div id="jouer"class="bandeau">
  <img id="manuscrit" src="./images/a_quoi_on_joue_gros.png"/>
</div>

<?php
$bdd = getBD();

$type_j = $bdd -> prepare("SELECT DISTINCT famille FROM jeux; ");
$type_jE = $type_j -> execute();
$type_jE = $type_j->fetch();

$style_j = $bdd -> prepare("SELECT DISTINCT style FROM jeux; ");
$style_jE = $style_j -> execute();
$style_jE = $style_j->fetch();

$duree_j = $bdd -> prepare("SELECT DISTINCT duree FROM jeux; ");
$duree_jE = $duree_j -> execute();
$duree_jE = $duree_j->fetch();


?>

<div class = "form_jeu" >
<form action="./choose_game.php" method="post">
<br>
<div class="form-group" style="padding-left:10%;padding-right:10%;">
    <h5><center>Rechercher un jeu en particulier :</center></h5>
    <input type="text" name="Nom-de-jeu" class="form-control" >
    
  </div>
<br>
<h5><center>Rechercher un jeu à l'aide de nos critères :</center></h5>
<label for="nb-joueurs">Nombre de joueurs :</label>
<select id="nb-joueurs">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10 ou +</option>
</select>
<br>
<label for="type-jeu">Type de jeu :</label>
<select id="type-jeu">
<?php
foreach ($type_j as $ligne) {
    
    echo "<option value='" . $ligne['famille'] . "'>" . $ligne['famille'] . "</option>";
}
?> 
</select>

<br>

<label for="style-jeu">Style :</label>
<select id="style-jeu">
<?php
foreach ($style_j as $ligne) {
    
    echo "<option value='" . $ligne['style'] . "'>" . $ligne['style'] . "</option>";
}
?> 
</select>

<br>

<label for="duree-jeu">Dur&eacute;e :</label>
<select id="duree-jeu">
<?php
foreach ($duree_j as $ligne) {
    
    echo "<option value='" . $ligne['duree'] . "'>" . $ligne['duree'] . "</option>";
}
?> 
</select>
<br>
  <div>
  <input type="submit" class="btn btn-danger" value="Rechercher"/>
</div>
<br>

</form> 

</div>


<div class="bandeau">
  <img id="manuscrit" src="./images/retour_jeux.png"/>
</div>


   
</body>

