<?php
//Bucle FOR
/* for ($i=0; $i < 10; $i++) { 
    echo "5x". ($i+1) . "=" . 5 * ($i+1) . "<br>";
} */


//Bucle WHILE
/* $i = 0;
while ($i <= 10) {
    echo "Posición " . $i . "<br>";
    $i++;
} */

//Bucle Do While
/* $a = 0;
do {
    echo ($a * 98) . "<br>";
    $a++;
} while ($a <= 10); */

//Bucle Foreach
/* $numbers = [5,6,7,9,1,222,4,5,6,7];
foreach ($numbers as $number) {
    echo "$number (foreach) <br>";
}

for ($i=0; $i < count($numbers); $i++) { 
    echo $numbers[$i] . "(for) <br>";
} */

/* $students = [
    'Dany' => 'Fresa',
    'Chato' => 'Jocote',
    'Erika' => 'Mango'
];

foreach ($students as $student => $fruit) {
    echo "A $student Le gusta $fruit. <br>";
} */

/* $students2 = [
    'Dany' => 'Beltran',
    'Irvin' => 'Pineda',
    'Karla' => 'Zamora',
    'Elías' => 'Callejas',
    'Kelvin' => 'Narváez',
    'Erika' => 'Hernandez'
];

foreach($students2 as $name => $lastname){
    echo "The student is $name $lastname <br>";
} */