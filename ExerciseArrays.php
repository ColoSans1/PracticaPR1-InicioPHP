<?php

$persona = array(
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

echo "Ejercicio 1<br>";
$contador = 1;

foreach ($persona as $clave => $valor) {
    echo "dato $contador: $valor<br>";
    $contador++;
}

echo "<br>Ejercicio 2<br>";

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}

echo "<br>Ejercicio 3<br>";

$persona["edad"] = 24;

$contador = 1;

foreach ($persona as $clave => $valor) {
    echo "dato $contador: $valor<br>";
    $contador++;
}

echo "<br>Ejercicio 4<br>";

unset($persona["ciudad"]);

var_dump($persona);

echo "<br>Ejercicio 5<br>";

$letters = "a,b,c,d,e,f";

$array_letters = explode(",", $letters);

rsort($array_letters);

foreach ($array_letters as $letter) {
    echo "$letter<br>";
}

echo "<br>Ejercicio 6<br>";

$notas = array(
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
);

arsort($notas);

foreach ($notas as $nombre => $nota) {
    echo "$nombre: $nota<br>";
}

echo "<br>Ejercicio 7<br>";

$suma = array_sum($notas);
$numero_alumnos = count($notas);
$media = $suma / $numero_alumnos;

echo "La media de las notas es: " . number_format($media, 2) . "<br><br>";

echo "Alumnos con nota superior a la media:<br>";
foreach ($notas as $nombre => $nota) {
    if ($nota > $media) {
        echo "$nombre: $nota<br>";
    }
}

echo "<br>Ejercicio 8<br>";

$nota_maxima = max($notas);

$mejor_alumno = array_search($nota_maxima, $notas);

echo "La nota más alta es: $nota_maxima<br>";
echo "El mejor alumno es: $mejor_alumno<br>";

?>
