<?php

require 'function.php';

$id= $_GET['id'];
if(hapus($id)>0){
    echo '<div class="alert alert alert-primary" role="alert">
    Data Berhasil Di Hapus !
  </div><script>document.location.href="index.php" </script>';
}else{
    echo '<div class="alert alert alert-primary" role="alert">
    Data Gagal Di Hapus !
  </div><script>document.location.href="index.php" </script>';
}