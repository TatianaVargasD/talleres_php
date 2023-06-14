<?php
$num=Readline("Bienvenid@,por favor ingrese un número del 1 al 12 ");
$resp=match($num){
    "1"=>"Enero",
    "2"=>"Febrero",
    "3"=>"Marzo",
    "4"=>"Abril",
    "5"=>"Mayo",
    "6"=>"Junio",
    "7"=>"Julio",
    "8"=>"Agosto",
    "9"=>"Septiembre",
    "10"=>"Octubre",
    "11"=>"Noviembre",
    "12"=>"Diciembre",
    default=>"Lo siento,no esta disposible ese número"
};
echo$resp;
?>