<?php
  //DATOS DE ENTRADA
  $membershipType = "";
  $personNumber = 0;
  const TICKET_PRICE = 25000;

  //PROCESO

  echo "Digite el número de personas que ingresaran a la bolera \n";
  $personNumber = readline();
  echo "Digite la categoria de la afiliación: \n";
  $membershipType = readline();

  $totalPay = TICKET_PRICE * $personNumber;

  if (strtoupper($membershipType) == "A" || strtoupper($membershipType) == "B") {
    $totalPay = $totalPay * 0.7;
  } else {
    echo "El usuario ingreso un valor de afiliación que no tiene descuento. \n";
  }
  
  echo "El total a pagar es: $" . number_format($totalPay);

?>