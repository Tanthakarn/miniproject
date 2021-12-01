<?php 
    include "../config/config.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="Keywords" content="เพิ่มข้อมูลสินค้า">
        <meta name="Description" content="เพิ่มข้อมูลสินค้า">
        <title>แก้ไขข้อมูลรถตู้</title>
    </head>
    <script type="application/javascript">
        function edit_van(){
            //alert("add_product_process");
            document.forms["form_add"].submit();
        }
    </script>
    <?php
        $car_id = $_GET['car_id'];
        $sql ="SELECT * FROM car_service WHERE car_id='".$car_id."'";
        $objQuery = mysqli_query($con,$sql);
        ($objResult=@mysqli_fetch_array($objQuery,MYSQLI_ASSOC));
        $car_brand=trim($objResult["car_brand"]);
        $car_number=trim($objResult["car_number"]);
     
        
    ?>
    <body>
    <div align="center">
            <h1>เพื่มข้อมูลพนักงาน</h1>
            <form id="form_add" name="form_add" method="POST" action="editvan.php"  enctype="multipart/form-data">
                <div style="padding:5px">ทะเบียนรถยนต์<input type="hidden" id="car_id" name="car_id" value="<?php echo $car_id;?>"placeholder="ทะเบียนรถยนต์"></div>
                <div style="padding:5px">เบรนด์รถ<input type="text" id="car_brand" name="car_brand" value="<?php echo $car_brand;?>"placeholder="เบรนด์รถ"></div>
                <div style="padding:5px">เลขประจำตัวรถ<input type="text" id="car_number" name="car_number" value="<?php echo $car_number;?>"placeholder="เลขประจำตัวรถ"></div>
                <div style="padding:5px"><button type = "button" id="bt_submit" name="bt_submit" Onclick="edit_van()"> บันทึก</div>
               
            </form>
        </div>
    </body>
</html>