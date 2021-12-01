<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="Keywords" content="เพิ่มข้อมูลหนัง">
        <meta name="Description" content="เพิ่มข้อมูลหนัง">
        <title>เพื่มข้อมูลรถตู้</title>
    </head>
        <script type="application/javascript">
            function addvan(){
                //alert("add_product_process");
                document.forms["form_add"].submit()
            }

        </script>
    <body>
        <div align="center">
            <h1>เพื่มข้อมูลรถตู้</h1>
            <form id="form_add" name="form_add" method="POST" action="addvan.php" enctype="multipart/form-data">
            <div style="padding:5px">ทะเบียนรถ<input type="text" id="car_id" name="car_id" placeholder="ทะเบียนรถ"></div>
                <div style="padding:5px">ยี่ห้อ<input type="text" id="car_brand" name="car_brand" placeholder="ชื่อผู้ใชงาน"></div>
                <div style="padding:5px">เลชประจำรถ<input type="text" id="car_number" name="car_number" placeholder="เลขประจำรถ"></div>
                <div style="padding:5px"><button type = "button" id="bt_submit" name="bt_submit" Onclick="addvan()"> บันทึก</div>
            
            
               
                
            
            </form>
        </div>

    </body>
</html>