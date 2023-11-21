<?php
  //DEFINICION DE DATOS (INPUTS)
  $name = "";
  $lastName = "";

  //PROCESS
  echo "Ingrese su nombre: ";
  $name = readline();

  echo "Ingrese su apellido: ";
  $lastName = readline();

    //OUTPUT
  echo "El nombre del usuario es: " . $name . " y su apellido es: " . $lastName;
?>