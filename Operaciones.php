<?php 

class Operaciones {
    
    public $resultado = 0;

    public function operacion($num1,$num2){
        if (isset($_GET["sumar"])) {
            $this->resultado = $num1 + $num2;
        } else if (isset($_GET["restar"])) {
            $this->resultado = $num1 - $num2;
        } else if (isset($_GET["multiplicar"])) {
            $this->resultado = $num1 * $num2;
        } else if (isset($_GET["dividir"])) {
            $this->resultado = $num1 / $num2;
        } else if (isset($_GET["potenciacion"])) {
            $this->resultado = pow($num1,$num2);
        } else if (isset($_GET["seno"])) {
            $this->resultado = sin($num1);
        } else if (isset($_GET["coseno"])) {
            $this->resultado = cos($num1);
        } else if (isset($_GET["factorial"])) {
            $this->resultado = $num1;
            for ($i = $num1-1; $i > 0; $i--) {
                $this->resultado *= $i;
            }
        }
    }
}


?>