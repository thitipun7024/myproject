<?php 
require_once('Connections/Repair.php');


$query_derid = "SELECT * FROM tbl_devices";
$derid = mysqli_query($condb, $query_derid) or die(mysqli_error($condb));
$row_derid = mysqli_fetch_assoc($derid);
$totalRows_derid = mysqli_num_rows($derid);

$query_lastid = "SELECT * FROM tbl_device_case ORDER BY pd_number DESC";
$lastid = mysqli_query($condb, $query_lastid) or die(mysqli_error($condb));
$row_lastid = mysqli_fetch_assoc($lastid);
$totalRows_lastid = mysqli_num_rows($lastid);

include('datatable.php');
include('Bootstrap_sc.php');
?>
<body>
<div class="container">
  <div class="row">
  	<div class="col-md-12">
    	<?php include('banner.php');?>
    </div>
    <div class="col-md-2">
    <br>
        <?php include('menu_left.php');?>

    </div>
    
    <div class="col-md-10">
    	<?php include('showlist_all.php');?>
    </div>
  </div> 
</div>
</body>
</html>
<?php include('footer.php');?>
