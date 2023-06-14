<?php
$texto=readline("Bienvenid@,por favor ingrese un texto ");
$usuario=strlen($texto);
$resp=match(true){
    $usuario>=10 =>"La cadena es larga",
    $usuario>=4 && $usuario<10=>"La cadena es media",
    $usuario>0 && $usuario<4 =>"La cadena es corta",
    default=>"La cadena no es correcta"
};
echo $resp;
?>