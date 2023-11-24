<?php
  function getNumber(){
    echo "Digite el primer número de la operacion: \n";
    return readline();
  }

  function showMenu(){
    echo "Elija la opción para realizar la operacion de acuerdo al siguiente menu: \n";
    echo "1 -> SUMAR \n";
    echo "2 -> RESTAR \n";
    echo "3 -> MULTIPLICAR \n";
    echo "4 -> DIVIDIR \n";
    return readline();
  }

  function operate($x, $y, $operation){ 
    switch ($operation) {
      case 1:
        return add($x, $y);
      case 2:
        return sub($x, $y);
      case 3:
        return dot($x, $y);
      case 4:
        return split($x, $y);
      default:
        echo "La opción seleccionada es invalida \n";
    }
  }

  function add($x, $y) {
    return $x + $y;
  }
  function sub($x, $y) {
    return $x - $y;
  }
  function dot($x, $y) {
    return $x * $y;
  }
  function split($x, $y) {
    return $x / $y;
  }
?>
