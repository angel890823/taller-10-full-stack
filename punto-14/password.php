<?php 
  function hasSecurityLong($pass){
    return strlen($pass) >= 8;
  }
  
  function hasUpperLetter($pass){
    $arrayPass = str_split($pass);
    
    foreach($arrayPass as $letter){
      if(ctype_upper($letter)){
        return true;
      }
    } return false; 
  }

  function hasNumber($pass){
    $arrayPass = str_split($pass);

    foreach($arrayPass as $letter){
      if(is_numeric($letter)){
        return true;
      }
    } return false; 
  }
?>