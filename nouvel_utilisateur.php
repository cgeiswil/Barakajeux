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

if(isset($_GET['error'])) {
    echo "<p class='error'>Erreur : " . $_GET['error'] . "</p>";
}

?>

<form id="form" action ="register.php" method="post" autocomplete="on">               <!-- -->

<div class="mt-2 mb-2" >
<div class="connection">
<div class="form-group">
    <h5>Pseudo :</h5>
    <INPUT type="text" name="pseudo" class="form-control" value="<?php echo $_GET["pseudo"] ?>">
  </div>

  <div class="form-group">
    <!--<label for="email">E-mail :</label>-->
    <h5>E-mail :</h5>
    <INPUT type="email" name="mail" class="form-control" value="<?php echo $_GET["mail"] ?>">
  </div>
  
  <div class="form-group">
    <h5>Mot de passe:</h5>
    <INPUT type="password" name="mdp1" class="form-control" value="<?php echo $_GET["mdp1"] ?>">
  </div>

  <div class="form-group">
    <h5>Confirmez le mot de passe:</h5>
    <INPUT type="password" name="mdp2" class="form-control" value="<?php echo $_GET["mdp2"] ?>">
  </div>
  
  <input type="submit" class="btn btn-danger" value="OK">
    <br>
  <a href="./se_connecter.php" target="_parent">
        J'ai déjà un compte.
        </a>
</div>
</div>

<!--<INPUT type="hidden" name="nomValCachee" value="valCachee">-->

</form>

</body>

</html>