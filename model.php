<?php
include "connection.php";

class Model extends Connection
{
    var $baris;
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function show()
    {
        $sql  = "SELECT * FROM `students` ORDER BY id DESC";
        $koneksi = $this->conn->query($sql);
        while ($student = $koneksi->fetch_object()) {
            $baris[] = $student;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function insert($name, $email, $mobile)
    {
        $sql  = "INSERT INTO students(name, email, mobile) 
                    VALUES ('$name', '$email', '$mobile')";
        $this->conn->query($sql);
    }

    public function edit($id)
    {
        $sql  = "SELECT * FROM `students` WHERE id=$id";
        $koneksi = $this->conn->query($sql);
        while ($student = $koneksi->fetch_object()) {
            $baris = $student;
        }
        return $baris;
    }

    public function update($name, $email, $mobile, $id)
    {
        $sql  = "UPDATE `students` SET name='$name', email='$email',mobile='$mobile' WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function destroy($id)
    {
        $sql  = "DELETE FROM students WHERE id=$id";
        $this->conn->query($sql);
    }
}
