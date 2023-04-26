<meta charset="utf-8">
<?php
if(isset($_POST['der_name'])){
	require_once('Connections/Repair.php');
	$der_name = mysqli_real_escape_string($condb,$_POST['der_name']);
	$sql ="INSERT INTO tbl_devices
			(
			der_name
			)		
			VALUES	
			(
			'$der_name'
			)";
		
			$result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));
			mysqli_close($condb);
			
			if($result){
				echo "<script>";
				echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
				echo "window.location ='device.php'; ";
				echo "</script>";
			} else {
				
				echo "<script>";
				echo "alert('ERROR!');";
				echo "window.location ='device.php'; ";
				echo "</script>";
			}


		}else{
             Header("Location: index.php"); //isset
        }

?>

 