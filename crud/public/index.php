<?php
require_once "../app/database.php";
use App\Database;


$db = new Database();

$title = "simple php crud application";

$all_data = $db->getData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title> <?php echo $title  ?> </title>
</head>
<body>
    <div class="container">
        <h2 class = "my-5 text-center"> <?php echo $title  ?> </h2>
        <table class="table">
            <head>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Dob</th>
                    <th>Actions</th>
                </tr>
            </head>
            <tbody>
                <?php foreach($all_data as $data): ?>
                <tr>
                    <td><?php echo $data['name']  ?></td>
                    <td><?php echo $data['email']  ?></td>
                    <td><?php echo $data['dob'] ?></td>
                    <td>
                        <a href="add_edit.php?id=<?php echo $data['id']; ?>" class = "btn btn-primary">Edit</a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>" class = "btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php  endforeach; ?>
            </tbody>
        </table>
        <a href="add_edit.php" class="class = btn btn-success">add detail</a>

       
</body>
</html>