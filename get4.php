<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

if($_GET['date'].$_GET['income'].$_GET['outcome'].$_GET['payer'].$_GET['forwhat'] == '')
	$sq = '';
else{
	$sq = 'and `budget`.';
	if(!$_GET['date']);
	else{
		$name = $_GET['date'];
		if($sq != 'and `budget`.')
			$sq = $sq."and";
		$sq = $sq."`date` = '$date'";
	}
	
	if(!$_GET['income']);
	else{
		if($sq != 'and `budget`.')
			$sq = $sq."and";
		$id = $_GET['income'];
		$sq = $sq."`income` = '$income'";
	}
	
	if(!$_GET['outcome']);
	else{
		if($sq != 'and `budget`.')
			$sq = $sq."and";
		$sq = $sq."`outcome` = '$outcome'";
	}
	
	if(!$_GET['payer']);
	else{
		$brand = $_GET['payer'];
		if($sq != 'and `budget`.')
			$sq = $sq."and";
		$sq = $sq."`payer` = '$payer' ";
	}
	
	if(!$_GET['forwhat']);
	else{
		$brand = $_GET['forwhat'];
		if($sq != 'and `budget`.')
			$sq = $sq."and";
		$sq = $sq."`forwhat` = '$forwhat' ";
	}
	
}

$sql = "select * from `ruan`.`budget` where 1 = 1 $sq";
echo $sql;
$index = mysql_query($sql);

?>


<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>budget</h1></td>

</tr>

<tr>

<td width="600"><a href="index.php">budget</a> | <a href="insert2.php">insert</a> | <a href="delete2.php">delete</a> | <a href="update2.php">update</a> | <a href="select2.php">select</a></td>

</tr>

</table>

<table width="500" border="1" align="center" cellpadding="1" cellspacing="1">

<tr>

<td width="100">date</td>

<td width="100">id</td>

<td width="100">outcome</td>

<td width="100">payer</td>

<td width="100">forwhat</td>

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