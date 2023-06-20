<?php
function getBD(){
    $bdd = new PDO('mysql:host=localhost;dbname=baraka;charset=utf8','root', 'root');
    return $bdd;
}

function enregistrer($pseudo, $mail, $mdp1, $photo, $niveau) {
    $bdd = getBD();
    
    // Exécution de la requête d'insertion avec les paramètres fournis
    $requete = $bdd -> prepare("INSERT INTO utilisateurs (pseudo, mail, mdp, photo, niveau) VALUES (?, ?, ?, ?, ?);"); 
    $requete -> execute(array($pseudo, $mail, $mdp1, $photo, $niveau));
}
?>