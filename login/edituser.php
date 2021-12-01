<?php
    include "../config/config.php"
?>
<?php
    $us_id = trim($_POST["us_id"]);
    $us_user = trim($_POST["us_user"]);
    $us_pass = trim($_POST["us_pass"]);
    $us_name = trim($_POST["us_name"]);
    $us_line = trim($_POST["us_line"]);
    $us_tel = trim($_POST["us_tel"]);
    //print_r("my edit");
    //exit;
    
?>

<?php
     echo "process...";
    $sql="UPDATE user SET us_user ='".$us_user."',us_pass ='".$us_pass."',us_name ='".$us_name."',us_line ='".$us_line."',us_tel ='".$us_tel."' ".$str." WHERE us_id ='".$us_id."' ";
    $objQuery = mysqli_query($con,$sql);

    header('Location: datauser.php');
    exit;
?>
