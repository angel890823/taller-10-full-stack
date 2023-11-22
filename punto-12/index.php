<?php
  //INPUT
  $number = 0; 

  //PROCESS
  echo "Digite el número del cual desea generar la tabla de multiplicar \n";
  $number = readline();

  for ($i = 0; $i <= 30; $i++) {
      echo $number . " x " . $i . " = " . $number*$i . "\n";
      $sum = $i + $sum;
  }
  
?>