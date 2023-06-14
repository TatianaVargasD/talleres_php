<?php
$usuario=readline("Ingrese la tabla de multiplicar que desee, este numero debe de ser de 1y 12 \n ");
echo"\n";
$num=7;
$i=0;
$resultado=0;
do {
    $resultado=$num*$i;
    echo "$num x $i = $resultado";
    echo"\n";
    $i=$i+1;
} while ($i <= 10);
?>
