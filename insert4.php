<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from viewboard"; //搜索数据表content

$result = mysql_query($sql,$dbh);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body style="background-image: url(news-bg.png)">

<table width="678" align="center">
<!--
<tr>

<td colspan="2"><h1>insert</h1></td>

</tr>

<tr>

<td width="700"><a href="index.php">main page</a> | <a href="insert3.php">insert</a> | <a href="delete3.php">delete</a> | <a href="update3.php">update</a> | <a href="select3.php">select</a></td>

</tr>
-->
</table>
<table align="center" width="678">
<tr>
<td>

<form name="form7" method="post" action="post4.php">
<table>
<tr>
<td>number</td>
<td><input name="number" type="text" id="number"></td>
</tr>
<tr>
<td><br/></td>
</tr>

<tr>
<td>date</td>
<td><input name="date" type="text" id="date"></td>
</tr>
<tr>
<td><br/></td>
</tr>

<tr>
<td>word</td>
<td><input name="word" type="text" id="word"></td>
</tr>
<tr>
<td><br/></td>
</tr>
</table>

<p>

<input type="submit" name="button" id="button" value="submit">

<input type="reset" name="button2" id="button2" value="reset">

</p>

</form>

</td>

</tr>

</table>

</body>

</html>