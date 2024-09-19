<?php
// Inicialización de variables
$suma_total = 0;
$contador_pares = 0;
$contador_impares = 0;

// Bucle para generar números aleatorios y sumarlos hasta que la suma total supere 100
while ($suma_total <= 100) {
    // Generar un número aleatorio entre 0 y 20
    $numero = rand(0, 20);
    
    // Mostrar el número generado
    echo "Número generado: $numero<br>";
    
    // Sumar el número a la suma total
    $suma_total += $numero;
    
    // Verificar si el número es par o impar
    if ($numero % 2 == 0) {
        $contador_pares++;
    } else {
        $contador_impares++;
    }
}

// Mostrar los resultados
echo "<br>Suma total de los números generados: $suma_total<br>";
echo "Total de números pares generados: $contador_pares<br>";
echo "Total de números impares generados: $contador_impares<br>";
?>
