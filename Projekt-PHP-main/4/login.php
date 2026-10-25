<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] !== "POST")
    {
        header("Location: index.php");
        exit();
    }

    $login = $_POST["login"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($login === "a" && $password === "1")
        {
            //echo "SUKCES!";
            session_regenerate_id(true);
            $_SESSION["user"] = $login;
            $_SESSION["loggedIn"] = true;
            header("Location: panel.php");
            exit();
        }
        else 
        {
            echo "Nieprawdiłowy login lub hasło!";
            echo '<br><a href="index.php">Spróbuj ponownie się zalogować </a>';
        }

?>