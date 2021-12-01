<?php
    include "../config/config.php"
?>
<?php
     $car_id = trim($_POST["car_id"]);
     $car_brand = trim($_POST["car_brand"]);
     $car_number = trim($_POST["car_number"]);
    
    
?>
<?php
    echo "process...";
    $sql="INSERT INTO car_service (car_id,car_brand,car_number) VALUE ('".$car_id."','".$car_brand."','".$car_number."')";
    $objQuery = mysqli_query($con,$sql);

    header('Location: vandata.php');
    exit;
?>