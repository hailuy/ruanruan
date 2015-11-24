<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from member"; //搜索数据表content

$result = mysql_query($sql);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body style="background-image: url(news-bg.png)">

<table width="678" align="center">

<tr>

<td colspan="2"><h1>delete</h1></td>

</tr>

</table>
<table align="center" width="678">

<tr>

<td>

<form name="form3" method="get" action="get1.php">

<p>mno<input name="mno" type="text" id="mno"></p>

<p>fname<input name="fname" type="text" id="fname"></p>

<p>lname<input name="lname" type="text" id="lname"></p>

<p>qq<input name="qq" type="text" id="qq"></p>

<p>wechat<input name="wechat" type="text" id="wechat"></p>

<p>tel<input name="tel" type="text" id="tel"></p>

<p>email<input name="email" type="text" id="email"></p>

<p>part<input name="part" type="text" id="part"></p>

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

