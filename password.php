<?php 
  $length = $_GET['length'];
  
  include __DIR__.'/functions.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <style>
    body {
      height: 100vh;
    }

    .container {
      height: 100%;
    }
  </style>
  <title>Password</title>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center">
    <h1>Password generata: "<?php echo generatorPass($length) ?>"</h1>
  </div>
</body>
</html>