<?php
include_once './layouts/main/header.php';

require_once './core/Database.php';

if ($_SERVER['REQUEST_METHOD'] =='POST'){
$manufacturer = $_POST['manufacturer'];
$model = $_POST['model'];
$storage_type = $_POST['storage_type'];
$ram = $_POST['ram'];
$cpu = $_POST['cpu'];
$charging_pin = $_POST['charging_pin'];
$display = $_POST['display'];
$graphics_card = $_POST['graphics_card'];
$other = $_POST['other'];
$errors = array();

if(!$errors){
    $statement = "INSERT INTO parts( manufacturer,model,storage_type,ram,cpu,charging_pin,display,graphics_card,other) values (?,?,?,?,?,?,?,?,?)";
    $data = array ( $manufacturer, $model, $storage_type, $ram,$cpu,$charging_pin,$display,$graphics_card,$other);
    $query = $db -> prepare ($statement);
    $query -> execute($data);
    header("location: admindash.php");
   exit();

}

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
                    <label for="">Storage type</label>
                    <input type="storage_type" class="form-control" id="storage_type" name="storage_type" required>


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
                    <label for="charging_pin">Charging pin</label>
                    <input type="charging_pin" class="form-control" id="charging_pin" name="charging_pin" required>


                </div>
                <div class="mb-3">
                    <label for="display"> Display</label>
                    <input type="display" class="form-control" id="display" name="display" required>


                </div>
                <div class="mb-3">
                    <label for="graphics_card">Graphics card</label>
                    <input type="graphics_card" class="form-control" id="graphics_card" name="graphics_card" required>

                </div>
                <div class="mb-3">
                    <label for="other"> Other</label>
                    <input type="oher" class="form-control" id="other" name="other" required>


                </div>
                <div class="mb-3">
                    <input type="submit" class="ms-auto btn btn-lg btn-primary" value="Add" name="submit">


                </div>

            </form>

</main>

<?php

include_once "./layouts/main/footer.php";

?>