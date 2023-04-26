<?php require_once('Connections/Repair.php'); 
$query_device = "SELECT * FROM tbl_devices ORDER BY der_id ASC";
$device = mysqli_query($condb, $query_device) or die(mysqli_error($condb));
$row_device = mysqli_fetch_assoc($device);
$totalRows_device = mysqli_num_rows($device);
?>
<table border="1" class="table table-bordered">
  <tr class="info">
    <td width="15%" align="center">รหัสอุปกรณ์</td>
    <td width="50%">ชื่ออุปกรณ์</td>
    <td width="20%">จำนวนครั้งที่แจ้งซ่อม</td>
    
  </tr>
  <?php if($totalRows_device >0){ do { ?>
    <tr>
      <td align="center"><?php echo $row_device['der_id']; ?></td>
      <td><?php echo $row_device['der_name']; ?></td>
       <td align="center">
	   <?php  
	$der_id = $row_device['der_id'];
	$sqlx = "SELECT COUNT(der_id)as ccder FROM tbl_device_case WHERE der_id=$der_id";
	$resultx = mysqli_query($condb, $sqlx);
	$row = mysqli_fetch_array($resultx);
	echo $row['ccder'];   
	   ?>
       ครั้ง  
       </td>
    </tr>
    <?php } while ($row_device = mysqli_fetch_assoc($device)); } ?>
</table>

