<meta charset="utf-8">
<?php
if(isset($_POST['st_name'])){
require_once('Connections/Repair.php');
$st_name = mysqli_real_escape_string($condb,$_POST['st_name']);

$sql ="INSERT INTO tbl_status
		(
		st_name
		)		
		VALUES	
		(
		'$st_name'
		)";
	
		$result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
			echo "window.location ='status.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='status.php'; ";
			echo "</script>";
		}
}else{
             Header("Location: index.php"); //isset
        }

?>