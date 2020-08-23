<?php
    class Cars{
        public $color = 'Rojo';
        public $model = 'Civic';
        public $brand = 'Honda';
        public $version = 2005;
        public $doors = 2;

        public function moveForward(){
            echo"----------------------> Moving here!";
        }
        public function moveBackward(){
            echo"Moving here! <----------------------";
        }
        public function lightsOn(){
            echo"******ON******";
        }
        
    }
?>