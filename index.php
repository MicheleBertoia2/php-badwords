<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>censuratore di parole</title>
</head>
<body>

<form action = "landpage.php" method= "post">
  <div class="mb-3">
    <label for="paragraph" class="form-label">Paragrafo</label>
    <input type="text" class="form-control" id="paragraph" name="paragraph" >
  </div>
  <div class="mb-3">
    <label for="censored" class="form-label">Parola da censurare</label>
    <input type="text" class="form-control" id="censored">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


  
</body>
</html>