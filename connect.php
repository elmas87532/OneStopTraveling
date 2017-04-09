<?php
	echo "<meta charset='UTF-8' />";

	$a="140.127.218.140";
	$conn=mysqli_connect($a,"root","calltheshot","one_stop_traveling");
	if (!$conn) 
	{ 
	    die("连接错误: " . mysqli_connect_error()); 
	} 	
	mysqli_query($conn,"set names utf8");
	//mysqli_select_db($conn,"markbay");

?>