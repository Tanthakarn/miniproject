<?php
    include "../config/config.php"
?>
<?php
    $car_id = trim($_GET["car_id"]);
    
?>
<?php
    echo "process...";
    $sql="DELETE FROM car_service WHERE car_id='".$car_id."'";
		$objQuery = mysqli_query($con,$sql); 
    header('Location: vandata.php');
    exit;
?>