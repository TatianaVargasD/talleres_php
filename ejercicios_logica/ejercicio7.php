<?php
$usuario = readline("Ingrese una lista de datos separelos por coma y no deje espacios por favor ");
$num= explode(",", $usuario);
$busqueda = readline("Escriba el  dato que desea buscar en la lista anterior ");
$var = -1;
for ($i = 0; $i < count($num); $i++) {
 if ($busqueda == $num[$i]) {
        $var += $i + 1;
    }
}


echo "El dato $busqueda se encuentra en la posicion $var.";


