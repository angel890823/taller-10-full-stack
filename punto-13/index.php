<?php
  $sum = 0;
  $numberArray = array(18, 25, 54, 87, 30);

  foreach($numberArray as $number) {

  $sum = $sum + $number;
      
  }
  echo "La sumatoria de los números del arreglo es: " . $sum . "\n";
?>