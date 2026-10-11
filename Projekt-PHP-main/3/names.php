<?php
    session_start();
    if(isset($_SESSION["name"]))
    {
        echo "Imię: " . $_SESSION["name"] . "<br>";
    }
    else
    {
        echo "Nie zapisano imienia <br>";
    }
    echo "Klasa: " . $_SESSION["class"] . "<br>";

    $_SESSION = [];
    session_destroy();

    echo "<a href='./names_.php'>Strona trzecia\n</a>";
?>