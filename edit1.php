<!doctype html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Data Sertifikasi</title> 
    <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M
 2HN" crossorigin="anonymous"> 
  </head> 
  <body> 
 
   <?php  
   include "koneksi.php"; 
 
   $sql = mysqli_query($coon, "select * from tb_skema where id_skema = 
'$_GET[id]'") or die(mysqli_error($coon)); 
    $data=mysqli_fetch_array($sql); 
    ?> 
 
<form name="edit" method="post" action="edit_proses1.php"> 
 <input type="hidden" name="id"  
 value="<?php echo $data['id_skema']; ?>"> 
  <div class="container"> 
    <h1>Edit skema</h1> 
  <div class="mb-3"> 
        <label for="exampleInputEmail1" class="form-label">Kd Skema</label> 
        <input type="text" class="form-control" name="kd_skema" value="<?php echo $data['kd_skema']; ?>"> 
    </div> 
    <div class="mb-3"> 
        <label for="exampleInputPassword1" class="form-label">Nm Skema</label> 
        <input type="text" class="form-control" name="nm_skema" value="<?php echo $data['nm_skema']; ?>"> 
    </div> 
    <div class="mb-3"> 
        <label for="exampleInputPassword1" class="form-label">Jenis</label> 
        <input type="text" class="form-control" name="jenis" value="<?php echo $data['jenis']; ?>"> 
    </div> 
    <div class="mb-3"> 
        <label for="exampleInputPassword1" class="form-label">Jumlah unit</label> 
        <input type="text" class="form-control" name="jml_unit" value="<?php echo $data['jml_unit']; ?>"> 
    </div> 
    <div class="mb-3"> 
        <label for="exampleInputPassword1" class="form-label">Tahun</label> 
        <input type="text" class="form-control" name="tahun" value="<?php echo $data['tahun']; ?>"> 
    </div> 
        <button type="submit" name="edit" class="btn btn-primary">Submit</button> 
    </div> 
</form> 
</body> 
<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384
C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46c
 DfL" crossorigin="anonymous"></script> 
</body> 
</html>