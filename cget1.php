<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

if($_GET['sno'].$_GET['mno'] == '')
	$sq = '';
else{
	$sq = ' `staff`.';
	if(!$_GET['sno']);
	else{
		$sno = $_GET['sno'];
		if($sq !=' `staff`.')
			$sq = $sq."and";
		$sq = $sq."`sno` = '$sno'";
	}
	
	if(!$_GET['mno']);
	else{
		$mno = $_GET['mno'];
		if($sq !=' `staff`.')
			$sq = $sq."and";
		$sq = $sq." `mno` like '$mno'";
	}
	
}

$sql = "DELETE FROM `ruan`.`staff` where $sq";
echo $sql;

$index = mysql_query($sql);

//echo "<script>location.href='index.php';</script>";
?>