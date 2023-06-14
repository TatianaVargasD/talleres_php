<?php
$num=readline("Por favor ingrese un numero");
$resultado=1;
for ($i=1; $i<=$num; $i++) { 
    $resultado*=$i;
}
echo "El factorial del numero ingresado es $resultado";
?>