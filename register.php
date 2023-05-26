<?php

include "fonction.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    // Vérification que les variables existes, ne sont pas vides, et que mdp1 et mdp2 soit pareils
    if ((isset($_POST["pseudo"]) && empty($_POST["pseudo"]))
    || (isset($_POST["mail"]) && empty($_POST["mail"]))
    || (isset($_POST["mdp2"]) && empty($_POST["mdp2"]))
    || (isset($_POST["mdp1"]) && empty($_POST["mdp1"]))
    || ($_POST["mdp1"] != $_POST["mdp2"])
    
) {

    
            echo "<meta http-equiv='Refresh' content='0;URL=nouvel_utilisateur.php?pseudo=".$_POST["pseudo"]."&mail=".$_POST["mail"]."&error=Le formulaire n%27as pas été envoyé'>";
            
        }
    else{
        $hash = md5($_POST["mdp1"]);

        enregistrer($_POST['pseudo'], $_POST['mail'], $hash, './images/meeple.png', 0);

        echo "<meta http-equiv='Refresh' content='0;URL=profil.php'>";

    }
} else {
    echo "<!DOCTYPE html>
         <html>
          <head>
              <link rel=\"stylesheet\" href=\"./Barakajeux/slay.css\" type=\"text/css\"/>
              <meta charset=\"UTF-8\"/>
          </head>
          <body>
          </body>
          </html>";
}
?>

