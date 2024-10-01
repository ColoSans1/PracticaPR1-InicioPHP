
<?php
session_start();

if (!isset($_SESSION['milk'])) {
    $_SESSION['milk'] = 3; 
}

if (!isset($_SESSION['softDrink'])) {
    $_SESSION['softDrink'] = 0; 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto = $_POST['producto'];
    $cantidad = (int)$_POST['cantidad'];

    if (isset($_POST['añadir'])) {
        if ($producto === 'leche') {
            $_SESSION['milk'] += $cantidad;
        } elseif ($producto === 'refresco') {
            $_SESSION['softDrink'] += $cantidad;
        }
    } elseif (isset($_POST['quitar'])) {
        if ($producto === 'leche') {
            if ($_SESSION['milk'] >= $cantidad) {
                $_SESSION['milk'] -= $cantidad;
            } else {
                $error = "Error: No puedes quitar más leche de la disponible.";
            }
        } elseif ($producto === 'refresco') {
            if ($_SESSION['softDrink'] >= $cantidad) {
                $_SESSION['softDrink'] -= $cantidad;
            } else {
                $error = "Error: No puedes quitar más refresco del disponible.";
            }
        }
    } elseif (isset($_POST['reset'])) {
        $_SESSION['milk'] = 0;
        $_SESSION['softDrink'] = 0;
    }

    $_SESSION['worker'] = $_POST['trabajador'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Supermercado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Gestión de Supermercado</h1>

    <form method="post">
        <label for="trabajador">Nombre del trabajador:</label>
        <input type="text" id="trabajador" name="trabajador" value="<?php echo isset($_SESSION['worker']) ? $_SESSION['worker'] : 'pere'; ?>" required><br><br>

        <label for="producto">Elige el producto:</label>
        <select id="producto" name="producto">
            <option value="leche">Leche</option>
            <option value="refresco">Refresco</option>
        </select><br><br>

        <label for="cantidad">Cantidad de producto:</label>
        <input type="number" id="cantidad" name="cantidad" value="1" min="1" required><br><br>

        <button type="submit" name="añadir">Añadir</button>
        <button type="submit" name="quitar">Quitar</button>
        <button type="submit" name="reset">Reiniciar Inventario</button>
    </form>

    <h2>Inventario:</h2>
    <p>Trabajador: <?php echo isset($_SESSION['worker']) ? $_SESSION['worker'] : 'pere'; ?></p>
    <p>Unidades de leche: <?php echo $_SESSION['milk']; ?></p>
    <p>Unidades de refresco: <?php echo $_SESSION['softDrink']; ?></p>

    <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
