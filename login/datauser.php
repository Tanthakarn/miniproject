<?php session_start(); 
include('../config/config.php');

  $emp_id = $_SESSION['emp_id'];
  $emp_name = $_SESSION['emp_name'];
  $emp_level = $_SESSION['emp_level'];
 	if($emp_level!='1'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey" >
</head>
<form action="logout.php">
	<header class="w3-container w3-center w3-padding-70"> 
  <h1><b>บริษัทภูดขียวขนส่งจำกัด</b></h1>
  <h2>Admin page </h2>
  <div class="w3-left">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../login/admin.php" class="w3-bar-item w3-button w3-padding-large">หน้าหลัก</a>
    <a href="datauser.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลลูกค้า</a>
    <a href="vandata.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลรถตู้</a>
    <a href="#station.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลสถานี</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Login <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="../loginmember/loginmember.php" class="w3-bar-item w3-button">loginสมาชิก</a>
        <a href="../login/login.php" class="w3-bar-item w3-button">loginพนักงาน</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
</header>
	
		<?php
		$sql ="SELECT * FROM user";
		$objQuery = mysqli_query($con,$sql);
		echo "<table border='1px'>";
        echo "<tr>";
            echo "<td>รหัสบัตรประชาชน</td>"; echo"<td>ชื่อผู้ใช้</td>"; echo"<td>รหัสผ่าน</td>"; echo"<td>ชื่อ-สกุล</td>";echo"<td>ที่อยู่</td>";echo"<td>เบอร์โทรศัพท์</td>";echo"<td>แก้ไข</td>";
        echo "</tr>";
		while($objResult=@mysqli_fetch_array($objQuery,MYSQLI_ASSOC)){
			$us_id=$objResult["us_id"];
			$us_user=$objResult["us_user"];
			$us_pass=$objResult["us_pass"];
			$us_name=$objResult["us_name"];
			$us_line=$objResult["us_line"];
            $us_tel=$objResult["us_tel"];
	
			echo "<tr>";
				echo "<td>".$us_id."</td>";
				echo "<td>".$us_user."</td>";
				echo "<td>".$us_pass."</td>";
				echo "<td>".$us_name."</td>";
				echo "<td>".$us_line."</td>"; 
                echo "<td>".$us_tel."</td>"; 
				echo "<td><a href='useredit.php?us_id=".$us_id."'>แก้ไข</a></td>";
				echo "<td><a href='del_movie.php?emp_id=".$emp_id."'>ลบ</a></td>";
				
			echo "</tr>";  
		}
		
	?>
	<h2>ข้อมูลลูกค้า</h2>
	</form>
</body>
</html>
