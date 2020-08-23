<?php

    include('student.php');
    include('cars.php');
    /* $erika = new Student;
    echo"Soy {$erika->name} y tengo {$erika->age} años. :D"; */

/*     $elias = new Student;
    $elias->name = "Elías";
    $elias->age = 16;
    $elias->year =2;
    $elias->university = "CSH";
    $elias->career = "Inglés";


    echo "
    Mi nombre es $elias->name, mi edad es $elias->age años,
    estoy estudiando en $elias->university en el año numero $elias->year...
    estoy estudiando $elias->career.
    <hr bgcolor='red'>
    ";
 */
    $honda = new Cars;
    echo "$honda->brand lights: ";
    $honda->lightsOn();

?>