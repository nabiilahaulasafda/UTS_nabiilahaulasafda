<?php

include("koneksi.php");

$id = $_GET['nbs'];

$hapus = "DELETE FROM bukus WHERE id='$id' ";

$proses = mysqli_query($koneksi, $hapus);

?>

<script>
    document.location="index.php";
</script>

