<?php 
session_start();
        if(isset($_POST['us_user'])){
                  include("../config/config.php");
                  $us_user = $_POST['us_user'];
                  $us_pass = $_POST['us_pass'];

                  $sql="SELECT * FROM user
                  WHERE us_user='".$us_user."' 
                  AND  us_pass='".$us_pass."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["us_id"] = $row["us_id"];
                      $_SESSION["us_name"] = $row["us_name"];
                      $_SESSION["us_level"] = $row["us_level"];

                      if($_SESSION["us_level"]=="member"){ 

                        Header("Location: member.php");
                  
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
