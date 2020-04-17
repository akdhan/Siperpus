<?php 

include '../koneksi.php';
include '../aset/header.php';

$id = $_GET["id_anggota"];

$query = mysqli_query($kon, "SELECT * FROM anggota WHERE id_anggota = '$id'");
$anggota    = mysqli_fetch_assoc($query);

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "UPDATE anggota SET
            nama = '$nama',
            kelas  = '$kelas',
            telp = '$telp',
            username = '$username',
            password = '$password',
            WHERE id_anggota = '$id'
            ";

    $res = mysqli_query($kon, $sql);

    $count = mysqli_affected_rows($kon);

    var_dump($count);
         
    if($count==1){
        echo "<script>
                alert('Data Berhasil Diubah'); 
                document.location.href='index.php';
              </script>";
        
    }
    else{
        echo "<script>
        alert('Data Gagal Diubah'); 
        document.location.href='edit.php';
      </script>";
    }
}
?>

<div class="container">
 <div class="row mt-4">
  <div class="col-md-9">
   <div class="card">
    <div class="card-header">
    <h2>Edit Data Anggota</h2>
    </div>
    <div class="card-body">
         <form method="post" action="">

                <div class="form-group">
                 <label for="anggota">Nama</label>
                 <input type="text" class="form-control" name="nama" id="nama"  value="<?= $anggota['nama']?>">
                </div>

                <div class="form-group">
                 <label for="anggota">Kelas</label>
                 <input type="text" class="form-control" name="kelas" id="kelas"   value="<?= $anggota['kelas']?>">
                </div>  

                <div class="form-group">
                 <label for="anggota">Telephon</label>
                 <input type="text" class="form-control" name="telp" id="telp"  value="<?= $anggota['telp']?>">
                </div>

                <div class="form-group">
                 <label for="anggota">Username</label>
                 <input type="text" name="username" id="username" class="form-control" placeholder="<?= $anggota['username']?>">
                </div>

                <div class="form-group">
                 <label for="anggota">Password</label>
                 <input type="text" name="password" id="password" class="form-control" value="<?= $anggota['password']?>"> 
                 </div>
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
         </form>        
    </div>
   </div>
  </div>
 </div>
</div>    

<?php

include '../aset/footer.php';

?>