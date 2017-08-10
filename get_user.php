<?php
	$userName = $_REQUEST['userName'];
	
	//链接数据库
	$conn = mysqli_connect('127.0.0.1','root','','bszc');
	mysqli_query($conn,'SET NAMES utf8');

	//发送SQL语句
	$sql = "SELECT name,telNum,IDCard,email FROM user WHERE userName='$userName'";
	$result = mysqli_query($conn,$sql);	
	$row = mysqli_fetch_array($result,MYSQL_ASSOC);	
	if($row){
		echo json_encode($row);
	}
?>