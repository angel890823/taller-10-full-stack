<?php
  //DECLARACIÓN DE DATOS DE ENTRADA (INPUTS)
  $name = "";
  $age = 0;

  //PROCESO (PROCESS)
  echo "Ingrese su nombre por favor: \n";
  $name = readline();
  echo "Ingrese su edad por favor: \n";
  $age = readline();

  //SALIDA
  if  ($age >= 18) {
    echo $name . " Usted es mayor de edad";
  } else {
    echo $name . " Usted es menor de edad";
  }
?>