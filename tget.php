<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

if($_GET['id'].$_GET['date'].$_GET['unit'].$_GET['total'].$_GET['amount'] == '')
	$sq = '';
else{
	$sq = 'and `board`.';
	if(!$_GET['id']);
	else{
		$id = $_GET['id'];
		if($sq !='and `board`.')
			$sq = $sq."and";
		$sq = $sq."`id` = '$id'";
	}

	if(!$_GET['date']);
	else{
		$date = $_GET['date'];
		if($sq !='and `board`.')
			$sq = $sq."and";
		$sq = $sq." `date` like '$date'";
	}

	if(!$_GET['unit']);
	else{
		$unit = $_GET['unit'];
		if($sq !='and `board`.')
			$sq = $sq."and";
		$sq = $sq." `unit` = '$unit' ";
	}

	if(!$_GET['total']);
	else{
		$total = $_GET['total'];
		if($sq !='and `board`.')
			$sq = $sq."and";
		$sq = $sq." `total` = '$total' ";
	}

	if(!$_GET['amount']);
	else{
		$amount = $_GET['amount'];
		if($sq !='and `board`.')
			$sq = $sq."and";
		$sq = $sq." `amount` = '$amount'";
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