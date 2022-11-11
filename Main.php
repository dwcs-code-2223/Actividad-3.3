<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
https://www.php.net/manual/es/language.oop5.autoload.php

spl_autoload_register(function ($nombre_clase) {
    require_once "clases".DIRECTORY_SEPARATOR . $nombre_clase . '.php';
});

$op1 = null;
$op2 = 10;

probarOperacion($op1, $op2, "Suma");
probarOperacion($op1, $op2, "Resta");
probarOperacion($op1, $op2, "Multiplicacion");

function probarOperacion($op1, $op2, $nombre) {
    $operacion = new $nombre();
    $operacion->setOperando1($op1);
    $operacion->setOperando2($op2);
    $operacion->calcular();
    $res = $operacion->getResultado();

    echo "El resultado de $nombre($op1, $op2) es:  $res<br/>";
}