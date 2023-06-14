<?php
$num1 = readline("Ingrese el número inicial ");
$num2 = readline("Ingrese el rango final  ");

echo "El número perfecto que se encontró fue ";

for ($i = $num1; $i <= $num2; $i++) {
    $res = 0;
    
    for ($x = 1; $x <= ($i / 2); $x++) {
        if ($i % $x == 0) {
            $res = $res +$x;
        }
    }
    
    if ($res == $i) {
        echo $i . " ";
    }
}

?>
