<?php
session_start();

if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [10, 20, 30]; 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['modificar'])) {
        $posicion = (int)$_POST['posicion'];
        $nuevo_valor = (int)$_POST['nuevo_valor'];
        $_SESSION['array'][$posicion] = $nuevo_valor;
    }

    if (isset($_POST['promedio'])) {
        $promedio = array_sum($_SESSION['array']) / count($_SESSION['array']);
    }

    if (isset($_POST['resetear'])) {
        $_SESSION['array'] = [10, 20, 30];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar array guardado en sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .promedio {
            color: orange;
        }
    </style>
</head>
<body>
    <h1>Modificar array guardado en sesión</h1>

    <form method="post">
        <label for="posicion">Posición a modificar:</label>
        <select id="posicion" name="posicion">
            <?php foreach ($_SESSION['array'] as $index => $value): ?>
                <option value="<?php echo $index; ?>"><?php echo $index; ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="nuevo_valor">Nuevo valor:</label>
        <input type="number" id="nuevo_valor" name="nuevo_valor" required><br><br>

        <button type="submit" name="modificar">Modificar</button>
        <button type="submit" name="promedio">Promedio</button>
        <button type="submit" name="resetear">Resetear</button>
    </form>


    <p>Array actual: <?php echo implode(", ", $_SESSION['array']); ?></p>

    <?php if (isset($promedio)): ?>
        <p class="promedio">Promedio: <?php echo number_format($promedio, 2); ?></p>
    <?php endif; 
    ?>
</body>
</html>