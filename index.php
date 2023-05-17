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
  <title>PHP Strong Password Generator</title>
</head>
<body>

  <div class="container d-flex justify-content-center align-items-center text-center">
    <form action="./password.php" method="GET">
      <input type="number" name="length" class="input-group my-5" placeholder="Inserisci lunghezza password">
      <button class="btn btn-primary " type="submit">Invia</button>
    </form>
  </div>

</body>
</html>