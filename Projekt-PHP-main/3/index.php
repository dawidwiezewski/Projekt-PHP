<?php
    session_start();
    echo "Sesja rozpoczęta\n";

    $_SESSION["name"] = "Janusz";
    $_SESSION["class"] = "4Ti";

    echo "Dane zostały zapisane\n";

    echo "<a href='./names.php'>Strona z imionami\n</a>";

?>