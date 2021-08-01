<?php
include_once './layouts/main/header.php';

require_once './core/Database.php';

if ($_SERVER['REQUEST_METHOD'] =='POST'){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$errors = array();

if(!strcmp($password,$confirm_password) == 0){
      $errors['confirm_password'] = "PASSWORD MISMATCH!!!"; } 

else {
     $password = password_hash ($password,PASSWORD_DEFAULT);
}


if(!$errors){
      $statement = "INSERT INTO user( first_name,last_name,email,password) values (?,?,?,?)";
      $data = array ( $first_name, $last_name, $email, $password);
      $query = $db -> prepare ($statement);
      $query -> execute($data);
      header("location: login.php");
     exit();

}
}
?>

<main class="container-fluid bg-img">
    <div class="row mt-5">
        <div class="col-6 m-auto card shadow">
            <h1 class="text-center">Create an account</h1>
            <form action="" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>



                </div>

                <div class="mb-3">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>

                </div>

                <div class="mb-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>

                </div>
                <div class="mb-3">
                    <label for="password">Input Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>

                </div>
                <div class="mb-3">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>

                </div>
                <div class="mb-3">
                    <input type="submit" class="ms-auto btn-lg btn-primary" value="Join us" name="submit">

                </div>

            </form>
</main>

<?php

include_once "./layouts/main/footer.php";

?>