<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/intranet.css">
</head>
<body>
        <?php
            $nomUsuari = $_SESSION['nomUsuari'];
            if($nomUsuari == "willy"){
        ?>
        <p>A continuacion es mostra el llistat desitjat generat per l'usuari wonka: </p>
        <?php
            }else{
        ?>
        <form action="./index.php">
            <h6>Generar un nou llistat:</h6>
            <input type="text" placeholder="Introdueix un numero de llistat"><br>
            <input type="text" placeholder="Introdueix una comanda del terminal"><br>
            <input type="submit" value="Afegir">
        </form>
        <?php
            }
        ?>
</body>
</html>