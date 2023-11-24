<?php  
  //INPUT
  $numberOne = 0;
  $numberTwo = 0;
  $option = "";

  // 1. Llamar una función para pedir los npumeros
  $numberOne = getNumber();
  $numberTwo = getNumber();
    
  // 2. Llamar una función para mostrar el menu y obtener la opción del usuario
  $option = showMenu();

  // 3. Llamar una función que seleccione la operacion correcta
  $result = operate($numberOne, $numberTwo, $option);

  // 4. Mostrar el resultado
  echo "El resultado de la operación seleccionada es: " . $result;
?>