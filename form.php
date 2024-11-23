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
                <label for="validationCustom01" class="form-label"> Judul Buku </label>
                <input type="text" class="form-control" id="" value="" name="judul" required>
                    </div>

                <div class="mb-3">
                <label for="validationCustom01" class="form-label"> Pengarang </label>
                <input type="text" class="form-control" id="" value="" name="pengarang" required>
                    </div>

                <div class="mb-3">
                  <label for="validationCustom01" class="form-label"> Tahun Terbit </label>
                <input type="text" class="form-control" id="" value="" name="tahun" required>
                    </div>

                <div class="mb-3">
                <label for="validationCustom01" class="form-label"> Kategori </label>
                <input type="text" class="form-control" id="" value="" name="kategori" required>
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