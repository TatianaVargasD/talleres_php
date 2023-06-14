<?php
$num = readline("Ingrese una opción del 1 al 5: ");
$resultado = match ($num) {
    '1' => "Bienvenido",
    '2' => "Ha iniciado sesión",
    '3' => "Se ha registrado con éxito",
    '4' => "Cerró sesión adecuadamente",
    '5' => "Su sesión ha caducado",
    default => "Opción no disponible"
};
echo $resultado;
?>

