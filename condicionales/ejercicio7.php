<?php
$nota=readline("Bienvenid@,por favor ingrese una nota ");
$resp=match(true){
    $nota>=90 && $nota<=100=>"Sobresaliente",
    $nota>=70 && $nota<=80=>" Muy Bueno",
    $nota>=60 && $nota<=70=>"Bueno",
    $nota>=50 && $nota<=60 =>"Suficiente",
    $nota>=0 && $nota<=50 => "Reprobado",
    default=>"No es una nota válida"
};
echo$resp;
?>