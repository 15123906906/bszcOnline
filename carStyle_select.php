<?php
	$brand = $_REQUEST['brand'];

	//链接数据库
	$conn = mysqli_connect('127.0.0.1','root','','bszc');
	mysqli_query($conn,'SET NAMES utf8');

	//发送SQL语句
	if($brand == '不限'){
		$sql = "SELECT car FROM producti";
	}else if($brand != '不限'){
		$sql = "SELECT car FROM producti WHERE brand='$brand'";
	}
	$result = mysqli_query($conn,$sql);
	$data=array(); //用于存放查询结果集的二位数组
	
	while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
		$data[] = $row['car'];
	}

	
	$unique = array_unique($data);

	echo json_encode($unique);
?>