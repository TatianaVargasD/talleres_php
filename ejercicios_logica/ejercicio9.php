<?php
$usuario = readline("Bienvenido(a) ingrese un numero ");
$num1 = 0;
$num2 = 1;
$res = "$num1$num2";
while (($num1 + $num2) <= $usuario) {
    $num3 = $num1 + $num2;
    $res= "$num3";
    $num1 = $num2;
    $num2 = $num3;
}
echo "La secuencia del fibonacci del numero ingresado es ".$res;

?>