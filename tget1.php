<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$sq = '`stock`.';

if($_GET['id'].$_GET['date'].$_GET['unit'].$_GET['total'].$_GET['amount'] == '')
	$sq = '';
else{
	if(!$_GET['id']);
	else{
		$id = $_GET['id'];
		if($sq !='`stock`.')
			$sq = $sq."and";
		$sq = $sq."`id` = '$id'";
	}

	if(!$_GET['date']);
	else{
		$date = $_GET['date'];
		if($sq !='`stock`.')
			$sq = $sq."and";
		$sq = $sq." `date` like '$date'";
	}

	if(!$_GET['unit']);
	else{
		$unit = $_GET['unit'];
		if($sq !='`stock`.')
			$sq = $sq."and";
		$sq = $sq." `unit` = '$unit' ";
	}

	if(!$_GET['total']);
	else{
		if($sq !='`stock`.')
			$sq = $sq."and";
		$sq = $sq." `total` = '$total'";
	}

	if(!$_GET['amount']);
	else{
		if($sq !='`stock`.')
			$sq = $sq."and";
		$sq = $sq." `amount` = '$amount'";
	}
}

echo $sq;
$sql = "DELETE FROM `pro`.`stock` where $sq";

$index = mysql_query($sql);

echo "<script>location.href='index.php';</script>";
?>