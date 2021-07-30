<?php 
require_once './core/Database.php';
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="./bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="main.css/webapp.css">
    <script src="https://kit.fontawesome.com/5486a65918.js" crossorigin="anonymous"></script>

    <title>Compatibility</title>

</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-default">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> C_C; </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="learn.php">Learn</a>
                    </li>



                    <?php  if(!$_SESSION['user']) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log In</a>
                    </li>
                    <?php }else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Welcome
                            <?php echo $_SESSION['user']['first_name']; ?> (Logout)

                        </a>
                    </li>
                    <?php } ?>

                    <li class="nav-item">
                        <a class="nav-link" href="admindash.php">admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="compatibility.php">Compatibility</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>