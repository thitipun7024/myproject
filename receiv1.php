<meta charset="utf-8">
<?php
// print_r($_POST);
// exit();
if(isset($_POST['pd_number'])){
require_once('Connections/Repair.php'); 
$pd_detail = mysqli_real_escape_string($condb,$_POST['pd_detail']);
$der_id = mysqli_real_escape_string($condb,$_POST['der_id']);
$der_name = mysqli_real_escape_string($condb,$_POST['der_name']);
$admin_id = mysqli_real_escape_string($condb,$_POST['admin_id']);
$st_id = mysqli_real_escape_string($condb,$_POST['st_id']);
$rr_date = mysqli_real_escape_string($condb,$_POST['rr_dete']);
$pd_number = mysqli_real_escape_string($condb,$_POST['pd_number']);

$sql1 ="INSERT INTO tbl_report 
(
pd_detail,
der_id,
der_name,
admin_id,
rr_date,
pd_number
)
VALUES
(
'$pd_detail',
'$der_id',
'$der_name',
'$admin_id',
'$rr_date',
'$pd_number'
)
";
	
$result1 = mysqli_query($condb, $sql1) or die("Error in query : $sql1" .mysqli_error($condb));


$sql ="UPDATE tbl_device_case SET
		st_id=$st_id
		WHERE pd_number=$pd_number
	 ";
	
		$result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));
		mysqli_close($condb);
		if($result){
			echo "<script>";
			echo "alert('ลงรับงานเรียบร้อยแล้ว');";
			echo "window.location ='new_case.php?act=2'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='new_case.php?act=2'; ";
			echo "</script>";
		}
		
}else{
             Header("Location: index.php"); //isset
        }

?>
 