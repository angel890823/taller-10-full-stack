<?php
  include "./password.php";
  echo "ingrese la contraseña para saber si es segura \n";
  $pass = readline();
  if(password($pass)){
    echo "La contraseña es segura.";
  } else {
    echo "La contraseña es insegura.";
  }

?>