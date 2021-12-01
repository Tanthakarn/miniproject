<?php
    include "../config/config.php"
?>
<?php
    $car_id = trim($_POST["car_id"]);
    $car_brand = trim($_POST["car_brand"]);
    $car_number = trim($_POST["car_number"]);

    //print_r("my edit");
    //exit;
    
?>

<?php
     echo "process...";
    $sql="UPDATE car_service SET car_brand ='".$car_brand."',car_number ='".$car_number."' ".$str." WHERE car_id ='".$car_id."' ";
    $objQuery = mysqli_query($con,$sql);

    header('Location: vandata.php');
    exit;
?>
