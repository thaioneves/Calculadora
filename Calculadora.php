<?php
Class Calculadora{
    private $valor1;
    private $valor2;
    private $resultado;

    public function somar($valor1, $valor2){
        $this->resultado = $valor1 + $valor2;
        return $this-> resultado;
    }

    public function subtrair($valor1, $valor2){
        $this->resultado = $valor1 - $valor2;
        return $this-> resultado;
    }

     public function multilicar($valor1, $valor2){
        $this->resultado = $valor1 * $valor2;
        return $this-> resultado;
    } 

    public function dividir($valor1, $valor2){
        $this->resultado = $valor1 / $valor2;
        return $this-> resultado;
    }
}
