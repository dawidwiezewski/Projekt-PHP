<?php
    require_once "classes/Student.php";
    
    $student1 = new Student("Jan", 18, "ZSK");
    $student2 = new Student("Damian", 19, "WSB");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP</title>
</head>
<link rel="stylesheet" href="./style.css"
<body>
    <h1>Uczniowie</h1>
    <h2>Informacje o użytkownikach: </h2>

    <?php
        echo $student1->getInfo()."<br>";
        echo $student2->getInfo()."<hr>";
    ?>

    <h2>Informacje HTML - HEREDOC</h2>

    <?php
        echo $student1->getHtml()."<br>";
        echo $student2->getHtml()."<hr>";
    ?>

</body>
</html>