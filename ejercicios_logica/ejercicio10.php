<?php
$usuario = readline("Bienvenido(a) por favor ingrese una lista de números separados por espacios ");
$num = explode(" ", $usuario);
$num = array_map('intval', $num);
sort($num);
echo "La lista ordenada de menor a mayor " . implode(" ", $num) . "\n";