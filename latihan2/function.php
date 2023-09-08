<?php
function salam($waktu = "Datang", $nama = "admin"){
    return " $waktu, $nama ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset"UTF=8">
    <Meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="widh=device-widht, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
  <h1><?= salam("Good Night", "Pacar Haechan");?></h1>
  <h1><?= salam("Good Night", "Pacar Sunwoo");?></h1>
  <h1><?= salam("Good Night", "Pacar Hyunsuk");?></h1>
</body>
</html>
