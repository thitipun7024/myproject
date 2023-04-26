<?php require_once('Connections/Repair.php');
$query_rsm = "SELECT * FROM tbl_admin";
$rsm = mysqli_query($condb, $query_rsm) or die(mysqli_error($condb));
$row_rsm = mysqli_fetch_assoc($rsm);
$totalRows_rsm = mysqli_num_rows($rsm);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table border="1" class="table table-bordered">
  <tr class="info">
    <td width="5%">id</td>
    <td width="20%">ชื่อ-สกุล</td>
    <td width="10%">user</td>
    <td width="10%">password</td>
    <td width="10%">เบอร์โทร</td>
    <td width="10%">อีเมล์</td>
    <td width="5%">แก้ไข</td>
    <td width="5%">ลบ</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rsm['admin_id']; ?></td>
      <td><?php echo $row_rsm['admin_initail']; ?><?php echo $row_rsm['admin_name']; ?>&nbsp; <?php echo $row_rsm['admin_lname']; ?></td>
      <td><?php echo $row_rsm['admin_user']; ?></td>
      <td><?php echo $row_rsm['admin_pass']; ?></td>
      <td><?php echo $row_rsm['admin_tell']; ?></td>
      <td><?php echo $row_rsm['admin_email']; ?></td>
      <td align="center">
      <a href="member.php?admin_id=<?php echo $row_rsm['admin_id'];?>&act=edit" class="btn btn-warning btn-xs">แก้ไข</a></td>
      <td align="center">
      <a href="admin_del.php?admin_id=<?php echo $row_rsm['admin_id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('ยืนยัน')">ลบ</a></td>
    </tr>
    <?php } while ($row_rsm = mysqli_fetch_assoc($rsm)); ?>
</table>

</body>
</html>