<?php require_once('Connections/Repair.php');
$query_derid = "SELECT * FROM tbl_devices";
$derid = mysqli_query($condb, $query_derid) or die(mysqli_error($condb));
$query_lastid = "SELECT * FROM tbl_device_case ORDER BY pd_number DESC";
$lastid = mysqli_query($condb, $query_lastid) or die(mysql_error($condb));
include('datatable.php');
include('Bootstrap_sc.php');
?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include('banner.php');?>
      </div>
      <div class="col-md-2">
        <br>
        <?php include('menu_left.php');?>
        <br>
        <h4 align="center">ADMIN LOGIN</h4>
        <form  name="formlogin" action="authen.php" method="POST" id="login" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12">
              <input  name="admin_user" type="text" required class="form-control" id="admin_user" placeholder="Username" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input name="admin_pass" type="password" required class="form-control" id="admin_pass" placeholder="Password" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-success btn-sm" id="btn" style="width: 100%"> <span class="glyphicon glyphicon-log-in"> </span> เข้าสู่ระบบ </button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-10">
        <h3> ระบบแจ้งซ่อมออนไลน์ </h3>
        <?php  include('showlist_all.php');?>
      </div>
    </div>
  </div>
</body>
</html>
<?php include('footer.php');?>
html
