<?php
require_once "../app/database.php";

use App\Database;
$db = new Database();

$title = "Add/Edit your data";

if($_POST){
  $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    if($id){
      $db->updateData($id, $name, $email, $dob);
    }else{
      $db->addData($name, $email, $dob);
    }
    header("Location: index.php");

}
$id = $_GET['id'] ?? null;

if($id){
  $id_data = $db->getID($id);
}else{
  $id_data = array();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title> <?php echo $titile  ?> </title>
</head>
<body>
<div class="container">
        <h2 class = "my-5 text-center"> <?php echo $title  ?> </h2>
        <form method="post">
        <div class="mb-3">
    <label for="name" class="form-label"><b>Name</label>
    <input type="text" id="name" name="name" class="form-control" placeholder="enter your name" id="exampleInputPassword1" value="<?php echo $id_data['name'] ?? null; ?>">
  </div>
   <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="enter your email" id="exampleInputPassword1" value="<?php echo $id_data['email'] ?? null; ?>">
  </div>
  <div class="mb-3">
    <label for="dob" class="form-label">DOB</label>
    <input type="date" id="dob" name="dob" class="form-control" placeholder="enter your DOB" id="exampleInputPassword1" >
  </div>
  <input type="hidden" name="id" value="<?php echo $id ?>">
  <button type="submit" class="btn btn-success">save</button>
        <button type="submit" class="btn btn-danger">cancel</button>
        </form>
        
    </div>


        </body>
</html>