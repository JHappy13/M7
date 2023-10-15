<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/intranet.css">
</head>
<body>

    <?php
        $error = $_GET['error'];
        if( $error){
    ?>
        <div class="container">
            <strong>Has de passar abans per la pantalla de login</strong>
            <h2><a href="./index.php">Tornar</a></h2>
        </div>
    <?php
        }else{
    ?>
        <div class="container">
            <strong>Usuari o contrasenyes incorrectes</strong>
            <h2><a href="./index.php">Tornar</a></h2>
        </div>
    <?php
        }
    ?>
    
</body>
</html>