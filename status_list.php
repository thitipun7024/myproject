<?php require_once('Connections/Repair.php'); 
$query_rsstats = "SELECT * FROM tbl_status";
$rsstats = mysqli_query($condb, $query_rsstats) or die(mysqli_error($condb));
$row_rsstats = mysqli_fetch_assoc($rsstats);
$totalRows_rsstats = mysqli_num_rows($rsstats);
?>
<table border="1" class="table table-bordered">
  <tr class="info">
    <td width="5%">id</td>
    <td width="50%">ชื่อสถานะ</td>
    <td width="5%">แก้ไข</td>
    <td width="5%">ลบ</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rsstats['st_id']; ?></td>
      <td><?php echo $row_rsstats['st_name']; ?></td>
     <td align="center">
      <a href="status.php?st_id=<?php echo $row_rsstats['st_id'];?>&act=edit" class="btn btn-warning btn-xs">แก้ไข</a></td>
      <td align="center">
      <a href="status_del.php?st_id=<?php echo $row_rsstats['st_id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('ยืนยัน')">ลบ</a></td>
    </tr>
    <?php } while ($row_rsstats = mysqli_fetch_assoc($rsstats)); ?>
</table>