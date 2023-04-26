<?php 
session_start();
//print_r($_SESSION);
require_once('Connections/Repair.php'); 



$admin_id = $_SESSION['admin_id'];
if($admin_id==''){
	Header("Location: index.php");
}
$query_mmadin = ("SELECT * FROM tbl_admin WHERE admin_id =$admin_id");
$mmadin = mysqli_query($condb, $query_mmadin);// or die(mysqli_error());
$row_mmadin = mysqli_fetch_assoc($mmadin);
$totalRows_mmadin = mysqli_num_rows($mmadin);
if($totalRows_mmadin < 0){
	Header("Location: index.php");
}

?>
