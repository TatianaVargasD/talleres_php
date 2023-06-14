<?php
function ordenamiento($listado) {
    $n = count($listado);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($listado[$j] > $listado[$j + 1]) {
                $temp = $listado[$j];
                $listado[$j] = $listado[$j + 1];
                $listado[$j + 1] = $temp;
            }
        }
    }
    return $listado;
}

$entrada = readline("Ingrese una lista de números separados por espacios: ");
$num = explode(" ", $entrada);


$num = array_map('intval', $num);

$Ordenados = ordenamiento($num);

echo "Lista ordenada de menor a mayor: " . implode(" ", $Ordenados) . "\n";