<?php
$usuario = readline("Escriba el número el cual desea invertir: ");
$num = (string) $usuario;
$resp = "";


for ($i = strlen($num) - 1; $i >= 0; $i--) {
    $resp .= $num[$i];
}
echo "El numero invertido es: " . (int) $resp . "\n";

?>