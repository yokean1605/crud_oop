<?php

    require 'koneksi.php';
    $barang = new koneksi();
    $data_barang = $barang->tampil_data();
    $no = 1;
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Tampil Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="mt-5">
            <a class="btn btn-primary mb-3" href="tambah-data.php">+ Tambah Data</a>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Barang</th>
                        <th>Stok</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data_barang as $row) :
                    ?>
                        <tr>
                            <td class="text-center">
                                <?=$no++?>
                            </td>
                            <td>
                                <?=$row['nama_barang']?>
                            </td>
                            <td class="text-center">
                                <?=$row['stok']?>
                            </td>
                            <td>
                                <?=$row['harga_beli']?>
                            </td>
                            <td>
                                <?=$row['harga_jual']?>
                            </td>
                            <td>
                                <a href="proses-barang.php?action=delete&id=<?=$row['id']?>" class="btn btn-sm btn-danger">Delete</a>
                                <a href="edit-data.php?id=<?=$row['id']?>" class="btn btn-sm btn-warning">Update</a>
                            </td>
                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>