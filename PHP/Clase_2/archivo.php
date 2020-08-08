<?php

    /* $name = $_REQUEST['name'];
    $number = $_REQUEST['number'];

    echo "$name ingreso el numero $number"; */

    $n1 = $_REQUEST['n1'];
    $n2 = $_REQUEST['n2'];

    function pot($n1, $n2){
        $p = $n1 ** $n2;
        echo "El valor de $n1 elevado a la $n2 es: $p <br>";
        return;
    }

    pot($n1, $n2);

?>