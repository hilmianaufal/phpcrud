<?php 

require 'function.php';
$id = $_GET ['id'];
$san = query("SELECT * FROM santri WHERE id=$id")[0];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Detail Data Santri</title>
</head>
<body>
<div class="containerDetail">
    <h1>Detail Lengkap Data Santri</h1>
    <ul>
        <li>Nama : <?= $san['nama'] ?></li>
        <li>Email : <?= $san['email'] ?></li>
        <li>Nik : <?= $san['nik'] ?></li>
        <li>Asal : <?= $san['asal'] ?></li>
        <li>Nomer Hp : <?= $san['nohp'] ?></li>
    </ul>
    <div class="button">
        <a href="" class="btn btn-success">Edit</a>
        <a href="index.php" class="btn btn-primary" > Kembali </a>
        <a href="" class="btn btn-danger">Hapus</a>
    </div>
</div>
</body>
</html>