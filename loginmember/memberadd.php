<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="Keywords" content="เพิ่มข้อมูลหนัง">
        <meta name="Description" content="เพิ่มข้อมูลหนัง">
        <title>สมัครผู้งานใช้</title>
    </head>
        <script type="application/javascript">
            function addmember(){
                //alert("add_product_process");
                document.forms["form_add"].submit()
            }

        </script>
    <body>
        <div align="center">
            <h1>เพื่มข้อมูลหนัง</h1>
            <form id="form_add" name="form_add" method="POST" action="addmember.php" enctype="multipart/form-data">
            <div style="padding:5px">รหัสบัตรประจำตัวประชาชน<input type="text" id="us_id" name="us_id" placeholder="รหัสประจำตัวประชาชนสมาชิก"></div>
                <div style="padding:5px">ชื่อผู้ใช้<input type="text" id="us_user" name="us_user" placeholder="ชื่อผู้ใชงาน"></div>
                <div style="padding:5px">รหัส<input type="text" id="us_pass" name="us_pass" placeholder="รหัส"></div>
                <div style="padding:5px">ชื่อ-นามสกุล<input type="text" id="us_name" name="us_name" placeholder="ชื่อนามสกุล"></div>
                <div style="padding:5px">ไอดีไลน์<input type="text" id="us_line" name="us_line" placeholder="เบอร์โทรศัพท์"></div>
                <div style="padding:5px">เบอร์โทรศัพท์<input type="text" id="us_tel" name="us_tel" placeholder="เบอร์โทรศัพท์"></div>
                <div style="padding:5px">วันเกิด<input type="date" id="us_bird" name="us_bird" placeholder="วันเกิด"></div>
                <div style="padding:5px">เพศ<input type="text" id="us_sex" name="us_sex" placeholder="เพศ"></div>
                <div style="padding:5px">สถานะ<input type="text" id="us_level" name="us_level" placeholder="ตำแหน่ง"></div>
                
                
                <div style="padding:5px"><button type = "button" id="bt_submit" name="bt_submit" Onclick="addmember()"> บันทึก</div>
            
            
               
                
            
            </form>
        </div>

    </body>
</html>