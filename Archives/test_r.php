<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les valeurs du formulaire
  $pseudo = $_POST['pseudo'];
  $mail = $_POST['mail'];
  $mdp1 = $_POST['mdp1'];
  $mdp2 = $_POST['mdp2'];

  // Faire quelque chose avec les valeurs récupérées, par exemple les enregistrer dans une base de données ou effectuer une validation

  // Afficher les valeurs pour vérification
  echo "Pseudo: " . $pseudo . "<br>";
  echo "E-mail: " . $mail . "<br>";
  echo "Mot de passe: " . $mdp1 . "<br>";
  echo "Confirmation du mot de passe: " . $mdp2 . "<br>";
}
?>
