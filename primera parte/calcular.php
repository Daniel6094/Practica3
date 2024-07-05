<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'Rectangulo.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $largo = $_POST['largo'];
        $ancho = $_POST['ancho'];

        $rectangulo = new Rectangulo($largo, $ancho);

        $perimetro = $rectangulo->calcularPerimetro();
        $area = $rectangulo->calcularArea();
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la Calculadora de Rectángulo</title>
</head>
<body>
    <h1>Resultado de la Calculadora de Rectángulo</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php else: ?>
        <p>Largo: <?php echo htmlspecialchars($largo); ?></p>
        <p>Ancho: <?php echo htmlspecialchars($ancho); ?></p>
        <p>Perímetro: <?php echo htmlspecialchars($perimetro); ?></p>
        <p>Área: <?php echo htmlspecialchars($area); ?></p>
    <?php endif; ?>
    <a href="index.html">Volver</a>
</body>
</html>
