<?php

require_once "db_connect.php";

$tampil = new Databases();

$d = $tampil->tampil_data();

?>

<!doctype html>
<html lang="en">

<head>
    <title>Tampil Data OOP PHP 7</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h5 class="text-center my-5">Tampil Data OOP Programming PHP 7</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>FisrtName</th>
                        <th>LastName</th>
                        <th>Username</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($d as $data) :
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['firstname']; ?></td>
                            <td><?= $data['lastname']; ?></td>
                            <td><?= $data['username']; ?></td>
                            <td>
                                <!-- <a href="edit_data.php?id=<?= $data['id']; ?>" class="btn btn-sm btn-danger">Edit</a> -->
                                <a href="edit_data.php?action=edit&id=<?= $data['id']; ?>" class="btn btn-sm btn-danger">Edit</a>
                                <a href="proses_get.php?action=delete&id=<?= $data['id']; ?>" class="btn btn-sm btn-warning">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
</body>

</html>