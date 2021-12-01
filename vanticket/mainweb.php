<?php session_start(); 
include('../config/config.php');
?>
<!DOCTYPE html>
<html>
<title>บริษัทภูดขียวขนส่งจำกัด</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey" >

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:2000px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-70"> 
  <h1><b>บริษัทภูดขียวขนส่งจำกัด</b></h1>
  <p>ระบบจองตั๋วออนไลน์ </p>
  <div class="w3-left">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">หน้าหลัก</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Login <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="../loginmember/loginmember.php" class="w3-bar-item w3-button">loginสมาชิก</a>
        <a href="../login/login.php" class="w3-bar-item w3-button">loginพนักงาน</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
</header>


<form action="logout.php">
		<?php
		$sql ="SELECT * FROM emoployee";
		$objQuery = mysqli_query($con,$sql);
		echo "<table border='1px'>";
        echo "<tr>";
            echo "<td>รหัสบัตรประชาชน</td>"; echo"<td>ชื่อผู้ใช้</td>"; echo"<td>ชื่อ-สกุล</td>";echo"<td>ที่อยู่</td>";echo"<td>เบอร์โทรศัพท์</td>";
        echo "</tr>";
		
				
			echo "</tr>";  
		
		
	?>