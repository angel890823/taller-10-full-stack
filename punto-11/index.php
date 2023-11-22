<?php
  //INPUT
  $j = 0;

  //PROCESS
  for ($i = 1; $i <= 100; $i += 2) {
      echo $i . "\n";
      $j = $i + $j;
  }

  //OUTPUT
  echo "La sumatoria de los números impares del 1 al 100 es: \n" . $j;
?>