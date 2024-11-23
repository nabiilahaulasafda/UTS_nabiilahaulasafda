<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku </title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>

<div class="container">
    <div class="row mt-5">
      <div class="col-8 m-auto">
        <div class="card">
        <div class="card-header bg-dark-subtle">
            <h3 class="float-start"> Daftar Buku </h3>
        </div>

        <div class="card-body">
        <form action="proses.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Judul Buku </label>
                    <input type="text" name="judul" class="form-control" id="">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Pengarang </label>
                    <input type="text" name="pengarang" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Tahun Terbit </label>
                    <input type="text" name="tahun" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Kategori </label>
                    <input type="text" name="kategori" class="form-control" id="">
                </div>
                    <button type="submit" class="btn btn-primary">Add</button>
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