<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$sq = '`budget`.';


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

	if(!$_GET['id']);
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
		$sq = $sq."`sforwhat` = '$forwhat' ";
	}

}
echo $sq;
$sql = "DELETE FROM `ruan`.`budget` where $sq";

$index = mysql_query($sql);

echo "<script>location.href='index.php';</script>";
?>