<?php
$num=readline("Bienvenid@,por favor ingrese un número del 1 al 7 ");
$resp=match($num){
    "1"=>"Lunes",
    "2"=> "Martes",
    "3"=>"Miercoles",
    "4"=>"Jueves",
    "5"=>"Viernes",
    "6"=>"Sábado",
    "7"=>"Domingo",
    default=>"Lo siento corresponde a un día"
};
echo$resp;
?>