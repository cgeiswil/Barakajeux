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

    <object data="Ruban.html" width="100%" height="100%">
    </object>
    <div class="text-center">
        <button id="createAccountButton" type="button" class="btn btn-primary " style="background-color: #edbd31; border: none; width : 70%; ">Créer un compte</button>
    </div>

    <p> En créant un compte, vous pourrez <b>enregistrer les jeux</b> que vous avez fait à <b>Baraka Jeux</b>, les noter, et gagner des points pour obtenir le grade tant convoit&eacute; de <b>Pilier de bar</b> ! </p>

    <div class="bandeau">
  <img id="manuscrit" src="./images/a_quoi_on_joue_gros.png"/>
</div>

<label for="nb-joueurs">Nombre de joueurs :</label>
<select id="nb-joueurs">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <!-- Ajoutez les options pour les nombres de joueurs restants jusqu'à 10 -->
  <option value="10">10</option>
</select>


   
</body>

