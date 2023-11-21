<?php

  //INPUT
  $firstNumber = 0;
  $secondNumber = 0;
  $option = "";
  $result = 0;

  echo "Digite el el primer número de la operacion: \n";
  $firstNumber = readline();
  echo "Digite el el primer número de la operacion: \n";
  $secondNumber = readline();

  //PROCESS
  echo "Elija la opción para realizar la operacion de acuero al siguiente menu: \n";
  echo "+ -> SUMAR \n";
  echo "- -> RESTAR \n";
  echo "* -> MULTIPLICAR \n";
  echo "/ -> DIVIDIR \n";
  $option = readline();

  switch ($option) {
    case "+":
      $result = $firstNumber + $secondNumber;
      break;
    case "-":
      $result = $firstNumber - $secondNumber;
      break;
    case "*":
      $result = $firstNumber * $secondNumber;
      break;
    case "/":
      $result = $firstNumber / $secondNumber;
      break;
    default:
      echo "La opción seleccionada es invalida \n";
  }

  echo "El resultado de la operacion es: " . $result;
?>