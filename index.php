<?php

  $length = $_GET['length'];

  function generatorPass($length) {
    $symbolsPass = 'abcdefghijklmnoprstuvwxyzABCDEFGHIJKLMNOPQRSTUVXYZ123456789!?&%$<>^+-*/()[]{}@#_=';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
      $n = rand(0, strlen($symbolsPass) - 1);
      $password .= $symbolsPass[$n];
    }

    return $password;
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
</head>
<body>

  <form action="./index.php" method="GET">
    <input type="number" name="length" placeholder="Inserisci lunghezza password">
    <button type="submit">Invia</button>
  </form>

  <h1>Password generata: <?php echo generatorPass($length) ?></h1>

</body>
</html>