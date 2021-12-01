<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="Keywords" content="เพิ่มข้อมูลหนัง">
        <meta name="Description" content="เพิ่มข้อมูลหนัง">
        <title>สมัครผู้ใช้งาน</title>
    </head>
        <script type="application/javascript">
            function addemoployee(){
                //alert("add_product_process");
                document.forms["form_add"].submit()
            }

        </script>
    <body>
        <div align="center">
            <h1>เพื่มข้อมูลหนัง</h1>
            <form id="form_add" name="form_add" method="POST" action="addemoployee.php" enctype="multipart/form-data">
            <div style="padding:5px">รหัสบัตรประจำตัวประชาชน<input type="text" id="emp_id" name="emp_id" placeholder="รหัสประจำตัวประชาชน"></div>
                <div style="padding:5px">ชื่อผู้ใช้<input type="text" id="emp_user" name="emp_user" placeholder="ชื่อผู้ใชงาน"></div>
                <div style="padding:5px">รหัส<input type="text" id="emp_pass" name="emp_pass" placeholder="รหัส"></div>
                <div style="padding:5px">ชื่อ-นามสกุล<input type="text" id="emp_name" name="emp_name" placeholder="ชื่อนามสกุล"></div>
                <div style="padding:5px">เบอร์โทรศัพท์<input type="text" id="emp_tel" name="emp_tel" placeholder="เบอร์โทรศัพท์"></div>
                <div style="padding:5px">ที่อยู่<textarea id="emp_add" name="emp_add" placeholder="ที่อยู่"></textarea></div>
                <div style="padding:5px">วันเกิด<input type="date" id="emp_bird" name="emp_bird" placeholder="วันเกิด"></div>
                <div style="padding:5px">เพศ<input type="text" id="emp_sex" name="emp_sex" placeholder="เพศ"></div>
                <div style="padding:5px">ตำแหน่ง<input type="text" id="emp_level" name="emp_level" placeholder="ตำแหน่ง"></div>
                <div style="padding:5px"><button type = "button" id="bt_submit" name="bt_submit" Onclick="addemoployee()"> บันทึก</div>
            
            
               
                
            
            </form>
        </div>

    </body>
</html>