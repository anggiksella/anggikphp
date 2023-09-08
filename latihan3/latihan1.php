<?php
$mahasiswa = [
    ["Haechan", "001", "teknik", "chan@gmail.com", ],
    ["Sunwoo", "002", "sastra inggris", "woo@gmail.com", ],
    ["Hyunsuk", "003", "ekonomi", "hyun@gmail.com", ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <Meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="widh=device-widht, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
           <li>Nama :<?= $mhs[0]; ?></li>
           <li>Nomor :<?= $mhs[1]; ?></li>
           <li>Jurusan :<?= $mhs[2]; ?></li>
           <li>Email :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>