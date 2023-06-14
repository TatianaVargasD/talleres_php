<?php
$num=readline("Por favor ingrese la palabra que desee ");
$pal=strrev($num);
if ($num===$pal) {
    echo "La palabra es un palindromo";
}
else{
    echo "No es un palindromo";
}
?>