<?php

include '../koneksi.php';

include '../aset/header.php';

$id = $_GET['id_anggota'];

$query = mysqli_query($kon, "SELECT * FROM anggota WHERE anggota.id_anggota = '$id' ");
$anggota    = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h2 class="card-title">Detail Anggota</h2>
                
            </div>
            <div class="card-body">

                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td><?= $anggota['id_anggota']?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?= $anggota['nama']?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td><?= $anggota['kelas']?></td>
                    </tr>
                    <tr>
                        <td>Telephon</td>
                        <td><?= $anggota['telp']?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><?= $anggota['username']?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><?= $anggota['password']?></td>
                    </tr>
                        <td>Aksi</td>     
                        <td>
                           <a href="edit.php?id_anggota=<?= $anggota["id_anggota"];?>  " class="badge badge-warning">Edit</a>
                           <a href="hapus.php?id_anggota=<?= $anggota["id_anggota"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
                        </td>
                     </tr>
                </table>
                            </div>
                            </div>
</body>
</html>

<?php

include '../aset/footer.php';

?>