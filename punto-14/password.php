<?php
  function password($pass) {
     
    if (strlen($pass) < 8) {
      return false;
    } 
    
    $tieneMayuscula = preg_match('/[A-Z]/', $pass); // Verificar si hay al menos una mayúscula
    $tieneNumero = preg_match('/[0-9]/', $pass); // Verificar si hay al menos un número

    return $tieneMayuscula && $tieneNumero;
  }
?>