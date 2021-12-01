<?php session_start(); 
include('../config/config.php');

  $us_id = $_SESSION['us_id'];
  $us_name = $_SESSION['us_name'];
  $us_level = $_SESSION['us_level'];
 	if($us_level!='member'){
    Header("Location: ../logoutmember.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="logoutmember.php">
	<h1>Admin Page</h1>
	<h3> สวัสดี คุณ <?php echo $us_name; ?> สถานะ <?php echo $us_level; ?> </h3>
	<input type="submit" value="ออกจากระบบ">
	</form>
</body>
</html>