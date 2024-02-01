<?php  
include "koneksi.php";  
mysqli_query($coon, "UPDATE tb_peserta SET 
kd_skema = '$_POST[kd_skema]', 
nm_peserta = '$_POST[nm_peserta]', 
jekel = '$_POST[jekel]', 
alamat = '$_POST[alamat]',
no_hp = '$_POST[no_hp]'
where id_peserta = '$_POST[id]' 
") or die (mysqli_error()); 
echo "Data Berhasil Di Edit"; 
echo "<meta http-equiv='refresh' content='1; url=home.php'>"; 
?> 