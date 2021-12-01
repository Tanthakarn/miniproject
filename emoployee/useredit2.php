<?php 
    include "../config/config.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="Keywords" content="เพิ่มข้อมูลสินค้า">
        <meta name="Description" content="เพิ่มข้อมูลสินค้า">
        <title>แก้ไขข้อมูลลูกค้า</title>
    </head>
    <script type="application/javascript">
        function edit_user2(){
            //alert("add_product_process");
            document.forms["form_add"].submit();
        }
    </script>
    <?php
        $us_id = $_GET['us_id'];
        $sql ="SELECT * FROM user WHERE us_id='".$us_id."'";
        $objQuery = mysqli_query($con,$sql);
        ($objResult=@mysqli_fetch_array($objQuery,MYSQLI_ASSOC));
        $us_user=trim($objResult["us_user"]);
        $us_pass=trim($objResult["us_pass"]);
        $us_name=trim($objResult["us_name"]);
        $us_pass=trim($objResult["us_pass"]);
        $us_line=trim($objResult["us_tel"]);
        $us_tel=trim($objResult["us_tel"]);
        
    ?>
    <body>
    <div align="center">
            <h1>เพื่มข้อมูลพนักงาน</h1>
            <form id="form_add" name="form_add" method="POST" action="edituser2.php"  enctype="multipart/form-data">
                <div style="padding:5px">รหัสบัตรประชาชนผู้ใช้งาน<input type="hidden" id="us_id" name="us_id" value="<?php echo $us_id;?>"placeholder="รหัส"></div>
                <div style="padding:5px">ชื่อผู้ใช้งาน<input type="text" id="us_user" name="us_user" value="<?php echo $us_user;?>"placeholder="ชื่อผู้ใช้งาน"></div>
                <div style="padding:5px">รหัสผ่าน<input type="text" id="us_pass" name="us_pass" value="<?php echo $us_pass;?>"placeholder="รหัสผ่าน"></div>
                <div style="padding:5px">ชื่อ-สกุล<input id="us_name" name="us_name" value="<?php echo $us_name;?>"placeholder="ชื่อ-สกุล"></input></div>
                <div style="padding:5px">ไอดีไลน์<input type="text" id="us_line" name="us_line" value="<?php echo $us_line;?>"placeholder="ไอดีไลน์"></div>
                <div style="padding:5px">เบอร์โทรศัพท์<input type="text" id="us_tel" name="us_tel" value="<?php echo $us_tel;?>"placeholder="เบอร์โทรศัพท์"></div>
                <div style="padding:5px"><button type = "button" id="bt_submit" name="bt_submit" Onclick="edit_user2()"> บันทึก</div>
               
            </form>
        </div>
    </body>
</html>