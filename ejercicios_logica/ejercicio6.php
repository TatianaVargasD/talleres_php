<?php
function invertirNumero($numero) {
    $numeroInvertido = 0;
    
    while ($numero > 0) {
        $resto = $numero % 10;
        $numeroInvertido = ($numeroInvertido * 10) + $resto;
        $numero = (int)($numero / 10);
    }
    return $numeroInvertido;
}
$numeroUsuario = (int)readline("Ingrese un número: ");
$numeroInvertido = invertirNumero($numeroUsuario);
echo "El número invertido es: " . $numeroInvertido;

?>