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

  switch (strtoupper($membershipType)) {
    case "A":
      $totalPay = $totalPay * 0.7;
      break;
    case "B":
      $totalPay = $totalPay * 0.75;
      break;
    case "C":
      $totalPay = $totalPay * 0.9;
      break;
    case "D":
      $totalPay = $totalPay * 0.95;
      break;
    default:
      echo "Lo sentimos, usted no se encuentra con afiliación para el descuento \n";
  }

  echo "El total a pagar es $" . number_format($totalPay);

?>