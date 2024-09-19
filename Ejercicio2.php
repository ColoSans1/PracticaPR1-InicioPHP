<?php
$dia = 3; 

switch ($dia) {
    case 1:
        echo "El número $dia corresponde a Lunes.";
        break;
    case 2:
        echo "El número $dia corresponde a Martes.";
        break;
    case 3:
        echo "El número $dia corresponde a Miércoles.";
        break;
    case 4:
        echo "El número $dia corresponde a Jueves.";
        break;
    case 5:
        echo "El número $dia corresponde a Viernes.";
        break;
    case 6:
        echo "El número $dia corresponde a Sábado.";
        break;
    case 7:
        echo "El número $dia corresponde a Domingo.";
        break;
    default:
        echo "El número $dia no se corresponde con ningún día de la semana.";
}
?>
