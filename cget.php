<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

if($_GET['sno'].$_GET['mno'] == '')
	$sq = '';
else{
	$sq = 'and `staff`.';
	if(!$_GET['sno']);
	else{
		$sno = $_GET['sno'];
		if($sq !='and `staff`.')
			$sq = $sq."and";
		$sq = $sq."`sno` = '$sno'";
	}
	
	if(!$_GET['mno']);
	else{
		$mno = $_GET['mno'];
		if($sq !='and `staff`.')
			$sq = $sq."and";
		$sq = $sq." `mno` like '$mno'";
	}
	
}

echo $sq;
$sql = "select * from `ruan`.`staff` where 1 = 1 $sq";
echo $sql;
$index = mysql_query($sql);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>staff</h1></td>

</tr>

<tr>

<td width="600"><a href="index.php">main page</a> | <a href="insert.php">insert</a> | <a href="delete.php">delete</a> | <a href="update.php">update</a> | <a href="select.php">select</a></td>

</tr>

</table>

<table width="700" border="1" align="center" cellpadding="1" cellspacing="1">

<tr>

<td width="100">sno</td>

<td width="100">mno</td>

</tr>

<?php

while($row=mysql_fetch_array($index))

{
?>

<tr>

<td width="100"><?php echo $row[0] ?></td>

<td width="100"><?php echo $row[1] ?></td>

</tr>

<?php

}

mysql_close($q);

?>

</table>

</body>

</html>