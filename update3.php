<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from board"; //搜索数据表content

$result = mysql_query($sql,$dbh);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>update</h1></td>

</tr>

<tr>

<td width="700"><a href="index.php">main page</a> | <a href="insert3.php">insert</a> | <a href="delete3.php">delete</a> | <a href="update3.php">update</a> | <a href="select3.php">select</a></td>

</tr>

</table>
<table align="center" width="678">

<tr>

<td>

<form name="form4" method="get" action="get2.php">

<p>number<input name="number" type="text" id="number"></p>

<p>date<input name="date" type="text" id="date"></p>

<p>mno<input name="mno" type="text" id="mno"></p>

<p>name<input name="nickname" type="text" id="nickname"></p>

<p>word<input name="word" type="text" id="word"></p>

<p>

<input type="submit" name="button" id="button" value="update">

<input type="reset" name="button2" id="button2" value="reset">

</p>

</form>

</td>

</tr>

</table>

</body>

</html>

