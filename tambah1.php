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
<form name="tambah1" method="post" action="tambah_proses1.php" 
enctype="multipart/form-data"> 
<div class="container"> 
<h1>Tambah Skema</h1> 
<div class="mb-3"> 
<label class="form-label">Kd Skema</label> 
<input type="text" class="form-control" name="kd_skema" > 
</div> 
<div class="mb-3"> 
<label class="form-label">Nama skema</label> 
<input type="text" class="form-control" name="nm_skema"> 
</div> 
<div class="mb-3"> 
<label class="form-label">Jenis</label> 
<input type="text" class="form-control" name="jenis"> 
</div> 
<div class="mb-3"> 
<label class="form-label">Jumlah Unit</label> 
<input type="text" class="form-control" name="jml_unit"> 
</div> 
<div class="mb-3"> 
<label class="form-label">Tahun</label> 
<input type="text" class="form-control" name="tahun"> 
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