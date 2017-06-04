<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$type=$_POST['type1'];
$unit=$_POST['unit'];
$ps=$_POST['ps'];
$num=$_POST['num'];
$pay=$_POST['pay'];
$confirm=$_POST['confirm'];
$sql = "insert into anniversary (type, unit, ps, num, pay, confirm) values ('$type' , '$unit' , '$ps' , '$num' , '$pay' , '$confirm')";
//$sql = "insert into anniversary (type, unit, ps, num, pay, confirm) values ('1', '1' , '$1', '1', '1', '1')";
if(mysql_query($sql))
{
header('Location: register.php');
    exit;
}
else
{
	echo "失敗!";
}
?>
