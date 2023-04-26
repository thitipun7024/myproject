<?php 
session_start();
        if(isset($_POST['admin_user'])){
                  require_once('Connections/Repair.php');
                  $admin_user = mysqli_real_escape_string($condb, $_POST['admin_user']);
                  $admin_pass = mysqli_real_escape_string($condb, $_POST['admin_pass']);

                  $sql="SELECT * FROM tbl_admin 
                  WHERE  admin_user='".$admin_user."'  AND  admin_pass='".$admin_pass."' ";

                  $result = mysqli_query($condb,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["admin_id"] = $row["admin_id"];
                      $_SESSION["admin_name"] = $row["admin_name"];
                      $_SESSION["admin_user"] = $row["admin_user"];

                      if($_SESSION["admin_id"]!=''){ 
                        Header("Location: admin.php");
                      }
                      
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{
             Header("Location: index.php"); //user & admin_pass incorrect back to login again
        }
?>