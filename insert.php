<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from member"; //搜索数据表content

$result = mysql_query($sql);

?>
<html>
<head>
<script type=text/javascript>
function nextPgae(){
    document.getElementById("boton").style.display = 'none';
    document.getElementById("envio").innerHTML ="<br><img src='img/loading.gif' width='16' height='16' border='0'>Generando...";     
    return true;	
}
</script>
</head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body style="background-image: url(news-bg.png)">

<table width="678" align="center">

<!--

<tr>

<td colspan="2"><h1>insert</h1></td>

</tr>

<tr>

<td width="700"><a href="index.php">main page</a> | <a href="insert.php">insert</a> | <a href="delete.php">delete</a> | <a href="update.php">update</a> | <a href="select.php">select</a></td>

</tr>
-->

</table>

<table align="center" width="678">
<tr>
<td>

<form name="form1" method="post" action="post.php">
<table>
<tr>
<td>mno</td>
<td><input name="mno" type="text" id="mno"></td>
</tr>

<tr>
<td><br/></td>
</tr>

<tr>
<td>fname</td>
<td><input name="fname" type="text" id="fname"></td>
</tr>
<tr>
<td><br/></td>
</tr>

<tr>
<td>lname</td>
<td><input name="lname" type="text" id="lname"></td>
</tr>
<tr>
<td><br/></td>
</tr>

<tr>
<td>qq</td>
<td><input name="qq" type="text" id="qq"></td>
</tr>
<tr>
<td><br/></td>
</tr>

<tr>
<td>wechat</td>
<td><input name="wechat" type="text" id="wechat"></td>
</tr>
<tr>
<td><br/></td>
</tr>

<tr>
<td>tel</td>
<td><input name="tel" type="text" id="tel"></td>
</tr>
<tr>
<td><br/></td>
</tr>

<tr>
<td>email</td>
<td><input name="email" type="text" id="email"></td>
</tr>
<tr>
<td><br/></td>
</tr>

<tr>
<td>part</td>
<td><input name="part" type="text" id="part"></td>
</tr>
<tr>
<td><br/></td>
</tr>
</table>
<p>

<input type="submit" name="button" id="button"  value="submit">

<input type="reset" name="button2" id="button2" value="reset">

</form>

</td>
</tr>
</table>

</body>

</html>