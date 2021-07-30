<?php
include_once './layouts/main/header.php';

require_once './core/Database.php';

if ($_SERVER['REQUEST_METHOD'] =='POST'){
$manufacturer = $_POST['manufacturer'];
$model = $_POST['model'];
$storage_type= $_POST['storage_type'];
$ram=$_POST['ram'];
$cpu= $_POST['cpu'];
$charging_pin = $_POST['charging_pin'];




}
?>


<main class="container-fluid">
    <div class="row mt-10">
        <div class="col-7 m-auto card shadow">



            <h1 class=text-center>Parts</h1>
            <form action="" method="post" enctype="multipart/form-data">


                <div class="mb-3">
                    <label for="manufacturer">Manufacturer</label>
                    <input type="manufacturer" class="form-control" id="manufacturer" name="manufacturer" required>
                </div>

                <div class="mb-3">
                    <label for="model">Model</label>
                    <input type="model" class="form-control" id="model" name="model" required>


                </div>

                <div class="mb-3">
                    <label for="hard_disk">Storage type</label>
                    <input type="hard_disk" class="form-control" id="hard_disk" name="hard_disk" required>


                </div>



                <div class="mb-3">
                    <label for="ram">ram</label>
                    <input type="ram" class="form-control" id="ram" name="ram" required>


                </div>

                <div class="mb-3">
                    <label for="cpu">cpu</label>
                    <input type="cpu" class="form-control" id="cpu" name="cpu" required>


                </div>
                <div class="mb-3">
                    <label for="charging_port">Charging pin</label>
                    <input type="charging_pin" class="form-control" id="charging_pin" name="charging_pin" required>


                </div>

                <div class="mb-3">
                    <input type="submit" class="ms-auto btn btn-lg btn-primary" value="Add" name="submit">


                </div>

            </form>

</main>

<?php

include_once "./layouts/main/footer.php";

?>