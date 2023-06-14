<?php
$usuario=readline("Ingrese un numero ");
function generarFibonacci($num){
    $lista=[];
$lista[0]=0;
$lista[1]=1;
for ($i=2; $i <$num; $i++) { 
    $lista[$i] = $lista[$i-1] + $lista[$i-2];
}
return$lista;
}
$secuencia=generarFibonacci($usuario);

echo generarFibonacci($secuencia);
foreach($secuencia as $num){
    echo $num;
}
?>