<?php 
require_once '../modelo/Calculator.php';

class CalculatorController {
    private $calculator;
    private $pantalla;

    public function __construct(){
        $this->calculator = new Calculator();
        $this->processRequest();
    }

    public function processRequest(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['pantalla'])){
                $this->pantalla = $_POST['pantalla'];
            }
            if(isset($_POST['borrar'])){
                 // Reiniciar la calculadora
                $this->pantalla = '';
            } elseif(isset($_POST['calcular'])){
                  // Evaluar la operación
                $this->pantalla = $this->calculator->calculate($this->pantalla);
            } else{
                 // Concatenar el número o el operador a la pantalla
                $this->pantalla .= $_POST['boton'];
            }
        }
    }
    
    public function getPantalla(){
        return $this->pantalla;
    }
        
    
}


?>