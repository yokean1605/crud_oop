<?php

require "db_connect.php";

$id = $_GET['id'];

$tampil = new Databases();

$row = $tampil->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data PHP OOP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="col-5 mx-auto border p-3 bg-light">
            <h4 class="text-center">Edit Data</h4>
            <form action="proses_get.php?action=update" method="post">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                <div class="form-group">
                    <label for="nm1">Nama Pertama</label>
                    <input type="text" class="form-control" name="fisrtName" id="nm1" placeholder="Masukan nama pertama" value="<?= $row['firstname']; ?>">
                </div>
                <div class="form-group">
                    <label for="nm2">Nama Terakhir</label>
                    <input type="text" class="form-control" name="lastName" id="nm2" placeholder="Masukan nama terakhir" value="<?= $row['lastname']; ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan username" value="<?= $row['username']; ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>