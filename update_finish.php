<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$no=$_POST['no2'];
$ip=$_SERVER["REMOTE_ADDR"];
if($_POST['type2']==null && $_POST['unit2']==null && $_POST['ps2']==null && $_POST['num2']==null && $_POST['pay2']==null && $_POST['confirm2']==null)
{
	echo "請問你要修改什麼?!";
	exit;
}
if($_POST['type2'] !=null)
{
$type=$_POST['type2'];
$sql = "update anniversary set type=\"$type\" where no=\"$no\"";
if(mysql_query($sql))
{
	echo "類型更新成功<br>";
}
else
{
	echo "類型更新失敗<br>";
}

}
if($_POST['unit2'] !=null)
{
$unit=$_POST['unit2'];
$sql = "update anniversary set unit=\"$unit\" where no=\"$no\"";
if(mysql_query($sql))
{
	echo "單位更新成功<br>";
}
else
{
	echo "單位更新失敗<br>";
}
}
if($_POST['ps2'] !=null)
{
$ps=$_POST['ps2'];
$sql = "update anniversary set ps=\"$ps\" where no=\"$no\"";
if(mysql_query($sql))
{
	echo "備註更新成功<br>";
}
else
{
	echo "備註更新失敗<br>";
}
}
if($_POST['num2'] !=null)
{
$num=$_POST['num2'];
$sql = "update anniversary set num=\"$num\" where no=\"$no\"";
if(mysql_query($sql))
{
	echo "數量更新成功<br>";
}
else
{
	echo "數量更新失敗<br>";
}
}

if($_POST['pay2'] !=null)
{
	$pay=$_POST['pay2'];
	$sql = "update anniversary set pay=\"$pay\" where no=\"$no\"";
if(mysql_query($sql))
{
	echo "繳費更新成功<br>";
}
else
{
	echo "繳費更新失敗<br>";
}
}
if($_POST['confirm2'] !=null)
{
$confirm=$_POST['confirm2'];
	$sql = "update anniversary set confirm=\"$confirm\" where no=\"$no\"";
if(mysql_query($sql))
{
	echo "確認更新成功<br>";
}
else
{
	echo "確認更新失敗<br>";
}
}
echo "<br> <br>更新已被核實，來自IP位址：";
echo $ip;
echo "<br>請返回上一頁";
 //header('Location: register.php');
   // exit;
?>
