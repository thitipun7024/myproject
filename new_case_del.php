<meta charset="utf-8">
<?php
require_once('Connections/Repair.php');

$pd_number = mysqli_real_escape_string($condb,$_GET['pd_number']);

$sql ="DELETE FROM tbl_device_case WHERE pd_number=$pd_number ";
	
   $result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='new_case.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "window.location ='new_case.php'; ";
			echo "</script>";
		}
?>
 