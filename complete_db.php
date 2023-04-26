<meta charset="utf-8">
<?php
		if(isset($_POST['admin_id'])){
		require_once('Connections/Repair.php');
		$admin_id = mysqli_real_escape_string($condb,$_POST['admin_id']);
		$st_id = mysqli_real_escape_string($condb,$_POST['st_id']);
		$rr_datel = date('Y-m-d');
		$pd_number = mysqli_real_escape_string($condb,$_POST['pd_number']);
		$rr_repain_detial = mysqli_real_escape_string($condb,$_POST['rr_repain_detial']);

		$sql1 ="UPDATE tbl_report  SET
		rr_datel='$rr_datel',
		rr_repain_detial='$rr_repain_detial',
		admin_id='$admin_id'
		WHERE pd_number=$pd_number";	
		$result1 = mysqli_query($condb, $sql1) or die("Error in query : $sql1" .mysqli_error($condb));

		
		$sql ="UPDATE tbl_device_case SET st_id=$st_id WHERE pd_number=$pd_number";
		$result = mysqli_query($condb, $sql) or die("Error in query : $sql" .mysqli_error($condb));
		mysqli_close($condb);
		/*
		echo $sql1;
		echo "<hr>";
		echo $sql;
		exit;
		*/
				
		if($result){
		echo "<script>";
		echo "alert('ส่งงานเรียบร้อยแล้ว');";
		echo "window.location ='new_case.php?act=3'; ";
		echo "</script>";
		} else {

		echo "<script>";
		echo "alert('ERROR!');";
		echo "window.location ='new_case.php?act=3'; ";
		echo "</script>";
		}

}else{
             Header("Location: index.php"); //isset
        }

?>
 