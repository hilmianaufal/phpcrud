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