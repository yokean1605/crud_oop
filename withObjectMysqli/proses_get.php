<?php

require 'db_connect.php';

$con = new Databases();

$action = $_GET["action"];

if ($action === "add") {
    $con->tambah_data($_POST['fisrtName'], $_POST["lastName"], $_POST["username"]);
    header("location:tampil_data.php");
} elseif ($action === "update") {
    $con->update_data($_POST['fisrtName'], $_POST["lastName"], $_POST["username"], $_POST['id']);
    header("location:tampil_data.php");
} elseif ($action === "delete") {
    $id = $_GET["id"];
    $con->delete_data($id);
    header("location:tampil_data.php");
}
