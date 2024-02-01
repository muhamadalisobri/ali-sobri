<?php 
include "koneksi.php"; 
mysqli_query($coon,"delete from tb_skema where 
id_skema='$_GET[id]'") or die(mysqli_error($coon)); 
echo "Data Berhasil Dihapus"; 
echo "<meta http-equiv='refresh' content='1; url=home1.php'>"; 
?> 