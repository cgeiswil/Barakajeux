<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Baraka Jeux</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./Barakajeux/slay.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>


    <?php
    include "ruban.html";
    include "fonction.php";
    $bdd = getBD();

    //récupération des infos
    $pseudo  = $_POST["pseudo"];
    $mdp = md5($_POST["mdp"]);
    echo $pseudo, $mdp;


    //recherche de l'utilisateur correspondant
    

    $rep = $bdd -> prepare("SELECT * FROM utilisateurs WHERE pseudo = ? and  mdp = ? ;"); 
    $result = $rep -> execute(array($pseudo, $mdp));
    echo $result;
    session_start();


    //if ($rep->fetchColumn() == 0) {       
        
   //     echo "<meta http-equiv='Refresh' content='0;URL=se_connecter.php'>";
        
   // } else {

        $result = $rep -> fetch();
        if($result != '' ){
        $_SESSION['u'] = array(
            'id_u' => $result['id_u'],
            'pseudo' => $result['pseudo'],
            'mail' => $result['mail'],
            'photo' => $result['photo'],
            'niveau' => $result['niveau'],
            'admin' => $result['admin']);
        echo 'puute';
        
        echo "<meta http-equiv='Refresh' content='0;URL=index_baraka.php'>";
    }else{
        echo "<meta http-equiv='Refresh' content='0;URL=se_connecter.php'>";
    }
   // }

?>