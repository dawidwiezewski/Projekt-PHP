<?php
    require_once "Student.php";

    class Classroom {
        private string $name;
        private array $students = [];
        
        
        public function __construct (string  $name)
        {
            $this -> name = $name;
        }

        public function addStudent(Student $student) : void
        {
            $this -> students[] = $student;
        }

        public function getHtml() : string 
        {
            $html = "<h2>Klasa:  {$this -> name} </h2>";

            foreach ($this -> students as $student)
                {
                    $html .= $student -> getHtml();
                }

            return $html;
        }
    }

?>