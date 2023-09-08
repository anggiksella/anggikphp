<?php
// $mahasiswa = [
//     ["Haechan", "001", "teknik", "chan@gmail.com", ],
//     ["Sunwoo", "002", "sastra inggris", "woo@gmail.com", ],
//     ["Hyunsuk", "003", "ekonomi", "hyun@gmail.com", ]
// ];
 
// Array Associative
// definisinya sama seperti array menarik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Haechan",
        "nrp" => "001",
        "jurusan" => "teknik",
        "email" => "chan@gmail.com",
        "gambar" => "echan.jpeg"
    ],
    [
        "nama" => "Sunwoo",
        "nrp" => "002",
        "jurusan" => "sastra inggris",
        "email" => "woo@gmail.com",
        "gambar" => "snw.jpeg"
    ],
    [
        "nama" => "Hyunsuk",
        "nrp" => "003",
        "jurusan" => "ekonomi",
        "email" => "hyun@gmail.com",
        "gambar" => "hys.jpeg"
    ]
    ];
// echo $mahasiswa [1]["email"];


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
           <li>
           <img src="img/<?= $mhs["gambar"]; ?>" alt="" width="250">
           </li>
           <li>Nama :<?= $mhs["nama"]; ?></li>
           <li>Nrp :<?= $mhs["nrp"]; ?></li>
           <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
           <li>Email :<?= $mhs["email"]; ?></li>
           
          

        </ul>
    <?php endforeach; ?>

</body>

</html>



