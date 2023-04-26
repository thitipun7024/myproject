<meta charset="utf-8">
<?php
require_once('Connections/Repair.php');

$der_id = mysqli_real_escape_string($condb,$_GET['der_id']);

$sql ="DELETE FROM tbl_devices WHERE der_id=$der_id ";
	
   $result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='device.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "window.location ='device.php'; ";
			echo "</script>";
		}
?>
 