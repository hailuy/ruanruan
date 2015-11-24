<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from member"; //搜索数据表content

$result = mysql_query($sql,$dbh);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body style="background-image: url(news-bg.png)">

<table width="678" align="center">

<tr>

<td colspan="2"><h1>select</h1></td>

</tr>

<tr>

<td width="700"><a href="index.php">main page</a> | <a href="insert.php">insert</a> | <a href="delete.php">delete</a> | <a href="update.php">update</a> | <a href="select.php">select</a></td>

</tr>

</table>
<table align="center" width="678">

<tr>

<td>

<form name="form2" method="get" action="get.php">

<p>mno<input name="mno" type="text" id="mno"></p>

<p>fname<input name="fname" type="text" id="fname"></p>

<p>lname<input name="lname" type="text" id="lname"></p>

<p>qq<input name="qq" type="text" id="qq"></p>

<p>wechat<input name="wechat" type="text" id="wechat"></p>

<p>tel<input name="tel" type="text" id="tel"></p>

<p>email<input name="email" type="text" id="email"></p>

<p>part<input name="part" type="text" id="part"></p>

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