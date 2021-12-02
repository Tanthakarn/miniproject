<?php session_start(); 
include('../config/config.php');

  $emp_id = $_SESSION['emp_id'];
  $emp_name = $_SESSION['emp_name'];
  $emp_level = $_SESSION['emp_level'];
 	if($emp_level!='1'){
    Header("Location: ../logout.php");  
  }  
?>
<script type="application/javascript">
    function addvan(){
        //alert("addProduct");
        window.location.replace("vanadd.php");
    }
</script>

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
	<header class="w3-container w3-center w3-padding-10"> 
  <h1><b>บริษัทภูดขียวขนส่งจำกัด</b></h1>
  <h2>Admin page </h2>
  <div class="w3-left">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../login/admin.php" class="w3-bar-item w3-button w3-padding-large">หน้าหลัก</a>
    <a href="datauser.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลลูกค้า</a>
    <a href="vandata.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลรถตู้</a>
    <a href="station.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลสถานี</a>
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
		$sql ="SELECT * FROM car_service";
		$objQuery = mysqli_query($con,$sql);
		echo "<table border='1px',>";
        echo "<tr>";
            echo "<td>ทะเบียนรถตู้</td>"; echo"<td>รุ่น</td>";echo"<td>ชื่อพนักงานขับรถ</td>";echo"<td>รหัสรถ</td>"; echo"<td>แก้ไข</td>"; 
        echo "</tr>";
		while($objResult=@mysqli_fetch_array($objQuery,MYSQLI_ASSOC)){
			$car_id=$objResult["car_id"];
			$car_brand=$objResult["car_brand"];
      $car_user=$objResult["car_user"];
			$car_number=$objResult["car_number"];
	
			echo "<tr>";
				echo "<td>".$car_id."</td>";
				echo "<td>".$car_brand."</td>";
        echo "<td>".$car_user."</td>";
				echo "<td>".$car_number."</td>";
				echo "<td><a href= 'vanedit.php?car_id=".$car_id."'>แก้ไข</a></td>";
				echo "<td><a href='delvan.php?car_id=".$car_id."'>ลบ</a></td>";
				
			echo "</tr>";  
		}
	
	?>
 <button type="button" style="background-color:cornflowerblue;padding: 5px 10px 5px 10px;border-radius: 25px;cursor:pointer" Onclick="addvan()">เพื่มข้อมูลรถตู้</button>
	</form>
</body>
</html>
