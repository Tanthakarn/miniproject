<?php
    include "../config/config.php"
?>
<?php
     $us_id = trim($_POST["us_id"]);
     $us_user = trim($_POST["us_user"]);
     $us_name = trim($_POST["us_name"]);
     $us_pass = trim($_POST["us_pass"]);
     $us_line = trim($_POST["us_line"]);
     $us_tel = trim($_POST["us_tel"]);
     $us_bird = trim($_POST["us_bird"]);
     $us_sex = trim($_POST["us_sex"]);
     $us_level = trim($_POST["us_level"]);
    
    
?>
<?php
    echo "process...";
    $sql="INSERT INTO user (us_id,us_user,us_pass,us_name,us_line,us_tel,us_bird,us_sex,us_level) VALUE ('".$us_id."','".$us_user."','".$us_pass."','".$us_name."','".$us_line."','".$us_tel."','".$us_bird."','".$us_sex."','".$us_level."')";
    $objQuery = mysqli_query($con,$sql);

    header('Location: loginmember.php');
    exit;
?>