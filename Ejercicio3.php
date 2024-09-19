<?php
$num1 = 12;
$num2 = 15;

echo "Progresión de números pares desde 0 hasta $num1:<br>";
for ($i = 0; $i <= $num1; $i += 2) {
    echo $i . " ";
}
echo "<br><br>";

echo "Progresión desde $num2 hasta 0:<br>";
while ($num2 >= 0) {
    echo $num2 . " ";
    $num2--;
}
echo "<br><br>";

$num2 = 15; 

echo "Progresión desde $num1 hasta $num2 (si la segunda variable es más pequeña, solo imprime una vez):<br>";
do {
    echo $num1 . " ";
    $num1++;
} while ($num1 <= $num2);
?>
