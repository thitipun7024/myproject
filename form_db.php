<meta charset="utf-8">
<?php
if(isset($_POST['device'])){
		require_once('Connections/Repair.php');
		$result = mysqli_real_escape_string($condb,$_POST['device']);  // value ที่ส่งมา
		$result_explode = explode('-', $result);   // ขั้นด้วย '-
		$der_id = $result_explode[0];
		$der_name = $result_explode[1];
		$pd_date = date('Y-m-d');
		$pd_detail = mysqli_real_escape_string($condb,$_POST['pd_detail']);
		$pd_intail = mysqli_real_escape_string($condb,$_POST['pd_intail']);
		$pd_name = mysqli_real_escape_string($condb,$_POST['pd_name']);
		$pd_lname = mysqli_real_escape_string($condb,$_POST['pd_lname']);
		$pd_position = mysqli_real_escape_string($condb,$_POST['pd_position']);
		$pd_tell = mysqli_real_escape_string($condb,$_POST['pd_tell']);
		$pd_email = mysqli_real_escape_string($condb,$_POST['pd_email']);
		$st_id = 1;

		$sql ="INSERT INTO tbl_device_case
				(
				der_id,
				der_name,
				pd_detail,
				pd_date,
				pd_intail,
				pd_name,
				pd_lname,
				pd_position,
				pd_tell,
				pd_email,
				st_id
				)		
				VALUES	
				(
				'$der_id',
				'$der_name',
				'$pd_detail',
				'$pd_date',
				'$pd_intail',
				'$pd_name',
				'$pd_lname',
				'$pd_position',	
				'$pd_tell',
				'$pd_email',
				'$st_id'
				)";
				$result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));
				mysqli_close($condb);
				if($result){
					echo "<script>";
					echo "alert('เพิ่มข้อมูลแจ้งซ่อมเรียบร้อยแล้ว');";
					echo "window.location ='form_detail.php'; ";
					echo "</script>";
				} else {
					
					echo "<script>";
					echo "alert('ERROR!');";
					echo "window.location ='form_detail.php'; ";
					echo "</script>";
				}
		
}else{
             Header("Location: index.php"); //isset
        }

?>

 