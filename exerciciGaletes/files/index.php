<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/intranet.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <h1>Benvinguts!!</h1>
        <form method="post" action="logincheck.php">
            Nom:
            <input type="text" name="name"><br>
            Password:
            <input type="password" name="password"><br>
            <?php
                $cookie = filter_input(INPUT_COOKIE, "language");
                if(!$cookie){
            ?>
            Idioma:
            <select name="language" id="language">
                <option value="Catala">Catala</option>
                <option value="Castella">Castella</option>
            </select><br>
            <?php
                }
            ?>
            <input type="submit" value="Login">
            <p>Autors: Jay Marc Paragas</p>
        </form>
    </div>
</body>
</html>