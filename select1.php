<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from staff"; //搜索数据表content

$result = mysql_query($sql,$dbh);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>select</h1></td>
 
</tr>

<tr>

<td width="700"><a href="index.php">main page</a> | <a href="insert1.php">insert</a> | <a href="delete1.php">delete</a> | <a href="update1.php">update</a> | <a href="select1.php">select</a></td>

</tr>

</table>
<table align="center" width="678">

<tr>

<td>

<form name="form8" method="get" action="cget.php">

<p>mno<input name="mno" type="text" id="mno"></p>

<p>sno<input name="sno" type="text" id="sno"></p>

<input type="submit" name="button" id="button" value="select">

<input type="reset" name="button2" id="button2" value="reset">

</form>

</td>

</tr>

</table>

</body>

</html>

