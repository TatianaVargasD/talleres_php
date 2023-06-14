<?php
$fecha=readline("Bienvenid@,por favor ingrese una fecha simbólica ");
$resp=match($fecha){
"9 febrero"=>"Día del Periodista",
"14 febrero" => "Día de San Valentín",
"8 marzo" => "Día Internacional de la Mujer",
"22 abril" => "Día de la Tierra",
"23 abril" => "Día del Idioma",
"30 abril" =>"Día del Niño",
"8 mayo" => "Día de la Madre",
"15 mayo" => "Día del Maestro",
"1 junio" => "Día Internacional del Niño",
"28 julio" =>  "Día de la salud en el mundo del Trabajo",
"4 agosto" =>  "Día del Periodista y Comunicador",
"4 agosto" =>  "Día del Bombero",
"7 agosto" =>  "Día del Ejercito Nacional",
"17 septiembre" =>  "Día de Amor y Amistad",
"28 septiembre" =>  "Día del Vendedor",
"4 octubre" =>  "Día del Poeta",
"12 octubre" => "Día de la Raza",
"22 octubre" => "Día del Trabajador Social",
"31 octubre" =>  "Día de Halloween",
"11 noviembre" =>  "Día del Bombero en Colombia",
"28 diciembre" =>  "Día de los Inocentes",
default=>"Lo siento, aun no está esa fecha"
};
echo$resp;
?>