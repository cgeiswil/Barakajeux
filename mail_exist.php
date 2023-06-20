<?php
//L'email est-il nouveau ?
    //True = oui
    //False = non

    include("./fonction.php");
    $bdd = getBD();
    
    $retour = ['result' => true];
    
    if(isset($_GET["mail"])) {
        $requete = $bdd->prepare("SELECT count(*) from clients where mail = ?");
        $requete->execute(array($_GET["mail"]));
        $count = $requete->fetch()[0];
        if ($count > 0) {
            $retour["result"] = false;
        }
    }
    
    echo json_encode($retour);
?>