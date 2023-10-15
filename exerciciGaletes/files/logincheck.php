<?php
    include "config.php";
    if(isset($_POST['name']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        if(isset($_POST['language'])){
            $language = $_POST['language'];
            setcookie("language", $language, time()+3600);
           
        }else{
            if($name == USUARI1NOM && $password == USUARI1PASSWORD || $name == USUARI2NOM && $password == USUARI2PASSWORD){
               session_start();
                $_SESSION['nomUsuari'] = $name;
                header("Location: intranet.php");
            }else{
                header("Location: error.php");
                
            }
        }
    }else{
        header("location: error.php ? error=ERROR_LOGUIN");
    }
?>