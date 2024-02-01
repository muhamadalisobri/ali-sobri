<!doctype html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Data Peserta</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 

<style>
  body {
  display: flex;
  background-color: #FFA500; /* Warna oranye untuk latar belakang body */
}

.sidebar {
  height: 100vh;
  width: 200px;
  position: fixed;
  top: 0;
  left: 0;
  background-color: #f8f9fa;
  padding-top: 20px;
}

.container {
  margin-left: 200px; /* Sesuaikan margin untuk memberi ruang pada sidebar */
  flex-grow: 1;
}

.navbar {
  width: 100%;
}

.table thead th {
  background-color: #3498db; /* Warna biru untuk latar belakang header tabel */
}

.form-control {
  background-color: #FFA500; /* Warna oranye untuk latar belakang input pencarian */
}


</style>

</head> 
<body> 
  <div class="sidebar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav flex-column">
          <li class="home.php">
            <a href="home.php" class="btn btn-link text-primary">Peserta</a>
            </li>
            <li class="home1.php">
            <a href="home1.php" class="btn btn-link text-primary">Sertifikasi</a>
            </li>

            </li>
            <!-- Tambahkan link navbar sesuai kebutuhan -->
          </ul>
        </div>
      </div>
    </nav>
  </div>

<div class="container"> 
<h2>Data Sertifikasi</h2> 
    <a href="tambah1.php"> <button type="button" class="btn btn-primary">Tambah Data</button></a> 
        <br/><br/> 
            <form action="home1.php" method="get"> 
            <label>Cari :</label> 
         <input type="text" name="cari" placeholder= "masukan nama perserta" > 
    <input type="submit" value="cari"> 
</form> 
<!--Letak Form Pencarian--> 
<?php  
if(isset($_GET['cari'])){ 
$cari = $_GET['cari']; 
echo "<b>Hasil pencarian : ".$cari."</b>"; 
} 
?> 
<table class="table"> 
<thead> 
<tr> 
<th scope="col">No</th> 
<th scope="col">Kd_Skema</th> 
<th scope="col">Nm_skema</th> 
<th scope="col">Jenis</th> 
<th scope="col">Jumlah Unit</th> 
<th scope="col">Tahun</th>
<th scope="col">Action</th> 
</tr> 
</thead> 
<!--Letak Proses Pencarian--> 
<?php  
include 'koneksi.php'; 
$no=1; 
if(isset($_GET['cari'])){ 
$cari = $_GET['cari']; 
$sql = mysqli_query($coon, "select * from tb_skema where nm_skema like '%".$cari."%' OR tahun LIKE '%".$cari."%'"); 
}else{ 
$sql = mysqli_query($coon,"select * from tb_skema");   
} 
while($data=mysqli_fetch_array($sql)){ 
?> 
<tbody> 
<tr> 
<th scope="row"><?php echo $no; ?></th> 
<td><?php echo $data['kd_skema']; ?></td> 
<td><?php echo $data['nm_skema']; ?></td> 
<td><?php echo $data['jenis']; ?></td> 
<td><?php echo $data['jml_unit']; ?></td> 
<td><?php echo $data['tahun']; ?></td> 
<td> 
<a href="edit1.php?id=<?php echo $data['id_skema']; ?>"><button type="button" 
class="btn btn-warning">Edit</button>  
<a href="delete1.php?id=<?php echo $data['id_skema'] ?>"><button type="button" 
class="btn btn-danger">Hapus</button>   
</td> 
</tr> 
<?php  
$no++; 
} 
?>    
</tbody> 
</table> 
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body> 
</html>
