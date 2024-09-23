<?


echo "<h1>EJERCICIO 1 </h1><br>";

$datosUsuario = array(
    "nombre" => "Sara",
    "apellido" => "Marónez", 
    "edad" => "23", 
    "ciudad" => "Barcelona", 
);

foreach ($datosUsuario as $clave => $valor) {
    echo "{$clave} => {$valor} <br>";
}

echo "<pre>";
print_r($datosUsuario);
echo "</pre>";

?>