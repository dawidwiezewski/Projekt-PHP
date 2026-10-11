<?php
    require_once "classes/Student.php";
    require_once "classes/Teacher.php";
    require_once "classes/classroom.php";
    require_once "classes/ClassTeacher.php";

    $student1 = new Student("Jan", 18, "ZSK");
    $student2 = new Student("Damian", 19, "WSB");

    $classroom = new Classroom("ZSK");

    $classroom -> addStudent($student1);
    $classroom -> addStudent($student2);

    echo "<h2>Klasa: </h2>".$classroom -> getHtml();

    $teacher1 = new Teacher("Jan Kowalski", 45, "Programownanie");
    $classteacher1 = new ClassTeacher("Andrzej Nowak", 39, "PHP", "ZSK");

    echo "<h2> Wychowawcy: </h2>".$classteacher1 -> getInfo();

    #$newStudent = null;
    #$newTeacher = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST["action"] ?? "";

        if ($action === "add_student") {
            $name = $_POST["name"] ?? "";
            $age = (int)($_POST["age"] ?? 0);
            $school = $_POST["school"] ?? "";

            $newStudent = new Student($name, $age, $school);
        }

        if ($action === "add_teacher") {
            $name = $_POST["name"] ?? "";
            $age = (int)($_POST["age"] ?? 0);
            $subject = $_POST["subject"] ?? "";

            $newTeacher = new Teacher($name, $age, $subject);
        }
    }


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

    <form method = "POST">
       <input type="hidden" name="action" value="add_student">
       <h3>Dodaj ucznia</h3>
       <label for = "name">Imię: </label>
       <input type = "text" name = "name" id = "name" autofocus>

       <label for = "age">Wiek: </label>
       <input type = "number" name = "age" id = "age">

       <label for = "school">Szkoła: </label>
       <input type = "text" name = "school" id = "school">

       <button type = "submit"> Dodaj ucznia </button>
    </form>

    <form method="POST">
        <input type="hidden" name="action" value="add_teacher">
        <h3>Dodaj nauczyciela</h3>
        <label for="teacher_name">Imię i nazwisko: </label>
        <input type="text" name="name" id="teacher_name">

        <label for="teacher_age">Wiek: </label>
        <input type="number" name="age" id="teacher_age">

        <label for="subject">Przedmiot: </label>
        <input type="text" name="subject" id="subject">

        <button type="submit">Dodaj nauczyciela</button>
    </form>

    <h1>Uczniowie i Nauczyciel<h1>
    <h2>Informacje o użytkownikach: </h2>

    <?php
        echo $teacher1->getInfo()."<hr>";
        if (isset($newTeacher)) {
            echo $newTeacher->getInfo()."<hr>";
        }
        echo $student1->getInfo()."<br>";
        echo $student2->getInfo()."<hr>";
        if (isset($newStudent)) {
            echo $newStudent->getInfo()."<hr>";
        }

    ?>

    <h2>Informacje HTML - HEREDOC</h2>

    <?php
        echo $teacher1->getHtml()."<hr>";
        if (isset($newTeacher)) {
            echo $newTeacher->getHtml()."<hr>";
        }
        echo $student1->getHtml()."<br>";
        echo $student2->getHtml()."<hr>";
        if (isset($newStudent)) {
            echo $newStudent->getHtml()."<hr>";
        }
        
    ?>

</body>
</html>