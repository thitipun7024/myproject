<meta charset="utf-8">
<?php
require_once('Connections/Repair.php');
 
$st_id = mysqli_real_escape_string($condb,$_GET['st_id']);

$sql ="DELETE FROM tbl_status WHERE st_id=$st_id ";
	
   $result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='status.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "window.location ='status.php'; ";
			echo "</script>";
		}
		
?>
 