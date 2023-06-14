<?php
$numero =readline("Ingrese un numero");

if(esPrimo($numero)){
    echo 'Es primo';
}else{
    echo 'No es primo';
}
function esPrimo($numero)
{
    if(!is_numeric($numero))
        return false;
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
        
            return false;
        }
    }
    return true;
}
?>