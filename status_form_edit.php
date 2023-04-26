<?php require_once('Connections/Repair.php'); 
$st_id = mysqli_real_escape_string($condb,$_GET['st_id']);
$query_editst = ("SELECT * FROM tbl_status WHERE st_id =$st_id");
$editst = mysqli_query($condb, $query_editst) or die(mysqli_error($condb));
$row_editst = mysqli_fetch_assoc($editst);
$totalRows_editst = mysqli_num_rows($editst);
?>
 <form action="status_edit.php" method="POST"  name="add" class="form-horizontal" id="add">
       <div class="form-group">
       <div class="col-sm-2" align="right"></div>
        <div class="col-sm-5" align="left"><b>ปรับปรุงสถานะการซ่อม</b></div>
      </div>
       <div class="form-group">
        <div class="col-sm-2" align="right">ชื่อสถานะ</div>
          <div class="col-sm-6" align="left">
            <input  name="st_name" type="text" required class="form-control" id="st_name"  placeholder="ชื่อสถานะ" value="<?php echo $row_editst['st_name']; ?>"   
            minlength="2" />
          </div>
      </div>
       <div class="form-group">
      <div class="col-sm-2"> </div>
          <div class="col-sm-6">
          <button type="submit" class="btn btn-primary"  id="btn">
          <span class="glyphicon glyphicon-plus"></span> บันทึก 
           </button>
          <input name="st_id" type="hidden" id="st_id" value="<?php echo $row_editst['st_id']; ?>" />
          </div>
           
          </div>
          </form>
