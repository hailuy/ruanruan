<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from budget"; //搜索数据表content

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

<td width="700"><a href="index.php">main page</a> | <a href="insert2.php">insert</a> | <a href="delete2.php">delete</a> | <a href="update2.php">update</a> | <a href="select2.php">select</a></td>

</tr>
-->
</table>
<table align="center" width="678">
<tr>
<td>
<form name="form6" method="post" action="post2.php">
<!--
<table>
<tr>
<td>date</td>
<td><input name="date" type="text" id="date"></td>
</tr>
<tr>
<td><br/></td>
</tr>
-->
<table>
<tr>
<td>income</td>
<td><input name="income" type="text" id="income"></td>
</tr>
<tr>
<td><br/></td>
</tr>

<tr>
<td>outcome</td>
<td><input name="outcome" type="text" id="outcome"></td>
</tr>
<tr>
<td><br/></td>
</tr>

<tr>
<td>payer</td>
<td><input name="payer" type="text" id="payer"></td>
</tr>
<tr>
<td><br/></td>
</tr>

<tr>
<td>forwhat</td>
<td><input name="forwhat" type="text" id="forwhat"></td>
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