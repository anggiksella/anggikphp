<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("location:kendali1.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li>
           <img src="img/<?= $_GET["gambar"]; ?>" alt="" width="150">
        </li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="kendali1.php">Kembali ke daftar Mahasiswa</a>
</body>
</html>
