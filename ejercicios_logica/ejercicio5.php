<?php
$num = intval(readline("Ingrese un numero "));
    $res = 0;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i != 0) {
        } else {
            $res = $res + 10;
        }
    }

if ($num == 1) {
        echo "El dato ingresado no es valido. ";
    } elseif ($num > 1) {
        if ($res > 0) {
            echo "No es un numero primo";
        } elseif ($res== 0) {
            echo "Es un numero primo";
        }
    }
    ?>