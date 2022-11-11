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
//Por usar el modificador de visibilidad en el constructor, no se necesitan los atributos:
//https://www.php.net/manual/en/language.oop5.decon.php#language.oop5.decon.constructor.promotion
//    protected $operando1;
//    protected $operando2;
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
    
    //Si no se usase Constructor promotion (https://www.php.net/manual/en/language.oop5.decon.php#language.oop5.decon.constructor.promotion)
    //Se podría asignar directamente a los atributos protected
    public function __construct( protected $operando1, 
            protected $operando2) {
//       $this->operando1=$op1;
//       $this->operando2=$op2;
    }
    
    //Constructor al uso
//     public function __construct(  $op1, 
//            protected $op2) {
//       $this->operando1=$op1;
//       $this->operando2=$op2;
//    }
}
