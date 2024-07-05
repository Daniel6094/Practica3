<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Gato.php';
require_once 'Perro.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];

    if ($tipo === 'gato') {
        $animal = new Gato($nombre);
    } elseif ($tipo === 'perro') {
        $animal = new Perro($nombre);
    } else {
        $error = "Tipo de animal no válido.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Crear Animal</title>
</head>
<body>
    <h1>Resultado de Crear Animal</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php else: ?>
        <p>El Animal <?php echo htmlspecialchars($animal->getNombre()); ?> hace <?php echo htmlspecialchars($animal->hacerSonido()); ?></p>
    <?php endif; ?>
    <a href="index.html">Volver</a>
</body>
</html>
