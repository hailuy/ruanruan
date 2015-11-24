<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$sq = '';

echo "$sq";

if(!$_GET['id']);
else{
	$id = $_GET['id'];
	$sq = $sq."`p`.`id` = $id";
}
	
if(!$_GET['name']);
else{
	$name = $_GET['name'];
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`fname` = '$name'";
}
	
if(!$_GET['brand']);
else{
	$brand = $_GET['brand'];
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`fbrand` = '$brand' ";
}

if(!$_GET['due']);
else{
	if($sq)
		$sq = $sq."and";echo "due".'$due';
	$sq = $sq."`p`.`duedate` += '$due' ";
}

if(!$_GET['area']);
else{
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`area` = '$area'";	
}

if(!$_GET['price']);
else{
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`fprice` = `p`.`fprice` + '$price'";
}

if(!$_GET['amount']);
else{
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`famount` = `p`.`famount` + '$amount'";
}
$sql = "update `pro`.`food` `p` set $sq";

$index = mysql_query($sql);

echo "$sq";

?>