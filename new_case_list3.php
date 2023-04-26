<?php require_once('Connections/Repair.php');
$query_newsca = "
SELECT * FROM tbl_device_case as d, tbl_status  as t, tbl_report as r
WHERE d.st_id = 3 
AND d.st_id=t.st_id 
AND d.pd_number=r.pd_number
GROUP BY d.pd_number
ORDER BY d.pd_number DESC";
$newsca = mysqli_query($condb , $query_newsca) or die(mysqli_error($condb));
$row_newsca = mysqli_fetch_assoc($newsca);
$totalRows_newsca = mysqli_num_rows($newsca);
//include('datatable.php');
?>


<body>
<h4 style="color:red">ดำเนินการเสร็จสิ้น  </h4>

<table width="100%" border="1" cellspacing="0" class="display" id="example">
		<thead>
        <tr class="info">
    <th width="7%">จัดการ</th>
    <th width="7%">เลขแจ้ง</th>
    <th width="20%">อุปกรณ์/อาการ</th>
    <th width="10%">วันที่แจ้ง</th>
    <th width="15%">ผู้แจ้ง</td>
    <th width="10%">สถานะ</th>
  </tr>
  </thead>
  <?php if($totalRows_newsca > 0){ ?>
  <?php do { ?>
    <tr>
      <td align="center">
      <a href="new_case_detail3.php?pd_number=<?php echo $row_newsca['pd_number']; ?>" target="_blank" class="btn btn-success btn-sm">
      เช็ครายละเอียด </a>
      
      </td>
      <td align="center"><?php echo $row_newsca['pd_number']; ?></td>
      <td>
	  <font color="blue">
      </font>
       
       <?php echo $row_newsca['der_name']; ?>
       <br>
       <font color="red">
	  อาการ : <?php echo $row_newsca['pd_detail']; ?>
      </font>
      <br>
      <font color="blue"> ข้อมูลการซ่อม </font> <br>
      <?php echo $row_newsca['rr_repain_detial']; ?>
      <br>
      เสร็จเมื่อ : <?php echo date('d/m/Y',strtotime($row_newsca['rr_datel'])); ?>
      </td>
      <td><?php echo date('d/m/Y',strtotime($row_newsca['datesave'])); ?></td>
      <td><?php echo $row_newsca['pd_intail']; ?><?php echo $row_newsca['pd_name']; ?>&nbsp; <?php echo $row_newsca['pd_lname']; ?></td>
      <td><?php echo $row_newsca['st_name']; ?></td>
    </tr>
    <?php } while ($row_newsca = mysqli_fetch_assoc($newsca)); ?>
    <?php } ?>
</table>
</body>
</html>
