<?php
	$staffID = $_REQUEST['staffID'];

	//链接数据库
	$conn = mysqli_connect('127.0.0.1','root','','bszc');
	//告诉数据库接下来的SQL语句的编码方式
	mysqli_query($conn,'SET NAMES utf8');
	
	//发送SQL语句
	$sql = "DELETE FROM staffi WHERE staffID='$staffID'";
	$result = mysqli_query($conn,$sql);

	if($result){
		echo json_encode(true);
	}
?>