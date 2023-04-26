<meta charset="utf-8">
<?php
if(isset($_POST['admin_name'])){
require_once('Connections/Repair.php');
$admin_id = mysqli_real_escape_string($condb,$_POST['admin_id']);
$admin_name = mysqli_real_escape_string($condb,$_POST['admin_name']);
$admin_lname = mysqli_real_escape_string($condb,$_POST['admin_lname']);
$admin_user = mysqli_real_escape_string($condb,$_POST['admin_user']);
$admin_pass = mysqli_real_escape_string($condb,$_POST['admin_pass']);
$admin_tell = mysqli_real_escape_string($condb,$_POST['admin_tell']);
$admin_email = mysqli_real_escape_string($condb,$_POST['admin_email']);

$sql ="UPDATE tbl_admin SET	 
		admin_name='$admin_name',
		admin_lname='$admin_lname',
		admin_user='$admin_user',
		admin_pass='$admin_pass',
		admin_tell='$admin_tell',
		admin_email='$admin_email'
		WHERE admin_id=$admin_id	
	 ";
		$result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "alert('ปรับปรุงข้อมูลเรียบร้อยแล้ว');";
			echo "window.location ='member.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='member.php'; ";
			echo "</script>";
		}
		
}else{
             Header("Location: index.php"); //isset
        }

?>
 
 