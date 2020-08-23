<?php

    class Student{
        public $name = "Erika";
        public $age = 18;
        public $year = 3;
        public $university = "UCA";
        public $career = "Ing. Informática";

        public function sayCareer(){
            echo "I am studying {$this->career}";
        }
    }

?>