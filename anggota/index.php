<?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama";

$res = mysqli_query($kon, $sql);

$pinjam = array();
	
while ($data = mysqli_fetch_assoc($res)){
	$pinjam[] = $data;
}
?>

<?php 
include '../aset/header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SiPERPUS</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			
		</div>
	</div>
</div>
<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-user"></i> Anggota</h2>
          <button type="submit" class="btn btn-warning"><a href="tambah.php"><i class="fas fa-user-plus"></i>   Tambah --> </a></button>
    </div>
    <div class="card-body">
    	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Telephon</th>
      <th scope="col">Username</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach ($pinjam as $p ) { ?>
    	<tr>
    		<th scope="row"><?= $no ?></th>
    		<td><?=	$p['nama']?></td>
    		<td><?=	$p['kelas']?></td>
        <td><?= $p['telp']?></td>
        <td><?= $p['username']?></td>
    		<td>
    			<a href="detail.php?id_anggota=<?= $p["id_anggota"];?>  " class="badge badge-success">Detail</a>
    			<a href="edit.php?id_anggota=<?= $p["id_anggota"];?>  " class="badge badge-warning">Edit</a>
				  <a href="hapus.php?id_anggota=<?= $p["id_anggota"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
    		</td>
    	</tr>
   <?php 
    $no++;
    }
   ?>
  </tbody>
</table>
    </div>
</div>
</body>
</html>
 <?php 
include '../aset/footer.php';
 ?>