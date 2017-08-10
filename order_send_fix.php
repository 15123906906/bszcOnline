<?php
	$orderID = $_REQUEST['orderID'];
	$staffID = $_REQUEST['staffID'];
	
	//链接数据库
	$conn = mysqli_connect('127.0.0.1','root','','bszc');
	
	//发送SQL语句
	$sql = "UPDATE orderi SET send='$staffID' WHERE orderID=$orderID";
	//执行SQL语句
	//告诉数据库接下来的SQL语句的编码方式
	mysqli_query($conn,'SET NAMES utf8');
	$result = mysqli_query($conn,$sql);
	if($result){
		echo json_encode($result);
	}else{
		echo json_encode(false);
	}
?>