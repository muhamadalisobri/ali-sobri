<?php  
include "koneksi.php";  
mysqli_query($coon, "UPDATE tb_skema SET 
kd_skema = '$_POST[kd_skema]', 
nm_skema = '$_POST[nm_skema]', 
jenis = '$_POST[jenis]', 
jml_unit = '$_POST[jml_unit]',
tahun = '$_POST[tahun]'
where id_skema = '$_POST[id]' 
") or die (mysqli_error()); 
echo "Data Berhasil Di Edit"; 
echo "<meta http-equiv='refresh' content='1; url=home1.php'>"; 
?> 