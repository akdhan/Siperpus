<?php 
include '../aset/header.php';
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>tambah</title>
</head>
<body><center>
<h1><b>Tambah Data Siswa</b></h1><br><br>
<form action="proses-tambah.php" method="post">
<table>
	<input type="hidden" name="">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" required></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td><input type="text" name="kelas" required></td>
	</tr>
	<tr>
		<td>Telephon</td>
		<td><input type="int" name="telp" required></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username" required></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" required></td>
	</tr>
	<tr>
		<td></td>
		<td><button type="submit" class="btn btn-primary" name="simpan">Simpan</button></td>
	</tr>
</table>
</form>
</center>
</body>
</html>

<?php 
include '../aset/footer.php';
 ?>