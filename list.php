<html>
<?php include_once("analyticstracking.php") ?>
<style language='text/css'>
.table1{
　border:3px #FFAC55 double;
　padding:5px;
}
.table1 td{
　font-size:14px;
　color:pink;
}
.table1 td.red{
　font-size:14px;
　color:red;
}
.table1 td.green{
　font-size:14px;
　color:green;
}
.table1 td.blue{
　font-size:14px;
　color:blue;
}
.table1 td.white{
　font-size:14px;
　color:white;
}
</style>
<font size=7><strong>全成市集</strong></font><font size=6>NCKU Market</font><img src="man.png" align="right" style="width:3%;margin-right:50px;marginbottom:-50px;"><br>
<hr width=99% size="1px" align="center" noshade /><br>
<font size=4>共有二大型主題，一為由系會或社團所組成的園遊會，二為以台南在地文創所形成的文創市集展。</font><br>
<font size=4>Two kinds of themes can be found in the carnival, including "Shops and Stands" comprised of clubs and department associations and "Cultural Market" combined with local culture in Tainan.</font><br>
<br><br>

<font size=5><strong>園遊會 Carnival</strong></font><br>
<hr width=95% size="1px"  noshade /><br>
<img src="shop.jpg" alt="海報" width=80%><br><br>
<font size=5><strong>市集擺攤申請名單 Application of Shops and Stands</strong></font><br><br>
<img src="site.jpg">
<font size=4>*編號1~66為安排之攤位順序。</font><br>
<?
include("mysql_connect.inc.php");
$sql = "SELECT * FROM anniversary";
  $result = mysql_query($sql);
  $no_fields=mysql_num_fields($result);
  echo "<table class=\'table1\'  width=100%  cellspacing=50% style=\"border:5px #FFFFFF solid;\" rules=\"all\" cellpadding=\'80\';><caption>";
  echo "<tr ><td width=5% align=center height=30px>攤位編號</td><td width=10% align=center>類型</td><td width=33% align=center>單位</td><td width=33% align=center>說明</td><td width=10% align=center>攤位數量</td><td width=5% align=center>繳費</td><td align=center width=5%>確認</td></tr>";
  while($x=mysql_fetch_row($result)){
     echo '<tr>';
     for($j=0;$j<$no_fields;$j++)
        echo "<td align=center height=30px> $x[$j]</td>";
     echo "</tr>";
  }
  echo "</table><br>";
  echo '最後更新日期：2014年11月04日 上午12:00 由<strong>成大學生會資訊部</strong>維護';
        ?>
        </html>