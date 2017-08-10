<?php
	$orderID = $_REQUEST['orderID'];

	//链接数据库
	$conn = mysqli_connect('127.0.0.1','root','','bszc');
	mysqli_query($conn,'SET NAMES utf8');
	
	$sql = $sql = "SELECT carID,orderNum,orderPirce,userName FROM orders WHERE orderID='$orderID'";

	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQL_ASSOC);

	if($row){
		echo json_encode($row);
	}
?>