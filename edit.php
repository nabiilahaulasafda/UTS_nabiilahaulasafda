<?php
include("koneksi.php");

$id = $_GET['id'];

$ambil = "SELECT * FROM bukus WHERE id='$id'";

$edit = mysqli_query($koneksi, $ambil);

$data = mysqli_fetch_array($edit); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Daftar Buku </title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>

<div class="container">
    <div class="row mt-5">
      <div class="col-8 m-auto">
        <div class="card">
        <div class="card-header bg-dark-subtle">
            <h3 class="float-start"> Edit Daftar Buku </h3>
        </div>

        <div class="card-body">
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?=$data['id']?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Judul Buku </label>
                    <input type="text" readonly value="<?=$data['judul']?>" name="judul" class="form-control" id="">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Pengarang </label>
                    <input type="text" value="<?=$data['pengarang']?>" name="pengarang" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Tahun Terbit </label>
                    <input type="text" value="<?=$data['tahun']?>" name="tahun" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Kategori </label>
                    <input type="text" value="<?=$data['kategori']?>" name="kategori" class="form-control" id="">
                </div>
                    <button type="submit" class="btn btn-primary">update</button>
        </form>
        </div>
        </div>
      </div>
    </div>
  </div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>