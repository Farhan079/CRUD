<?php
require_once "../App/database.php";
use App\Database;

$db = new Database();
$title = "Simple PHP CRUD Application";
$all_data = $db->getData();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Document</title>


    </head>

    <body>
        <div class="container">
            <p class="lead my-5 text-center">
                <?php echo $title ?>
            </p>
            <table class="table table-bordered border-primary table-sm">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Of Birth</th>
                        <th>Buttons</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($all_data as $data): ?>
                        <tr>
                            <td>
                                <?php echo $data['name'] ?>
                            </td>
                            <td>
                                <?php echo $data['email'] ?>
                            </td>
                            <td>
                                <?php echo $data['dob'] ?>
                            </td>
                            <td>
                                <a href="add_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-success">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="add_edit.php" class="btn btn-dark">Add Data</a>

        </div>
    </body>

</html>