<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$no=$_POST['no3'];
 $sql = "delete from anniversary where no='$no'";
  
        mysql_query($sql);
       
        header('Location: register.php');
    exit;
        ?>