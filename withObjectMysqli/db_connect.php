<?php

class Databases
{

    // set connection variables
    public $server = "localhost";
    public $user = "root";
    public $pass = "";
    public $db_name = "crud_oop";

    public $mysqli = "";

    function __construct()
    {
        // connect to mysql server
        $this->mysqli = new mysqli($this->server, $this->user, $this->pass, $this->db_name);
        // check if any connection was encoured
        if (!$this->mysqli) {
            die("Tidak dapat konek ke database " . mysqli_connect_error($this->mysqli));
        }
    }

    public function tampil_data()
    {
        // query sql tampil data
        $query = "SELECT * FROM users ORDER BY id DESC";
        $result = $this->mysqli->query($query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function tambah_data($firstname, $lastname, $username)
    {
        $firstname = htmlspecialchars($firstname);
        $lastname = htmlspecialchars($lastname);
        $username = strtolower(stripslashes($username));

        $query = "INSERT INTO users (firstname, lastname, username, sandi) VALUES('$firstname', '$lastname', '$username')";

        $result = $this->mysqli->query($query);
        if (!$result) {
            die("Query error : " . $query . "<br/>" . $this->mysqli->error);
        }
        return $result;
    }

    public function update_data($firstname, $lastname, $username, $id)
    {
        $query = "UPDATE users SET firstName='$firstname', lastName='$lastname', username='$username' WHERE id='$id'";
        $result = $this->mysqli->query($query);
        if (!$result) {
            die("Query error : " . $query . "<br/>" . $this->mysqli->error);
        }
        return $result;
    }

    public function edit($id)
    {
        $query = "SELECT * FROM users WHERE id='$id'";
        $result = $this->mysqli->query($query);
        return $result->fetch_assoc();
    }

    public function delete_data($id)
    {
        $query = "DELETE FROM users WHERE id='$id'";
        $result = $this->mysqli->query($query);
        return $result;
    }
}
