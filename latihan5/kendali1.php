<?php 
// SUPERGLOBALS 
// variabel global milik php
// merupakan Array Associative 

// $_GET
$mahasiswa = [
    [
    "nama"  => "Haechan",
    "nrp"   => "001",
    "email" => "chan@gmail.com",
    "jurusan" => "Teknik",
    "gambar" => "echan.jpeg"
    ],
    [
        "nama"  => "Sunwoo",
        "nrp"   => "002",
        "email" => "woo@gmail.com",
        "jurusan" => "Sastra Bahasa",
        "gambar" => "snw.jpeg"
    ],
    [
        "nama"  => "Hyunsuk",
        "nrp"   => "003",
        "email" => "hyun@gmail.com",
        "jurusan" => "Ekonomi",
        "gambar" => "hys.jpeg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>  
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="kendali2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>



