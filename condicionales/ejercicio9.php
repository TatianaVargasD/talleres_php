<?php
$usuario=readline("Bienvenid@,por favor ingrese una hora en formato HH:MM ");
$resp=match(true){
    $usuario>="00:00"&& $usuario<="06:00"=>"Esta hora pertenece a la madrugada",
    $usuario>="06:00"&& $usuario<="11:59"=>"Esta hora pertenece a la mañana",
    $usuario>="12:00" && $usuario<="18:00"=>"Esta hora pertenece a la tarde",
    $usuario>="19:00" && $usuario<="23:59"=>"Esta hora pertenece a la noche",
    default=>"Esta hora no existe"
};
echo$resp;
?>