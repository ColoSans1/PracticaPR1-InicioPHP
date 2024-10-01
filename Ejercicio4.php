<?php
$tirada = rand(1, max: 6);

switch ($tirada) {
    case 1:
        $cara_opuesta = 6;
        $numero_letras = "uno";
        break;
    case 2:
        $cara_opuesta = 5;
        $numero_letras = "dos";
        break;
    case 3:
        $cara_opuesta = 4;
        $numero_letras = "tres";
        break;
    case 4:
        $cara_opuesta = 3;
        $numero_letras = "cuatro";
        break;
    case 5:
        $cara_opuesta = 2;
        $numero_letras = "cinco";
        break;
    case 6:
        $cara_opuesta = 1;
        $numero_letras = "seis";
        break;
    default:
        $cara_opuesta = "Indefinido";
        $numero_letras = "Error";
        break;
}


echo "Tirada: $tirada ($numero_letras)<br>";
echo "La cara opuesta del dado es: $cara_opuesta<br>";
?>
