<?php
include_once './layouts/main/header.php';

require_once './core/Database.php';

if ($_SERVER['REQUEST_METHOD'] =='POST'){
$category = $_POST['category'];
$manufacturer = $_POST['manufacturer'];
$model = $_POST['model'];
$display = $_POST['display'];
$storage = $_POST['storage'];
$ram = $_POST['ram'];

$errors = array();

if(!$errors){
    $statement = "INSERT INTO desktop( category,manufacturer,model,display,storage,ram,market_price) values (?,?,?,?,?,?,?)";
    $data = array ( $category,$manufacturer, $model, $display,$storage,$ram,$market_price);
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



            <h1 class=text-center>Admin Section</h1>
            <h1 class=>Desktop Details</h1>
            <form action="" method="post" enctype="multipart/form-data">



                <div class="mb-3">
                    <label for="category">Category</label>
                    <input type="category" class="form-control" id="category" name="category" required>
                </div>
                <div class="mb-3">
                    <label for="manufacturer">Manufacturer</label>
                    <input type="manufacturer" class="form-control" id="manufacturer" name="manufacturer" required>
                </div>

                <div class="mb-3">
                    <label for="model">Model</label>
                    <input type="model" class="form-control" id="model" name="model" required>


                </div>

                <div class="mb-3">
                    <label for="display">Display</label>
                    <input type="display" class="form-control" id="display" name="display" required>


                </div>
                <div class="mb-3">
                    <label for="storage">Storage</label>
                    <input type="storage" class="form-control" id="storage" name="storage" required>


                </div>
                <div class="mb-3">
                    <label for="ram">RAM</label>
                    <input type="ram" class="form-control" id="ram" name="ram" required>


                </div>


                <div class="mb-3">
                    <label for="market_price">Market Price</label>
                    <input type="market_price" class="form-control" id="market_price" name="market_price" required>


                </div>
                <div class="mb-3">
                    <input type="submit" class="ms-auto btn btn-lg btn-primary" value="Add" name="submit">
                </div>



            </form>

</main>

<?php

include_once "./layouts/main/footer.php";