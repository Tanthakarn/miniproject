<?php 
session_start();
        if(isset($_POST['emp_user'])){
                  include("../config/config.php");
                  $emp_user = $_POST['emp_user'];
                  $emp_pass = $_POST['emp_pass'];

                  $sql="SELECT * FROM emoployee 
                  WHERE emp_user='".$emp_user."' 
                  AND  emp_pass='".$emp_pass."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["emp_id"] = $row["emp_id"];
                      $_SESSION["emp_name"] = $row["emp_name"];
                      $_SESSION["emp_level"] = $row["emp_level"];

                      if($_SESSION["emp_level"]=="1"){ 

                        Header("Location: admin.php");
                      }
                  if ($_SESSION["emp_level"]=="0"){ 

                        Header("Location: employee.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: login.php"); //user & password incorrect back to login again

 
        }
?>
