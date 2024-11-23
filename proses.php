<?php

include("koneksi.php");

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun'];
$kategori = $_POST['kategori'];

$simpan = "INSERT INTO bukus (judul,pengarang,tahun,kategori) VALUES ('$judul','$pengarang','$tahun','$kategori')";

$proses = mysqli_query($koneksi, $simpan);

?>

<script>
    document.location="index.php";
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data jurusan </title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>

<div class="container">
    <div class="row mt-5">
      <div class="col-8 m-auto">
        <div class="card">
        <div class="card-header bg-dark-subtle">
            <h3 class="float-start"> DAFTAR BUKU </h3>
        </div>

        <div class="card-body">
        <div class="card-body">
            <table class="table">

              <tbody>
                <tr>
                  <td scope="row"> Judul Buku </td>
                  <th>: <?= $judul ?> </th>
                </tr>
                <tr>
                  <td scope="row"> Pengarang </td>
                  <th>: <?= $pengarang ?> </th>
                </tr>
                <tr>
                  <td scope="row"> Tahun Terbit </td>
                  <th>: <?= $tahun ?> </th>
                </tr>
                <tr>
                  <td scope="row"> Kategori </td>
                  <th>: <?= $kategori ?> </th>
                </tr>

              </tbody>

            </table>
            <a href="form.php" class="btn btn-warning btn-sm">Kembali</a>
          </div>
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