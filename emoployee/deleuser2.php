<?php
    include "../config/config.php"
?>
<?php
    $us_id = trim($_GET["us_id"]);
    
?>
<?php
    echo "process...";
    $sql="DELETE FROM user WHERE us_id='".$us_id."'";
		$objQuery = mysqli_query($con,$sql); 
    header('Location: datauser2.php');
    exit;
?>