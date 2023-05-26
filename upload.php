<?php
include("./fonction.php");
// Vérifier si un fichier a été sélectionné
if(isset($_FILES['imageInput'])) {
    $file = $_FILES['imageInput'];

    // Vérifier s'il y a une erreur lors de l'importation
    if($file['error'] === UPLOAD_ERR_OK) {
        // Récupérer les informations du fichier
        $fileName = $file['name'];
        //echo $fileName," ";
        $fileTmpPath = $file['tmp_name'];
        //echo $fileTmpPath," " ;
        $fileSize = $file['size'];
        //echo $fileSize," " ;
        $fileType = $file['type'];
        //echo $fileType," " ;

        // Déplacer le fichier vers un emplacement de stockage souhaité
        $destinationPath = './images/' . $fileName;
        move_uploaded_file($fileTmpPath, $destinationPath);
        
        session_start();
        
        $bdd = getBD();
        //echo $_SESSION['u']['id_u'];
        $rep = $bdd -> prepare("UPDATE utilisateurs SET photo = ? WHERE id_u = ? ");
        //echo 'pute' ;
        $result = $rep -> execute(array($destinationPath, $_SESSION['u']['id_u']));
        echo 'pute';
        echo $result;

        // Afficher un message de réussite
        echo "L'image a été importée avec succès !";
        echo "<meta http-equiv='Refresh' content='0;URL=profil.php'>";
    } else {
        // Afficher un message d'erreur
        echo "Une erreur est survenue lors de l'importation de l'image.";
    }
} else {
    // Aucun fichier n'a été sélectionné
    echo "Veuillez sélectionner une image à importer.";
}
?>
