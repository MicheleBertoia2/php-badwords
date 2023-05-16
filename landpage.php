<?php
  var_dump($_POST);

  $paragraph = $_POST['paragraph'];
  $word = $_POST['word'];
  $censored = str_replace($word,'***',$paragraph,)
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>parole censurate</title>
</head>
<body>

  <h1>testo da censurare</h1>
  <p><?php echo $paragraph ?></p>
  <h1>testo da censurato</h1>
  <p><?php echo $censored ?></p>
  
</body>
</html>