<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

if($_GET['number'].$_GET['date'].$_GET['mno'].$_GET['nickname'].$_GET['word'] == '')
	$sq = '';
else{
	$sq = 'and `board`.';
	if(!$_GET['number']);
	else{
		$name = $_GET['number'];
		if($sq != 'and `board`.')
			$sq = $sq."and";
		$sq = $sq."`number` = '$number'";
	}
	
	if(!$_GET['date']);
	else{
		if($sq != 'and `board`.')
			$sq = $sq."and";
		$id = $_GET['date'];
		$sq = $sq."`date` = '$date'";
	}
	
	if(!$_GET['mno']);
	else{
		if($sq != 'and `board`.')
			$sq = $sq."and";
		$sq = $sq."`mno` = '$mno'";
	}
	
	if(!$_GET['nickname']);
	else{
		$brand = $_GET['nickname'];
		if($sq != 'and `board`.')
			$sq = $sq."and";
		$sq = $sq."`nickname` = '$nickname' ";
	}
	
	if(!$_GET['word']);
	else{
		$brand = $_GET['word'];
		if($sq != 'and `board`.')
			$sq = $sq."and";
		$sq = $sq."`word` = '$word' ";
	}
	
}

$sql = "select * from `ruan`.`board` where 1 = 1 $sq";
echo $sql;
$index = mysql_query($sql);

?>


<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>board</h1></td>

</tr>

<tr>

<td width="600"><a href="index.php">board</a> | <a href="insert2.php">insert</a> | <a href="delete2.php">delete</a> | <a href="update2.php">update</a> | <a href="select2.php">select</a></td>

</tr>

</table>

<table width="500" border="1" align="center" cellpadding="1" cellspacing="1">

<tr>

<td width="100">number</td>

<td width="100">date</td>

<td width="100">mno</td>

<td width="100">nickname</td>

<td width="100">word</td>

</tr>

<?php

while($row=mysql_fetch_array($result))

{
?>

<tr>

<td width="100"><?php echo $row[0] ?></td>

<td width="100"><?php echo $row[1] ?></td>

<td width="100"><?php echo $row[2] ?></td>

<td width="100"><?php echo $row[3] ?></td>

<td width="100"><?php echo $row[4] ?></td>

</tr>

<?php

}

mysql_close($q);

?>

</table>

</body>

</html>