<?php
	$orderID = $_REQUEST['orderID'];

	//链接数据库
	$conn = mysqli_connect('127.0.0.1','root','','bszc');
	
	//发送SQL语句
	$sql = "SELECT orderStart,orderStop,getTime,address,orderPay FROM orderi WHERE orderID='$orderID'";
	//执行SQL语句
	//告诉数据库接下来的SQL语句的编码方式
	mysqli_query($conn,'SET NAMES utf8');
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQL_ASSOC);
	if($row){
		echo json_encode($row);
	}
?>