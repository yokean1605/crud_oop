<?php
    include('koneksi.php');
    $k = new koneksi();
    
    $id_barang = $_GET["id"];
    // echo $id_barang;
    if(! is_null($id_barang))
    {
        $data_barang = $k->get_by_id($id_barang);
    }else {
        header('location:tampil_data.php');
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Edit Data | PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="col-7">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3 font-weight-bold">Tambah Data</h5>
                    <hr>
                    <form action="proses-barang.php?action=update" method="post">
                        <input type="hidden" name="id_barang" value="<?=$data_barang['id']?>">
                        <div class="form-group">
                            <label for="nama-barang">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama-barang" class="form-control" placeholder="" value="<?=$data_barang['nama_barang']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" name="stok" id="stok" class="form-control" placeholder="" value="<?=$data_barang['stok']?>">
                        </div>
                        <div class="form-group">
                            <label for="hj">Harga Jual</label>
                            <input type="text" name="harga_jual" id="hj" class="form-control" placeholder="" value="<?=$data_barang['harga_jual']?>">
                        </div>
                        <div class="form-group">
                            <label for="hb">Harga Beli</label>
                            <input type="text" name="harga_beli" id="hb" class="form-control" placeholder="" value="<?=$data_barang['harga_beli']?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>