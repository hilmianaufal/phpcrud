<?php

function koneksi(){
   return mysqli_connect('localhost','root','','phpcrud');
}

function query($query){
    $conn=koneksi();
    $result = mysqli_query($conn,$query);
    $rows = [];
 while($snt = mysqli_fetch_assoc($result)){
    $rows[]=$snt;

 }
 return $rows;
}

function tambah($data){
   $conn= koneksi();
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $nik = $_POST['nik'];
   $asal = $_POST['asal'];
   $nohp = $_POST['asal'];
   $query = "INSERT INTO santri (nama,email,nik,asal,nohp) VALUES 
               ('$nama','$email','$nik','$asal','$nohp')";
   mysqli_query($conn, $query);
   return mysqli_affected_rows($conn);
}