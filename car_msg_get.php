<?php
	$carID = $_REQUEST['carID'];
	
	//链接数据库
	$conn = mysqli_connect('127.0.0.1','root','','bszc');
	mysqli_query($conn,'SET NAMES utf8');

	//发送SQL语句
	$sql = "SELECT car,pirce FROM producti WHERE carID='$carID'";
	$result = mysqli_query($conn,$sql);	
	$row = mysqli_fetch_array($result,MYSQL_ASSOC);	
	if($row){
		echo json_encode($row);
	}
?>