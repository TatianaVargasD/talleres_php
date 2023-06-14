<?php

function Numero1($numero) {
    $suma = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $suma += $i;
        }
    }
    return $suma == $numero;
}

function encontrar($inicio, $fin) {
    $numerosP = [];
    for ($numero = $inicio; $numero <= $fin; $numero++) {
        if (Numero1($numero)) {
            $numerosP[] = $numero;
        }
    }
    return $numerosP;
}

$rangoInicio = readline("Ingrese el inicio del rango: ");
$rangoFin = readline("Ingrese el fin del rango: ");

$numerosP = encontrar($rangoInicio, $rangoFin);

echo "Los números perfectos en el rango de $rangoInicio a $rangoFin son:\n";
foreach ($numerosP as $num) {
    echo $num . "\n";
}
?>
