<?php
	$userID = $_REQUEST['userID'];
	
	//链接数据库
	$conn = mysqli_connect('127.0.0.1','root','','bszc');
	mysqli_query($conn,'SET NAMES utf8');

	//发送SQL语句
	$sql = "SELECT name,gender FROM user WHERE userID='$userID'";
	$result = mysqli_query($conn,$sql);	
	$row = mysqli_fetch_array($result,MYSQL_ASSOC);	
	echo json_encode($row);
?>