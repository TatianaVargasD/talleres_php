<?php
$letra=readline("bienvenid@,ingrese la letra que desee ");
$resp=match($letra){
    "a","e","i","o","u"=>"Es una vocal",
    "b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","y","z"=>"es una consonante",
    default=>"Por favor revise si es una letra"
};
echo $resp;
?>