<?php
$num= readline("Bienvenid@, por favor ingrese un numero del 1 al 3");
$resp= match($num){
    "1"=> "Fue registrado con éxito",
    "2"=> "El inicio de sesión fue un éxito",
    "3"=> "Cerró sesión adecuadamente",
    default=> "Numero no valido"
};
echo $resp;
?>