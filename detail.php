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
    <title>Detail Data Santri</title>
</head>
<body>

    <ul>
        <li>Nama : <?= $san ['nama'] ?> </li>
        <li>Nama : <?= $san ['nik'] ?> </li>
        <li>Nama : <?= $san ['email'] ?> </li>
        <li>Nama : <?= $san ['asal'] ?> </li>
        <li>Nama : <?= $san ['nohp'] ?> </li>
    </ul>

</body>
</html>