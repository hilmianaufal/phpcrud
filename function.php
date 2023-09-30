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

function edit($data){
   $conn = koneksi();
   $id = $_GET['id'];
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $nik = $_POST['nik'];
   $asal = $_POST['asal'];
   $nohp = $_POST['asal'];
   $query = "UPDATE santri SET 
            nama='$nama',
            email='$email',
            nik='$nik',
            asal='$asal',
            nohp='$nohp'
         WHERE id=$id         
               ";
   mysqli_query($conn, $query);
   return mysqli_affected_rows($conn);
}


function hapus($id){
$conn = koneksi();
mysqli_query($conn,"DELETE FROM santri WHERE id=$id") or die( mysqli_error($conn));
return mysqli_affected_rows($conn);

}