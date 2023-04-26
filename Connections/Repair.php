<?php
// Turn off all error reporting
error_reporting(0);
$condb= mysqli_connect("localhost","root","","project_db_r") or die("Error: " . mysqli_error($condb));
mysqli_query($condb, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>