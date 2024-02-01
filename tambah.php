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
<form name="tambah" method="post" action="tambah_proses.php" 
enctype="multipart/form-data"> 
<div class="container"> 
<h1>Tambah Peserta</h1> 
<div class="mb-3"> 
<label class="form-label">Kd Skema</label> 
<input type="text" class="form-control" name="kd_skema" > 
</div> 
<div class="mb-3"> 
<label class="form-label">Nama Peserta</label> 
<input type="text" class="form-control" name="nm_peserta"> 
</div> 
<div class="mb-3"> 
<label class="form-label">Jenis Kelamin</label> 
<input type="text" class="form-control" name="jekel"> 
</div> 
<div class="mb-3"> 
<label class="form-label">Alamat</label> 
<input type="text" class="form-control" name="alamat"> 
</div> 
<div class="mb-3"> 
<label class="form-label">No Hp</label> 
<input type="text" class="form-control" name="no_hp"> 
</div> 
<button type="submit" name="tambah" class="btn btn-primary">Submit</button> 
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