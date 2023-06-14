<?php
$usuario=readline( "Ingrese un numero  de la tabla de multiplicar que desee\n ");
echo"\n";
$num=$usuario;
$i=0;
$resultado=0;
while ($i <= 10) {
    $resultado=$num*$i;
    echo "$num x $i = $resultado";
    echo"\n";
    $i=$i+1;

}
?>