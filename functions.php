<?php
  
  function generatorPass($length) {
    $symbolsPass = 'abcdefghijklmnoprstuvwxyzABCDEFGHIJKLMNOPQRSTUVXYZ123456789!?&%$<>^+-*/()[]{}@#_=';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
      $n = rand(0, strlen($symbolsPass) - 1);
      $password .= $symbolsPass[$n];
    }
    return $password;
  }


  
