<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Calculo
 *
 * @author maria
 */
abstract class Calculo {
    protected $operando1; 
    protected $operando2; 
    protected $resultado;
    
    public function setOperando1($operando1): void {
        $this->operando1 = $operando1;
    }

    public function setOperando2($operando2): void {
        $this->operando2 = $operando2;
    }  
    

    public function getResultado() {
        return $this->resultado;
    }
    public abstract function calcular();



}
