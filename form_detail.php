<?php require_once('Connections/Repair.php'); 
$query_derid = "SELECT * FROM tbl_devices";
$derid = mysqli_query($condb, $query_derid) or die(mysqli_error($condb));
$row_derid = mysqli_fetch_assoc($derid);
$totalRows_derid = mysqli_num_rows($derid);



$query_formdetail = "SELECT * FROM tbl_device_case ORDER BY pd_number DESC";
$formdetail = mysqli_query($condb, $query_formdetail) or die(mysqli_error($condb));
$row_formdetail = mysqli_fetch_assoc($formdetail);
$totalRows_formdetail = mysqli_num_rows($formdetail);

include('Bootstrap_sc.php');
?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 hidden-print">
        <?php include('banner.php');?>
      </div>
      <div class="col-md-2 hidden-print">
        <br>
        <?php include('menu_left.php');?>
        <br>
      </div>
      
      <div class="col-md-9 col-xs-12 col-sm-12">
        <form action="form_db.php" method="POST"  name="add" class="form-horizontal" id="add">
          <div class="form-group">
            <div class="col-sm-2" align="right"></div>
            <div class="col-sm-5" align="left"><h4> <br>
              รายละเอียดการแจ้งซ่อม </h4>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2 col-xs-2" align="right">เลขที่รับแจ้ง</div>
            <div class="col-sm-2 col-xs-2" align="left">
              <input type="text" disabled value="<?php echo $row_formdetail['pd_number']; ?>" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2  col-xs-2" align="right">คำนำหน้าชื่อ</div>
            <div class="col-sm-2  col-xs-2" align="left">
              <select name="pd_intail" id="pd_intail" class="form-control" disabled>
                <?php
                do {
                ?>
                <option value="<?php echo $row_formdetail['pd_intail']?>"><?php echo $row_formdetail['pd_intail']?></option>
                <?php
                } while ($row_formdetail = mysqli_fetch_assoc($formdetail));
                $rows = mysqli_num_rows($formdetail);
                if($rows > 0) {
                mysqli_data_seek($formdetail, 0);
                  $row_formdetail = mysqli_fetch_assoc($formdetail);
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2  col-xs-2" align="right">ชื่อ</div>
            <div class="col-sm-4  col-xs-4" align="left">
              <input  name="pd_name" type="text" disabled required class="form-control" id="pd_name"  placeholder="ชื่อ" value="<?php echo $row_formdetail['pd_name']; ?>"
              minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2  col-xs-2" align="right">นามสกุล</div>
            <div class="col-sm-4  col-xs-4" align="left">
              <input  name="pd_lname" type="text" disabled required class="form-control" id="pd_lname"  placeholder="นามสกุล" value="<?php echo $row_formdetail['pd_lname']; ?>"
              minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2  col-xs-2" align="right">ตำแหน่ง</div>
            <div class="col-sm-4  col-xs-5" align="left">
              <select name="pd_position" id="pd_position" class="form-control" disabled>
                <?php
                do {
                ?>
                <option value="<?php echo $row_formdetail['pd_position']?>"><?php echo $row_formdetail['pd_position']?></option>
                <?php
                } while ($row_formdetail = mysqli_fetch_assoc($formdetail));
                $rows = mysqli_num_rows($formdetail);
                if($rows > 0) {
                mysqli_data_seek($formdetail, 0);
                  $row_formdetail = mysqli_fetch_assoc($formdetail);
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2  col-xs-2" align="right">เบอร์โทรศัพท์</div>
            <div class="col-sm-4  col-xs-5" align="left">
              <input  name="pd_tell" type="text" disabled required class="form-control" id="pd_tell"
              disabled value="<?php echo $row_formdetail['pd_tell']; ?>" maxlength="10" minlength="2"/>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-2  col-xs-2" align="right">อีเมล์</div>
            <div class="col-sm-4  col-xs-5" align="left">
              <input  name="pd_email" disabled required class="form-control" id="pd_tell"
              placeholder="email" value="<?php echo $row_formdetail['pd_email']; ?>"/>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-2  col-xs-2" align="right">ชื่ออุปกรณ์</div>
            <div class="col-sm-4  col-xs-7" align="left">
              <select name="device"  class="form-control" disabled>
                <?php
                do {
                ?>
                <option value="<?php echo $row_formdetail['der_id']?>"><?php echo $row_formdetail['der_name']?></option>
                <?php
                } while ($row_formdetail = mysqli_fetch_assoc($formdetail));
                $rows = mysqli_num_rows($formdetail);
                if($rows > 0) {
                mysqli_data_seek($formdetail, 0);
                  $row_formdetail = mysqli_fetch_assoc($formdetail);
                }
                ?>
              </select>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-2  col-xs-2" align="right">อาการเสีย</div>
            <div class="col-sm-5  col-xs-7" align="left">
              <textarea name="pd_detail" disabled required class="form-control" id="pd_detail"><?php echo $row_formdetail['pd_detail']; ?></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-2  col-xs-2" align="right">วันที่แจ้ง</div>
            <div class="col-sm-3  col-xs-3" align="left">
              <input type="text" class="form-control" disabled value="<?php echo date('d/m/Y',strtotime($row_formdetail['pd_date'])); ?>">
            </div>
          </div>
          <!--
          <div class="form-group">
            <div class="col-sm-2" align="right">CODE</div>
            <div class="col-sm-2" align="left">
              ปป
            </div>
            <div class="col-sm-2" align="left">
              ปป
            </div>
            <div class="col-sm-2" align="left">
              พิมพ์ระหัส CODE
            </div>
            <div class="col-sm-2" align="left">
              ปป
            </div>
          </div>
          
          -->
          <div class="form-group hidden-print">
            <div class="col-sm-2"> </div>
            <div class="col-sm-6">
              <a class="btn btn-primary" onClick="window.print()">
                พิมพ์
              </a>
              &nbsp;
              <a href="index.php" class="btn btn-danger"> ย้อนกลับ </a>
            </div>
            
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php include('footer.php');?>