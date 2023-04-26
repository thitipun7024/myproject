<?php require_once('Connections/Repair.php'); ;
$query_rsdev = "SELECT * FROM tbl_devices";
$rsdev = mysqli_query($condb, $query_rsdev) or die(mysqli_error($condb));
$row_rsdev = mysqli_fetch_assoc($rsdev);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
  </head>
  <body>
    <table border="1" class="table table-bordered">
      <tr class="info">
        <td width="5%">id</td>
        <td width="85%">ชื่อุปกรณ์</td>
        <td width="5%">แก้ไข</td>
        <td width="5%">ลบ</td>
      </tr>
      <?php do { ?>
      <tr>
        <td><?php echo $row_rsdev['der_id']; ?></td>
        <td><?php echo $row_rsdev['der_name']; ?></td>
        <td><a href="device.php?der_id=<?php echo $row_rsdev['der_id']; ?>&act=edit" class="btn btn-warning btn-xs">แก้ไข</a></td>
        <td><a href="devices_del.php?der_id=<?php echo $row_rsdev['der_id'];?>" onclick="return confirm('ยืนยัน');" class="btn btn-danger btn-xs">ลบ</a></td>
      </tr>
      <?php } while ($row_rsdev = mysqli_fetch_assoc($rsdev)); ?>
    </table>
  </body>
</html>