<?php
$color=readline("Bienvenid@,por favor ingrese un color ");
$resp=match($color){
    "rojo" =>"El color representa pasión, violencia, fuego y seducción",
    "amarillo"=> "El color representa armonía, sabiduría y agilidad",
    "azul"=>"El color representa estabilidad y confianza ",
    "naranja" =>"El color representa felicidad, entusiasmo y  creatividad",
    "verde" =>"El color representa naturaleza, crecimiento y fertilidad",
    "violeta"=> "El color representa poderoso, ambicioso y misterioso",
    "rosado" =>"El color representafemenino, romance e inocencia",
    "negro"=> "El color representa poder, lujo, emociones fuertes y conocimiento.",
    default=>"El color no esta registrado,eliga otro"
};
echo $resp;
?>