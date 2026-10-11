<?php
    session_start();
    echo "<h3> Strona trzecia </h3>";

    if(isset($_SESSION["name"]))
    {
        echo "Imię: " . $_SESSION["name"] . "<br>";
    }
    else
    {
        echo "Nie zapisano imienia <br>";
    }
    echo "Klasa: " . $_SESSION["class"] . "<br>";

    echo "<a href='./index.php'>Strona główna\n</a>";
?>