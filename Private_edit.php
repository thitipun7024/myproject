<meta charset="utf-8">
<?php
if(isset($_POST['pd_number'])){
require_once('Connections/Repair.php');
$pd_number = mysqli_real_escape_string($condb,$_POST['pd_number']);
$der_id = mysqli_real_escape_string($condb,$_POST['der_id']);
$der_name = mysqli_real_escape_string($condb,$_POST['der_name']);
$pd_detail = mysqli_real_escape_string($condb,$_POST['pd_detail']);
$pd_date = mysqli_real_escape_string($condb,$_POST['pd_date']);
$pd_intail = mysqli_real_escape_string($condb,$_POST['pd_intail']);
$pd_name = mysqli_real_escape_string($condb,$_POST['pd_name']);
$pd_lname = mysqli_real_escape_string($condb,$_POST['pd_lname']);
$pd_position = mysqli_real_escape_string($condb,$_POST['pd_position']);
$pd_tell = mysqli_real_escape_string($condb,$_POST['pd_tell']);
$pd_email = mysqli_real_escape_string($condb,$_POST['pd_email']);

$sql ="UPDATE tbl_private_devices SET
	 
		der_name='$der_name',
		der_id='$der_id',
		pd_detail='$pd_detail',
		pd_date='$pd_date',
		pd_intail='$pd_intail',
		pd_name='$pd_name',
		pd_lname='$pd_lname',
		pd_position='$pd_position',
		pd_tell='$pd_tell',
		pd_email='$pd_email'
		
		WHERE pd_number=$pd_number
	 		
	 ";
		
		$result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));
		mysqli_close($condb);
		if($result){
			echo "<script>";
			echo "alert('ปรับปรุงข้อมูลเรียบร้อยแล้ว');";
			echo "window.location ='Private.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='Private.php'; ";
			echo "</script>";
		}
}else{
             Header("Location: index.php"); //isset
        }

?>
