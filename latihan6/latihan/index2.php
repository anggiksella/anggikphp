<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasarr");

// ambil data dari tabel mahasiswa / query data mahasiswa 
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ambil data (fetch) mahasiswa dari object result 
// mysql_fetch_row() // mengambalikan array numerik
// mysql_fetch_assoc() // mengembalikan array assosiative
// mysql_fetch_array() // mengambalikan keduanya
// mysql_fetch_object()

// while( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="20" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="../img/<?= $row["gambar"]; ?>" width="100"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile ; ?>

    </table>

</body>
</html>