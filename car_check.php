<?php
	$car = $_REQUEST['car'];

	//链接数据库
	$conn = mysqli_connect('127.0.0.1','root','','bszc');
	//告诉数据库接下来的SQL语句的编码方式
	mysqli_query($conn,'SET NAMES utf8');
	
	//发送SQL语句
	$sql = "SELECT car FROM producti WHERE car='$car'";
	//执行SQL语句
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_array($result,MYSQL_ASSOC);//存放账号密码

	if(count($row)>0){
		echo json_encode("true");
	}else{
		echo json_encode("false");
	}
?>