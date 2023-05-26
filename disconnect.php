<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    session_start();
    session_unset();
    session_destroy();
    echo "<meta http-equiv='Refresh' content='0;URL=index_baraka.php'>";
    exit();
    ?>
</head>

<body>
 <h1>Aurevoir</h1>
</body>
</html>