<?php
include_once './layouts/main/header.php';

require_once './core/Database.php';
    
    ?>
<div class="container">

    <form class="d-flex" method="get" action="">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <input type="submit" class="btn btn-outline-primary" value="Search">
    </form>


    <?php

try{
    
    if(isset($_GET['search'])) {
        $key = $_GET['search'];
        $query = "SELECT * FROM parts WHERE id LIKE '%$key%' OR Manufacturer LIKE '%$key%' OR Model LIKE '%$key%'";
    }
    else $query = "SELECT * FROM parts";
    $data = $db->query($query);
    echo '<table width="100%" border="2" cellpadding="5" cellspacing="5">
    <tr>
    <th>id</th>
    <th>Manufacturer</th>
    <th>Model</th>
    <th>storage_type</th>
    <th>ram</th>
    <th>cpu</th>
    <th>charging_pin</th>
    <th>display</th>
    <th>graphics_card</th>
    <th>other</th>



    
    </tr>';
    foreach($data as $row)              
    {
        echo '<tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["Manufacturer"].'</td>
        <td>'.$row["Model"].'</td>
        <td>'.$row["storage_type"].'</td>
        <td>'.$row["ram"].'</td> 
        <td>'.$row["cpu"].'</td> 
        <td>'.$row["charging_pin"].'</td> 
        <td>'.$row["display"].'</td> 
        <td>'.$row["graphics_card"].'</td> 
        <td>'.$row["other"].'</td> 


        
        </tr>';
    }
    echo '</table>';
}
catch(PDOException $error)
{
    
    $error -> getMessage();
}