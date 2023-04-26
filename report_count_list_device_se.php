<?php require_once('Connections/Repair.php');
$query_device = "
SELECT * FROM tbl_devices ORDER BY der_id ASC";
$device = mysqli_query($condb, $query_device) or die(mysqli_error($condb));
$row_device = mysqli_fetch_assoc($device);
$totalRows_device = mysqli_num_rows($device);
?>
 
<b>
<font color="red">
ระหว่างวันที่   <?php echo date('d/m/Y',strtotime($_GET['ds']));?>
ถึง
วันที่ <?php echo date('d/m/Y',strtotime($_GET['de']));?>
</font>
</b>
<br>
<table border="1" class="table table-bordered">
  <tr class="info">
    <td width="15%" align="center">รหัสอุปกรณ์</td>
    <td width="50%">ชื่ออุปกรณ์</td>
    <td width="20%">จำนวนครั้งที่แจ้งซ่อม</td>
    
  </tr>
  <?php do { ?>
    <tr>
      <td align="center"><?php echo $row_device['der_id']; ?></td>
      <td><?php echo $row_device['der_name']; ?></td>
       <td align="center">
	   <?php  
	$ds = $_GET['ds'];
	$de = $_GET['de'];
	$der_id = $row_device['der_id'];
	$sqlx = "select COUNT(der_id)as ccder   from tbl_device_case 
	where der_id=$der_id 
	AND pd_date >='$ds' AND pd_date <='$de'";
	$resultx = mysqli_query($condb, $sqlx);
	$row = mysqli_fetch_array($resultx);
	echo $row['ccder'];   
	   ?>
       ครั้ง  
       </td>
    </tr>
    <?php } while ($row_device = mysqli_fetch_assoc($device)); ?>
</table>
 
