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
<div class="mt-2 mb-2">
<div class="connection">

<form action="./connect.php" method="post">
  <div class="form-group">
    <h5>Pseudo :</h5>
    <input type="text" name="pseudo" class="form-control" >
    
  </div>

  <div class="form-group">
    <h5>Mot de passe:</h5>
    <input type="password" name="mdp" class="form-control">
  </div>
  
  <input type="submit" class="btn btn-danger" value="Se Connecter"/>
</form> 

<a href="./nouvel_utilisateur.php" target="_parent">
        Je n'ai pas encore de compte
        </a>

</div>

</div>

</body>


</html>