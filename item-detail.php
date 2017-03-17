<?php
session_start();
$FB_uid = "test";
include 'connect.php';
$plan_name = $_SESSION['current_project'];

if (isset($_GET['id'])) {
	$id = sprintf("%d",$_GET['id']);
	$url = "item-detail.php?id="+$id;
	$query = "INSERT INTO favorite(FB_userID,Fav_URL) VALUES('$FB_uid','$id')";
	mysqli_query($conn,$query);
	//echo $_GET['id'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>One Stop Traveling</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script src="js/jquery.js"></script>
	<script src="js/all.js"></script>
	<style type="text/css">
.css-input { border:0px; border-bottom: 1px solid #BEBEBE;font-size:32px; padding:6px;} 
.css-input:focus { outline:none; }
.plan-title{
	background-color: #F2F2F2;
}
.plan-title-longer{
	padding-top: 20px;
	padding-bottom: 20px;
	float: left;width: 100%;
	margin-bottom: 30px;
	background-color: #F2F2F2;
}
.plan-title-longer img{
	height: 500px;
	width: 16px;
}
.plan-title-longer p{
	padding: 10px;
	margin-left: 30px;
}
.like-star{
	float:right;
}
.like-star img{
	width: 70px;
	margin-right: 10px;
}
iframe{
	width: 100%;
	height: 300px;
}
.p-title{
	color: #404040;
}
	</style>

	
</head>
<body>
	<div class="wrap">
		<div class="top">
			<div class="side-menu"><button class="side-menu-button" id="switchSideBar"><img src="img/side-menu.png"></button></div>
			<div class="title">首頁</div>
		</div>
		<div class="sidebar" id="sidebar">
			<div class="self-photo">
				<img src="img/test.jpg">
			</div>
			<div class="sidebar-options">
				<ul>
					<li>Hi , !@#$</li>
					<li><img src="img/sidebar-home.png"><a href="index.php">首頁</a></li>
					<li><img src="img/sidebar-plan.png"><a href="plan.php">行程規劃</a></li>
					<li><img src="img/sidebar-history.png"><a href="history.php">歷史紀錄</a></li>
					<li><img src="img/sidebar-fav.png"><a href="fav.php">收藏</a></li>
					<li><img src="img/sidebar-logout.png"><a href="">登出</a></li>
				</ul>
			</div>
		</div>
		<div class="x-sidebar-top"></div>
		<div class="x-sidebar"></div>
		<div class="title-photo"><img src="img/test1.jpg"></div>
		<div class="content">
			<div class="plan-title">
				<img src="img/plan-setting-factor2.png"style="margin-right:10px;"><span>W飯店</span>
				<div class="like-star"><a href="item-detail.php?id=x"><img src="img/like.png"></a><img src="img/star.png"></div>
			</div>

			<div class="plan-title-longer" >
				
				<p class="p-title">介紹</p>
				<p>結合了令人驚豔的自然元素與感官饗宴，反映城市既酷炫又感性的多變面貌，讓您體驗全新的台北新生活。
</p>
			</div>
			<div class="plan-title-longer"  style="margin-top:0px;">
				
				<p class="p-title">地理位置</p>
				<p>地址：臺北市信義區忠孝東路五段10號
</p>
				<p>電話：886-2-7703-8888
</p>
			</div>
			<p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14719.370745323777!2d120.2836491!3d22.7340878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe6e681ecaffe55f2!2z5ZyL56uL6auY6ZuE5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1489026673426" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
			
		</div>
	</div>
</body>
</html>