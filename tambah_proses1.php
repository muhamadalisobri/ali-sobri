<?php  
include "koneksi.php";  
   mysqli_query($coon, "INSERT INTO tb_skema SET 
   kd_skema = '$_POST[kd_skema]', 
   nm_skema = '$_POST[nm_skema]', 
   jenis = '$_POST[jenis]', 
   jml_unit = '$_POST[jml_unit]',
   tahun = '$_POST[tahun]'
   ") or die (mysqli_error()); 
 
  echo "Data Berhasil Ditambahkan"; 
  echo "<meta http-equiv='refresh' content='1; url=home1.php'>"; 
 ?> 
