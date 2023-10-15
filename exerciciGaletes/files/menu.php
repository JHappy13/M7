<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/intranet.css">
</head>
<body>
    <div class="menu">
    <p>Has fet login amb:</p>
    <?php
        session_start();
        echo "<h6 class=\"nomUsuari\">". $_SESSION['nomUsuari'] . "  [<a href=\"./index.php\">SORTIR</a>]</h6>"
    ?>
        <br>
        <br>
    <?php
        $nomUsuari = $_SESSION['nomUsuari'];
        if($nomUsuari == "willy"){
    ?>
        <h6>Llistat generats per l'usuari willy wonka: </h6>
    <?php
        }
    ?>
    </div>
</body>
</html>