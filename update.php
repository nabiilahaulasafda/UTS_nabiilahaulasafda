<?php

include("koneksi.php");

$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun'];
$kategori = $_POST['kategori'];

$sunting ="UPDATE bukus SET judul='$judul', pengarang='$pengarang', tahun='$tahun', kategori='$kategori' WHERE id='$id'";

$proses = mysqli_query($koneksi, $sunting);

?>

<script>
    document.location="index.php";
</script>
