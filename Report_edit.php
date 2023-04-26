<meta charset="utf-8">
<?php
if(isset($_POST['der_name'])){
require_once('Connections/Repair.php');
$rr_id = mysqli_real_escape_string($condb,$_POST['rr_id']);
$pd_number = mysqli_real_escape_string($condb,$_POST['pd_number']);
$der_name = mysqli_real_escape_string($condb,$_POST['der_name']);
$pd_detail = mysqli_real_escape_string($condb,$_POST['pd_detail']);
$rr_date = mysqli_real_escape_string($condb,$_POST['rr_date']);
$status = mysqli_real_escape_string($condb,$_POST['status']);
$rr_datel = mysqli_real_escape_string($condb,$_POST['rr_datel']);
$admin_id = mysqli_real_escape_string($condb,$_POST['admin_id']);

$sql ="UPDATE tbl_report SET
		der_name='$der_name',
		pd_number='$pd_number',
		pd_detail='$pd_detail',
		rr_date='$rr_date',
		status='$status',
		rr_datel='$rr_datel',
		admin_id='$admin_id'
		
		WHERE rr_id=$rr_id
	 		
	 ";
	
		$result = mysqli_query($database_Repair, $sql) or die("Error in query : $sql" .mysqli_error($condb));

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "alert('ปรับปรุงข้อมูลเรียบร้อยแล้ว');";
			echo "window.location ='Report.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='Report.php'; ";
			echo "</script>";
		}
		
}else{
             Header("Location: index.php"); //isset
        }

?>
 
 