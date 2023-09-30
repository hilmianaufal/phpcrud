<?php

require 'function.php';

$id=$_GET['id'];
$san=query("SELECT * FROM santri WHERE id=$id")[0];



if(isset($_POST['edit'])){
    if(edit($_POST)>0){
        echo '<div class="alert alert alert-primary" role="alert">
        Data Berhasil Di Edit !
      </div><script>document.location.href="index.php" </script>';
    }else {
        echo "<script>alert('Data Gagal Di Tambahkan Di Edit')
        document.location.href='index.php';
        </script>";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Santri</title>
</head>
<body>
<div class="containerTambah">
 <h1>Edit Data Santri </h1>
<form action="" method="post">
    <input type="hidden" name="<?= $san['id'] ?>">
 <div class="mb-3 labelTambah">
  <label for="nama" class="form-label">Nama</label>
  <input type="text" class="form-control" value="<?= $san['nama'] ?>" id="nama" name="nama" placeholder="Masukan Nama" required autofocus>
</div>
<div class="mb-3 labelTambah">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" value="<?= $san['email'] ?>" id="email" placeholder="Masukan email" name="email" required autofocus>
</div>
<div class="mb-3 labelTambah">
  <label for="nik" class="form-label">NIK</label>
  <input type="text" class="form-control" value="<?= $san['nik'] ?>" id="nik" placeholder="Masukan Nik" name="nik" required autofocus>
</div>
<div class="mb-3 labelTambah">
  <label for="asal" class="form-label">Asal</label>
  <input type="text" class="form-control" id="email" value="<?= $san['asal'] ?>" placeholder="Masukan email" name="asal" required autofocus>
</div>
<div class="mb-3 labelTambah">
  <label for="nohp" class="form-label">nohp</label>
  <input type="text" class="form-control" id="nohp" value="<?= $san['nohp'] ?>" placeholder="Masukan Nomer Hp" name="nohp" required autofocus>
</div>
<div class="mb-3">
  <button type="submit" name="edit"class="btn btn-primary m-auto">Edit Data</button>
</div>
</form>
</div>
</body>
</html>