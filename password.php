<?php 

$length = $_GET['length'];

if (!empty($length) && isset($length)) {
    include __DIR__.'/functions.php';
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password</title>
</head>
<body>
  <h1>Password generata: <?php echo generatorPass($length) ?></h1>
</body>
</html>