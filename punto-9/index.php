<?php
//INPUT
$number = 0;
$i = 0;

//process
echo "Digite el número de de la tabla que desea: \n";
$number = readline();

while ($i <= 30) {
 echo $number . " x " . $i . " = " . ($number * $i) . "\n";
 $i++; 
}

?>