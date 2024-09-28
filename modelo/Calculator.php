<?php

class Calculator {
    public function calculate($expression) {
        // Validar que no haya división por cero
        if (strpos($expression, '/') !== false) {
            // Extraer la parte derecha de la división
            $parts = explode('/', $expression);
            // Verificar si la última parte (divisor) es cero
            if (end($parts) == '0') {
                return 'Error'; // Mensaje de error
            }
        }

        // Evaluar la expresión
        try {
            // Aquí se evalúa la expresión (debes tener cuidado al usar eval)
            $result = eval("return $expression;");
            return $result;
        } catch (Throwable $e) {
            return 'Error: ' . $e->getMessage(); // Manejo de otros errores
        }
    }
}

?>
