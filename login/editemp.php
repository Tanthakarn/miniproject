<?php
    include "../config/config.php"
?>
<?php
    $emp_id = trim($_POST["emp_id"]);
    $emp_user = trim($_POST["emp_user"]);
    $emp_name = trim($_POST["emp_name"]);
    $emp_tel = trim($_POST["emp_tel"]);
    $emp_add = trim($_POST["emp_add"]);
    //print_r("my edit");
    //exit;
    
?>

<?php
     echo "process...";
    $sql="UPDATE emoployee SET emp_user ='".$emp_user."',emp_name ='".$emp_name."',emp_tel ='".$emp_tel."',emp_add ='".$emp_add."' ".$str." WHERE emp_id ='".$emp_id."' ";
    $objQuery = mysqli_query($con,$sql);

    header('Location: admin.php');
    exit;
?>
