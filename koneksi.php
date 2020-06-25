<?php

class koneksi
{
    public $server = "localhost";
    public $user = "root";
    public $pass = "";
    public $db = "crud";
    public $con = "";

    public function __construct()
    {
        $this->con = mysqli_connect($this->server, $this->user, $this->pass, $this->db);
        if (mysqli_connect_errno()) {
            echo "Koneksi gagal " . mysqli_connect_error();
        }
    }

    public function tampil_data()
    {
        $sql = "SELECT * FROM tb_barang";
        $data = mysqli_query($this->con, $sql);
        if (!$data) {
            die('Query error function data : ' . mysqli_errno($this->con) . ' - ' . mysqli_error($this->con));
        }
        $hasil = [];
        while ($row = mysqli_fetch_assoc($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    // tambah data
    public function tambah_data($nama_barang, $stok, $harga_beli, $harga_jual)
    {
        $sql = "INSERT INTO tb_barang (nama_barang, stok, harga_beli, harga_jual) VALUES ('$nama_barang', '$stok', '$harga_beli', '$harga_jual')";
        $result = mysqli_query($this->con, $sql);
        if (!$result) {
            die('Query error : ' . mysqli_errno($this->con) . ' - ' . mysqli_error($this->con));
        }
        return $result;
    }

    // manggil data
    public function get_by_id($id_barang)
    {
        $sql = "SELECT * FROM tb_barang WHERE id = '$id_barang'";
        $query = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        return $query->fetch_array();
    }

    // update data
    public function update_data($nama_barang, $stok, $harga_beli, $harga_jual, $id_barang)
    {
        $query = mysqli_query($this->con, "UPDATE tb_barang SET nama_barang='$nama_barang', stok='$stok', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id='$id_barang'");
    }

    // delete data
    public function delete_data($id_barang)
    {
        $query = mysqli_query($this->con, "DELETE from tb_barang where id='$id_barang'");
    }
}