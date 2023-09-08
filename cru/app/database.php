<?php
namespace App;

class Database
{
    private $con;

    public function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "", "crud");
    }

    // Create Data
    public function getData()
    {
        $query = "SELECT * FROM user_data";
        $result = mysqli_query($this->con, $query);
        $all_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $all_data;
    }


    // Add Data

    public function addData($name, $email, $dob)
    {
        $query = "INSERT INTO user_data(name, email, dob) 
            VALUES('$name', '$email', '$dob')";
        mysqli_query($this->con, $query);
    }

    // Update Data 
    // Geting Data From ID
    public function getID($id)
    {
        $query = "SELECT * FROM user_data WHERE id= $id";
        $result = mysqli_query($this->con, $query);
        $id_data = mysqli_fetch_assoc($result);
        return $id_data;
    }

    // Update Data
    public function updateData($id, $name, $email, $dob)
    {
        $query = "UPDATE user_data 
            SET name = '$name',
            email = '$email',
            dob = '$dob' 
            WHERE id = $id";
        mysqli_query($this->con, $query);
    }

}
?>