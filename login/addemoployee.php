<?php
    include "../config/config.php"
?>
<?php
     $emp_id = trim($_POST["emp_id"]);
     $emp_user = trim($_POST["emp_user"]);
     $emp_pass = trim($_POST["emp_pass"]);
     $emp_name = trim($_POST["emp_name"]);
     $emp_tel = trim($_POST["emp_add"]);
     $emp_add = trim($_POST["emp_tel"]);
     $emp_bird = trim($_POST["emp_bird"]);
     $emp_sex = trim($_POST["emp_sex"]);
     $emp_level = trim($_POST["emp_level"]);
    
    
?>
<?php
    echo "process...";
    $sql="INSERT INTO emoployee (emp_id,emp_user,emp_pass,emp_name,emp_tel,emp_add,emp_bird,emp_sex,emp_level) VALUE ('".$emp_id."','".$emp_user."','".$emp_pass."','".$emp_name."','".$emp_add."','".$emp_tel."','".$emp_bird."','".$emp_sex."','".$emp_level."')";
    $objQuery = mysqli_query($con,$sql);

    header('Location: login.php');
    exit;
?>