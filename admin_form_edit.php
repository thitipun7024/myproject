<?php require_once('Connections/Repair.php');
$admin_id = mysqli_real_escape_string($condb,$_GET['admin_id']);
$query_ema = ("SELECT * FROM tbl_admin WHERE admin_id =$admin_id");
$ema = mysqli_query($condb, $query_ema) or die(mysqli_error($condb));
$row_ema = mysqli_fetch_assoc($ema);
$totalRows_ema = mysqli_num_rows($ema);
?>
<form action="admin_edit.php" method="POST"  name="add" class="form-horizontal" id="add">
  <div class="form-group">
    <div class="col-sm-2" align="right"></div>
    <div class="col-sm-5" align="left"><b>แก้ไขผู้ดูแลระบบ</b></div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right">คำนำหน้าชื่อ</div>
    <div class="col-sm-2" align="left">
      <select name="admin_initail" id="admin_initail" required class="form-control">
        <option value="<?php echo $row_ema['admin_initail']; ?>">
        <?php echo $row_ema['admin_initail']; ?> </option>
        <option value="นาย">นาย</option>
        <option value="นางสาว">นางสาว</option>
        <option value="นาง">นาง</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right">ชื่อ</div>
    <div class="col-sm-4" align="left">
      <input  name="admin_name" type="text" required class="form-control" id="admin_name"  placeholder="ชื่อ" value="<?php echo $row_ema['admin_name']; ?>"
      minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right">นามสกุล</div>
    <div class="col-sm-4" align="left">
      <input  name="admin_lname" type="text" required class="form-control" id="admin_lname"  placeholder="นามสกุล" value="<?php echo $row_ema['admin_lname']; ?>"
      minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right">Username</div>
    <div class="col-sm-4" align="left">
      <input  name="admin_user" type="text" required class="form-control" id="admin_user"  placeholder="Username"
      pattern="^[a-zA-Z0-9]+$" value="<?php echo $row_ema['admin_user']; ?>" minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right">Password</div>
    <div class="col-sm-4" align="left">
      <input  name="admin_pass" type="password" required class="form-control" id="admin_pass"  placeholder="Password"
      pattern="^[a-zA-Z0-9]+$" value="<?php echo $row_ema['admin_pass']; ?>" minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right">เบอร์โทรศัพท์</div>
    <div class="col-sm-4" align="left">
      <input  name="admin_tell" type="text" required class="form-control" id="admin_tell"  placeholder="เบอรโทรศัพท์"
      pattern="^[0-9]+$" value="<?php echo $row_ema['admin_tell']; ?>" maxlength="10" minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right">Email</div>
    <div class="col-sm-5" align="left">
      <input  name="admin_email" type="email"  class="form-control" id="admin_email" value="<?php echo $row_ema['admin_email']; ?>" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-primary"  id="btn"> <span class="glyphicon glyphicon-plus"></span>บันทึก </button>
      <input name="admin_id" type="hidden" id="admin_id" value="<?php echo $row_ema['admin_id']; ?>" />
    </div>
  </div>
</form>