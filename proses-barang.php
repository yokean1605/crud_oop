<?php

    include 'koneksi.php';
    $k = new koneksi();

    // menangkap get 
    $action = $_GET["action"];
    if($action == "add")
    {
        $k -> tambah_data($_POST['nama_barang'], $_POST['stok'], $_POST['harga_jual'], $_POST['harga_beli']);
        header("location:tampil_data.php");
    }elseif($action == "update")
    {
        $k -> update_data($_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual'], $_POST['id_barang']);
        header("location:tampil_data.php");
    }elseif($action == "delete")
    {
        $id_barang = $_GET['id'];
        $k -> delete_data($id_barang);
        header("location:tampil_data.php");
    }

?>