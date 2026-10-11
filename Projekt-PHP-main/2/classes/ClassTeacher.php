<?php
    require_once "Teacher.php";

    class ClassTeacher extends Teacher{
        private string $className;

        public function __construct(string $name, int $age, string $subject, string $className)
        {
            parent::__construct($name, $age, $subject);
            $this->className = $className;
        }

        public function getInfo(): string {
            return parent::getInfo().", wychowawca klasy: {$this->className}";
        }

    }

?>