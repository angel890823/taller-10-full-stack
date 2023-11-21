<?php
  //declaración de datos de entrada
  $firstNumber = 0;
  $secondNumber = 0;
  

  //proceso
  echo "Digite el primer número: \n";
  $firstNumber = readline();

  echo "Digite el segundo número: \n";
  $secondNumber = readline();

  $result = $firstNumber + $secondNumber;

  //salida
  echo "La suma de los dos números es: \n";     
  echo "el resultado de la operación es: " . $result;
?>