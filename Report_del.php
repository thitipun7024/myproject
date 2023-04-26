<meta charset="utf-8">
<?php
require_once('Connections/Repair.php');

$rr_id = mysqli_real_escape_string($condb,$_GET['rr_id']);

$sql ="DELETE FROM tbl_report WHERE rr_id=$rr_id ";
	
   $result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='Report.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "window.location ='Report.php'; ";
			echo "</script>";
		}
		
?>
 