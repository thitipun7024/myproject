<meta charset="utf-8">
<?php
require_once('Connections/Repair.php');
$admin_id = mysqli_real_escape_string($condb,$_GET['admin_id']);

$sql ="DELETE FROM tbl_admin WHERE admin_id=$admin_id ";	
		
   $result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='member.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "window.location ='member.php'; ";
			echo "</script>";
		}
		


?>
 