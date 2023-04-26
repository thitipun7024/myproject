<?php require_once('Connections/Repair.php');
$der_id = mysqli_real_escape_string($condb,$_GET['der_id']);
$query_edeve = ("SELECT * FROM tbl_devices WHERE der_id = $der_id");
$edeve = mysqli_query($condb, $query_edeve) or die(mysqli_error($condb));
$row_edeve = mysqli_fetch_assoc($edeve);
$totalRows_edeve = mysqli_num_rows($edeve);
?>
<form action="devices_edit.php" method="POST"  name="add" class="form-horizontal" id="add">
  <div class="form-group">
    <div class="col-sm-2" align="right"></div>
    <div class="col-sm-5" align="left"><b>แก้ไขอุปกรณ์</b></div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right">ชื่ออุปกรณ์</div>
    <div class="col-sm-9" align="left">
      <input  name="der_name" type="text" required class="form-control" id="der_name"  placeholder="ชื่ออุปกรณ์" value="<?php echo $row_edeve['der_name']; ?>"
      />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-primary"  id="btn"> <span class="glyphicon glyphicon-plus"></span>บันทึก  </button>
      <input name="der_id" type="hidden" id="der_id" value="<?php echo $row_edeve['der_id']; ?>" />
    </div>
  </div>
</form>