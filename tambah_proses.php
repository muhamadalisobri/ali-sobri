<?php  
include "koneksi.php";  
   mysqli_query($coon, "INSERT INTO tb_peserta SET 
   kd_skema = '$_POST[kd_skema]', 
   nm_peserta = '$_POST[nm_peserta]', 
   jekel = '$_POST[jekel]', 
   alamat = '$_POST[alamat]',
   no_hp = '$_POST[no_hp]' 
   ") or die (mysqli_error()); 
 
  echo "Data Berhasil Ditambahkan"; 
  echo "<meta http-equiv='refresh' content='1; url=home.php'>"; 
 ?> 