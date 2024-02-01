<!doctype html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Data Peserta</title> 
    <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M
 2HN" crossorigin="anonymous"> 
  </head> 
  <body> 
 
   <?php  
   include "koneksi.php"; 
 
   $sql = mysqli_query($coon, "select * from tb_peserta where id_peserta = 
'$_GET[id]'") or die(mysqli_error($coon)); 
    $data=mysqli_fetch_array($sql); 
    ?> 
 
<form name="edit" method="post" action="edit_proses.php"> 
 <input type="hidden" name="id"  
 value="<?php echo $data['id_peserta']; ?>"> 
  <div class="container"> 
    <h1>Edit peserta</h1> 
    <div class="mb-3"> 
        <label for="exampleInputEmail1" class="form-label">Kd Skema</label> 
        <input type="text" class="form-control" name="kd_skema" value="<?php echo $data['kd_skema']; ?>"> 
    </div> 
    <div class="mb-3"> 
        <label for="exampleInputPassword1" class="form-label">Nm Peserta</label> 
        <input type="text" class="form-control" name="nm_peserta" value="<?php echo $data['nm_peserta']; ?>"> 
    </div> 
    <div class="mb-3"> 
        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label> 
        <input type="text" class="form-control" name="jekel" value="<?php echo $data['jekel']; ?>"> 
    </div> 
    <div class="mb-3"> 
        <label for="exampleInputPassword1" class="form-label">Alamat</label> 
        <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>"> 
    </div> 
        <label for="exampleInputPassword1" class="form-label">No hp</label> 
        <input type="text" class="form-control" name="no_hp" value="<?php echo $data['no_hp']; ?>"> 
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