<?php
require_once '../controlador/CalculatorController.php';

$controller = new CalculatorController();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="calculadora">
        <form method="POST" action="">
            <div class="pantalla">
                <?php echo htmlspecialchars($controller->getPantalla()); ?>
            </div>

            <input type="hidden" name="pantalla" value="<?php echo htmlspecialchars($controller->getPantalla()); ?>">

            <div class="fila">
                <button type="submit" class="boton" name="boton" value="7">7</button>
                <button type="submit" class="boton" name="boton" value="8">8</button>
                <button type="submit" class="boton" name="boton" value="9">9</button>
                <button type="submit" class="boton boton-operador" name="boton" value="+">+</button>
            </div>
            <div class="fila">
                <button type="submit" class="boton" name="boton" value="4">4</button>
                <button type="submit" class="boton" name="boton" value="5">5</button>
                <button type="submit" class="boton" name="boton" value="6">6</button>
                <button type="submit" class="boton boton-operador" name="boton" value="-">-</button>
            </div>
            <div class="fila">
                <button type="submit" class="boton" name="boton" value="1">1</button>
                <button type="submit" class="boton" name="boton" value="2">2</button>
                <button type="submit" class="boton" name="boton" value="3">3</button>
                <button type="submit" class="boton boton-operador" name="boton" value="*">*</button>
            </div>
            <div class="fila">
                <button type="submit" class="boton" name="boton" value="0">0</button>
                <button type="submit" class="boton boton-borrar" name="borrar">C</button>
                <button type="submit" class="boton boton-igual" name="calcular">=</button>
                <button type="submit" class="boton boton-operador" name="boton" value="/">/</button>
            </div>

        </form>
</body>

</html>