<?php
$suma_total = 0;
$contador_pares = 0;
$contador_impares = 0;

while ($suma_total <= 100) {
    $numero = rand(0, 20);
    
    echo "Número generado: $numero<br>";
    
    $suma_total += $numero;
    
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
