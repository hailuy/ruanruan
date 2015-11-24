<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$sq = '`member`.';

if($_GET['mno'].$_GET['fname'].$_GET['lname'].$_GET['qq'].$_GET['wechat'].$_GET['tel'].$_GET['email'].$_GET['part'] == '')
	$sq = '';
else{
	$sq = ' `member`.';
	if(!$_GET['mno']);
	else{
		$mno = $_GET['mno'];
		if($sq !=' `member`.')
			$sq = $sq."and";
		$sq = $sq."`mno` = '$mno'";
	}

	if(!$_GET['fname']);
	else{
		$fname = $_GET['fname'];
		if($sq !=' `member`.')
			$sq = $sq."and";
		$sq = $sq." `fname` like '$fname'";
	}

	if(!$_GET['lname']);
	else{
		$lname = $_GET['lname'];
		if($sq !=' `member`.')
			$sq = $sq."and";
		$sq = $sq." `lname` like '$lname' ";
	}

	if(!$_GET['qq']);
	else{
		$qq = $_GET['qq'];
		if($sq !=' `member`.')
			$sq = $sq."and";
		$sq = $sq." `qq` = '$qq' ";
	}

	if(!$_GET['wechat']);
	else{
		$wechat = $_GET['wechat'];
		if($sq !=' `member`.')
			$sq = $sq."and";
		$sq = $sq." `wechat` = '$wechat'";
	}

	if(!$_GET['tel']);
	else{
		$tel = $_GET['tel'];
		if($sq !=' `member`.')
			$sq = $sq."and";
		$sq = $sq." `tel` = '$tel'";
	}

	if(!$_GET['email']);
	else{
		$email = $_GET['email'];
		if($sq !=' `member`.')
			$sq = $sq."and";
		$sq = $sq." `email` = '$email'";
	}

	if(!$_GET['part']);
	else{
		$part = $_GET['part'];
		if($sq !=' `member`.')
			$sq = $sq."and";
		$sq = $sq." `part` = '$part'";
	}
}

$sql = "DELETE FROM `ruan`.`member` where $sq";
$index = mysql_query($sql);

echo "<script>location.href='index.php';</script>";
?>