<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$sq = '';

echo "$sq";

if(!$_GET['mno']);
else{
	$mno = $_GET['mno'];
	$sq = $sq."`p`.`mno` = `p`.`mno` + '$mno'";
}
	
if(!$_GET['fname']);
else{
	$name = $_GET['fname'];
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`fname` = `p`.`fname` + '$name'";
}

if(!$_GET['lname']);
else{
	$name = $_GET['lname'];
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`lname` = `p`.`lname` + '$name'";
}

if(!$_GET['qq']);
else{
	$qq = $_GET['qq'];
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`qq` = `p`.`qq` + '$qq' ";
}

if(!$_GET['wechat']);
else{
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`wechat` = `p`.`wechat` +กก'$wechat' ";
}

if(!$_GET['tel']);
else{
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`tel` = `p`.`tel` + '$tel'";	
}

if(!$_GET['email']);
else{ 
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`email` = `p`.`email` + '$email'";
}

if(!$_GET['part']);
else{
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`fpart` = `p`.`fpart` + '$part'";
}
$sql = "update `ruan`.`member` `p` set $sq";

$index = mysql_query($sql);

echo "$sq";

?>