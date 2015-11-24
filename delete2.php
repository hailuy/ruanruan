<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from budget"; //搜索数据表content

$result = mysql_query($sql,$dbh);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>delete</h1></td>

</tr>

<tr>

<td width="700"><a href="index.php">main page</a> | <a href="insert2.php">insert</a> | <a href="delete2.php">delete</a> | <a href="update2.php">update</a> | <a href="select2.php">select</a></td>

</tr>

</table>
<table align="center" width="678">

<tr>

<td>

<form name="form12" method="get" action="sget1.php">

<p>date<input name="date" type="text" id="date"></p>

<p>income<input name="income" type="text" id="income"></p>

<p>outcome<input name="outcome" type="text" id="outcome"></p>

<p>payer<input name="payer" type="text" id="payer"></p>

<p>forwhat<input name="forwhat" type="text" id="forwhat"></p>


<p>

<input type="submit" name="button" id="button" value="delete">

<input type="reset" name="button2" id="button2" value="reset">

</p>

</form>

</td>

</tr>

</table>

</body>

</html>

