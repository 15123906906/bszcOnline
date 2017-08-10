<?php
	$carID = $_REQUEST['carID'];

	//链接数据库
	$conn = mysqli_connect('127.0.0.1','root','','bszc');

	$sql = "SELECT imgLink,imgLinkBig FROM img WHERE carID=$carID";
	mysqli_query($conn,'SET NAMES utf8');
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_array($result,MYSQL_ASSOC);//存放图片地址
	if($row){
		echo json_encode($row);
	}else{
		echo json_encode("false");
	}
	

?>