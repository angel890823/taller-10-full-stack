<?php
  include "./passwordCheck.php";

  //INPUT
  $user = "";
  $password = "";

  //PROCESS
  echo "Digite el usuario a registrar \n";
  $user = readLine();
  
  echo "Digite la contraseña \n";
  $password = readLine(); 

  if (hasSecurityLong($password) && hasUpperLetter($password) && hasNumber($password)){
    echo "La contraseña es segura";
  } else echo "La contraseña no es segura";

?>