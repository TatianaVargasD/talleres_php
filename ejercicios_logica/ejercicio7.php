<?php

function buscarElemento($lista, $elemento) {
    foreach ($lista as $posicion => $valor) {
        if ($valor === $elemento) {
            return $posicion;
        }
    }
    
    return -1;
}
$listaUsuario = readline("Ingrese la lista de elementos separados por comas: ");
$elementos = explode(",", $listaUsuario);
$elementoBuscar = readline("Ingrese el elemento a buscar: ");
$posicion = buscarElemento($elementos, $elementoBuscar);
if ($posicion !== -1) {
    echo "El elemento se encuentra en la posición: " . $posicion;
} else {
    echo "El elemento no se encuentra en la lista.";
}
?>
