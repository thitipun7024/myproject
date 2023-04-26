<meta charset="utf-8">
<?php
if(isset($_POST['der_name'])){
		require_once('Connections/Repair.php');
		$der_name = mysqli_real_escape_string($condb,$_POST['der_name']);
		$pd_detail = mysqli_real_escape_string($condb,$_POST['pd_detail']);
		$rr_date = mysqli_real_escape_string($condb,$_POST['rr_date']);
		$status = mysqli_real_escape_string($condb,$_POST['status']);
		$rr_datel = mysqli_real_escape_string($condb,$_POST['rr_datel']);

		$sql ="INSERT INTO tbl_report
				(
				der_name,
				pd_detail,
				rr_date,
				status,
				rr_datel
				)		
				VALUES	
				(
				'$der_name',
				'$pd_detail',
				'$rr_date',
				'$status',
				'$rr_datel'
				)";
			
				$result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));

				mysqli_close($condb);
				
				if($result){
					echo "<script>";
					echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
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
 
 