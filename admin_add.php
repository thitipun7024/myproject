<meta charset="utf-8">
<?php
if(isset($_POST['admin_name'])){
		require_once('Connections/Repair.php');
		$admin_initail = $_POST['admin_initail'];
		$admin_name = $_POST['admin_name'];
		$admin_lname = $_POST['admin_lname'];
		$admin_user = $_POST['admin_user'];
		$admin_pass = $_POST['admin_pass'];
		$admin_tell = $_POST['admin_tell'];
		$admin_email = $_POST['admin_email'];

		$sql ="INSERT INTO tbl_admin
				(
				admin_initail,
				admin_name,
				admin_lname,
				admin_user,
				admin_pass,
				admin_tell,
				admin_email
				)		
				VALUES	
				(
				'$admin_initail',
				'$admin_name',
				'$admin_lname',
				'$admin_user',
				'$admin_pass',
				'$admin_tell',
				'$admin_email'	
				)";
			
				$result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));

				mysqli_close($condb);
				
				if($result){
					echo "<script>";
					echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
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
 