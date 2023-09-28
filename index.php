<?php
// <!-- Koneksi Ke Database -->
require 'function.php';

// Query Data Santri Di Dalam Database

$santri = query('SELECT * FROM santri');



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Data Santri</h1>
    <div class="container">
    <table class="table table-striped" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nik</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    <?php $i=1;
     foreach($santri as $row) : ?>
        <tr>
            <td><?= $i++ ;?></td>
            <td><?= $row['nama'] ;?></td>
            <td><?= $row['nik'] ;?></td>
            <td><?= $row['email'] ;?></td>
            <td><a href="detail.php?id=<?= $row['id'] ?>" class="btn btn-info m-auto">Detail</a></td>
        </tr>
    <?php endforeach ; ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>