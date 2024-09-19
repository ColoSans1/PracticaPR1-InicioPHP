<?php
$num1 = 8;
$num2 = 3;

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$division = $num2 != 0 ? $num1 / $num2 : "División por cero no permitida";

echo "Valor de num1: $num1 <br>";
echo "Valor de num2: $num2 <br>";
echo "Suma: $suma <br>";
echo "Resta: $resta <br>";
echo "División: $division <br>";

if ($num1 > $num2) {
    echo "El número mayor es: $num1 <br>";
    echo "El número menor es: $num2 <br>";
} elseif ($num1 < $num2) {
    echo "El número mayor es: $num2 <br>";
    echo "El número menor es: $num1 <br>";
} else {
    echo "Ambos números son iguales: $num1 <br>";
}

if ($num1 > 1 && $num2 > 1) {
    $area = ($num1 * $num2) / 2;
    echo "El área del triángulo con base $num1 y altura $num2 es: $area <br>";
} else {
    echo "No se puede calcular el área porque uno o ambos números son menores o iguales a 1.<br>";
}
?>
