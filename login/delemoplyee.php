<?php
    include "../config/config.php"
?>
<?php
    $emp_id = trim($_GET["emp_id"]);
    
?>
<?php
    echo "process...";
    $sql="DELETE FROM emoployee WHERE emp_id='".$emp_id."'";
		$objQuery = mysqli_query($con,$sql); 
    header('Location: admin.php');
    exit;
?>