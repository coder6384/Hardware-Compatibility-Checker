<?php
include_once "./layouts/main/header.php";
require_once './core/Database.php'; 
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        try{
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            // execute query
            $STH = $db->prepare("SELECT * FROM user WHERE email=?");
            $data = array($email);
            $STH->execute($data);

            //check if email exists
            $rows_affected = $STH->rowCount();
            if ($rows_affected == 1){
                $row = $STH->fetch();
                $pass = $row['password'];
                
                //Check if password is correct
                if(password_verify($password,$pass))
                {
                    $_SESSION['success'] = "Login Successfull";
                    $_SESSION['user'] = $row;

                    unset($email);
                    unset($password);

                    //check if the logged in user is a staff
                    $row['is_staff']  || $row['is_super_admin'] ? 
                    header("location: admindash.php"):header("location: index.php");                
                }
                else 
                $_SESSION['error'] = "Incorrect Password";
            }
            else 
            $_SESSION['error'] = "Email does not exist";            
        }

        catch(PDOException $e){
            $_SESSION['error'] = "I'm afraid I can't Log you in at the moment.";
            file_put_contents('PDOErrors.txt',"\n". date('Y-m-d H:i:s').'] - '.$e->getMessage(), FILE_APPEND); # log errors to afile
        }
    }
?>

<main class="container-fluid">
    <div class="row mt-5">
        <div class="col-6 m-auto card shadow">

            <h1 class="text-center">Login to continue</h1>

            <div id="alert">
                <?php require_once "./feedback.php"; ?>
            </div>
            <form action="" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>

                </div>
                <div class="mb-3">
                    <label for="password">Input Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>


                </div>
                <div class="mb-3">
                    <a class="nav-link" href="admindash.php">login</a>
                    <input type="submit" class="ms-auto btn btn-lg btn-primary" value="Enter" name="submit">

                </div>

            </form>
        </div>
    </div>
</main>


<?php

include_once "./layouts/main/footer.php";

?>