<?php
$listanumeros=readline("Por favor ingrese cuantas notas va a promediar");
$notas=[];
$sum=0;
for ($i=1; $i <=$listanumeros ; $i++) { 
    $notas[$i-1]=floatval(readline(prompt:"ingrese la nota $i \n"));
    $sum+=$notas[$i-1];
}
$promedio=$sum/$listanumeros;
echo("El promedio  de las notas ingresadas es:".$promedio."/n");