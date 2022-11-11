<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Multiplicacion
 *
 * @author maria
 */
class Multiplicacion extends Calculo{
     public function calcular() {
       if (isset($this->operando1) 
               && isset($this->operando2)
                       && is_numeric($this->operando1)
                               &&  is_numeric($this->operando2)) {
            $this->resultado= ($this->operando1 * $this->operando2);
        }
        else{
           $this->resultado=NAN;
        }
    }
}
