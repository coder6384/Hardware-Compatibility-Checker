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
        $query = "SELECT * FROM computer WHERE id LIKE '%$key%' OR Category LIKE '%$key%' OR Manufacturer LIKE '%$key%' OR Model LIKE '%$key%'";
    }
    else $query = "SELECT * FROM computer";
    $data = $db->query($query);
    echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
    <tr>
    <th>id</th>
    <th>Category</th> 
    <th>Manufacturer</th>
    <th>Model</th>
    <th>year_made</th>
    <th>market_price</th>
    
    </tr>';
    foreach($data as $row)              
    {
        echo '<tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["Category"].'</td>
        <td>'.$row["Manufacturer"].'</td>
        <td>'.$row["Model"].'</td>
        <td>'.$row["year_made"].'</td>
        <td>'.$row["market_price"].'</td> 
        
        </tr>';
    }
    echo '</table>';
}
catch(PDOException $error)
{
    
    $error -> getMessage();
}
?>
    </div>