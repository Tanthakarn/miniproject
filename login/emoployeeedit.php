<?php 
    include "../config/config.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="Keywords" content="เพิ่มข้อมูลสินค้า">
        <meta name="Description" content="เพิ่มข้อมูลสินค้า">
        <title>เพิ่มข้อมูลพนักงาน</title>
    </head>
    <script type="application/javascript">
        function edit_emp(){
            //alert("add_product_process");
            document.forms["form_add"].submit();
        }
    </script>
    <?php
        $emp_id = $_GET['emp_id'];
        $sql ="SELECT * FROM emoployee WHERE emp_id='".$emp_id."'";
        $objQuery = mysqli_query($con,$sql);
        ($objResult=@mysqli_fetch_array($objQuery,MYSQLI_ASSOC));
        $emp_user=trim($objResult["emp_user"]);
        $emp_name=trim($objResult["emp_name"]);
        $emp_tel=trim($objResult["emp_tel"]);
        $emp_add=trim($objResult["emp_add"]);
        
    ?>
    <body>
    <div align="center">
            <h1>เพื่มข้อมูลพนักงาน</h1>
            <form id="form_add" name="form_add" method="POST" action="editemp.php"  enctype="multipart/form-data">
                <div style="padding:5px">รหัสบัตรประชาชนผู้ใช้งาน<input type="hidden" id="emp_id" name="emp_id" value="<?php echo $emp_id;?>"placeholder="รหัส"></div>
                <div style="padding:5px">ชื่อผู้ใช้งาน<input type="text" id="emp_user" name="emp_user" value="<?php echo $emp_user;?>"placeholder="ชื่อผู้ใช้งาน"></div>
                <div style="padding:5px">ชื่อ-สกุล<input id="emp_name" name="emp_name" value="<?php echo $emp_name;?>"placeholder="ชื่อ-สกุล"></input></div>
                <div style="padding:5px">เบอร์โทรศัพท์<input type="text" id="emp_tel" name="emp_tel" value="<?php echo $emp_tel;?>"placeholder="เบอร์โทรศัพท์"></div>
                <div style="padding:5px">ที่อยู่<textarea id="emp_add" name="emp_add" placeholder="ที่อยู่"><?php echo $emp_add;?></textarea></div>
                <div style="padding:5px"><button type = "button" id="bt_submit" name="bt_submit" Onclick="edit_emp()"> บันทึกข้อมูลพนักงาน</div>
               
            </form>
        </div>
    </body>
</html>