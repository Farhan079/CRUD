<?php
namespace App;

class Database{
    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost","root","","crud" );
    }
    // read data

    public function getData(){
        $qry = "SELECT * FROM user_data";
        $rslt = mysqli_query($this->conn, $qry);
        $all_data = mysqli_fetch_all($rslt, MYSQLI_ASSOC);
        return $all_data;
    }

    // create data
    public function addData($name, $email, $dob){
        $qry = "INSERT INTO user_data(name, email, dob) VALUES
        ('$name', '$email', '$dob')";
        mysqli_query($this->conn, $qry);
    }

    // update data

    public function getID($id)
    {
        $qry = "SELECT * FROM user_data WHERE id=$id";
        $rslt = mysqli_query($this->conn, $qry);
        $id_Data = mysqli_fetch_assoc($rslt);
        return $id_Data;

    }

    // step-2 update Data

    public function updateData($id, $name, $email, $dob)
    {
        $qry = "UPDATE user_data
        SET
        name = '$name',
        email = '$email',
        dob = '$dob'
        WHERE id = $id";
        mysqli_query($this->conn, $qry);

    }
    public function delData($id){
        $qry = "DELETE FROM user_data where id = $id";
        mysqli_query($this->conn, $qry);

    }
}
?>