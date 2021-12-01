<?php session_start();?>
<?php
include('h.php');
?>
<script type="application/javascript">
    function addemoployee(){
        //alert("addProduct");
        window.location.replace("emoployeeadd.php");
    }
</script>
<style type="text/css">
#btn{
width:100%;
}
</style>
<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#D6EAF8">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>
      Form Login </h3>
      <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="emp_user" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="emp_pass" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
             <label style="padding: 5px 10px 5px 10px;border-radius: 25px;cursor:pointer" Onclick="addemoployee()">สมัครสมาชิก</label>
               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me         
                </label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>