<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>One Stop Traveling</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script src="js/jquery.js"></script>
	<script src="js/all.js"></script>
	<style type="text/css">
.css-input { border:1px solid #BEBEBE;font-size:44px; padding:6px;} 
.css-input:focus { outline:none; }

select{
	width:300px;
	height: 70px;
	border: 0px;
	border-bottom: 1px solid #BEBEBE;
	font-family: '微軟正黑體';
	font-size: 44px;
	margin-left: 15px;
	color: #8F8F8F;
	float: left;
}

.content{
	width: 100%;
	padding: 10px;
}
.content li{
	float: left;
	width: 40%;
	height: 400px;
	padding: 20px;
	margin-left: 5%;
	margin-right: 5%;
	margin: 2% !important;
	background-color: #F2F2F2;
}
.content li img{
	max-width: 310px;
	max-height: 310px;
	float: left;
}
.content li p{
	padding: 10px;
	float: left;
	margin-top: 10px;
	color: black;
	margin: 0 auto;
}
.search{
	width: 100%;
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
		
		<div class="content">
		<div class="search">
			<input class="css-input" type="text" id="plan_name" name="plan_name" style="width:80%;"/>
			<div class="search-bg"><img src="img/search.png"></div>
			
		</div>
			<div class="hotel">
			
				<ul>
					<li>
						<img src="img/g2.PNG">
						<p><a href="item-detail.html">成品行旅</a></p>
					</li>
					<li>
						<img src="img/g2.PNG">
						<p>W飯店</p>
					</li>
				</ul>

			</div>
			<div class="restaurant">
				<ul>
					<li>
						<img src="img/res1.jpg">
						<p><a href="item-detail.php">feedme美式餐廳</a></p>
					</li>
					<li>
						<img src="img/g2.PNG">
						<p>X餐廳</p>
					</li>
				</ul>

			</div>
			<div class="spot">
				<ul>
					<li>
						<img src="img/spot1.jpg">
						<p><a href="item-detail.php">阿里山觀景台</a></p>
					</li>
					<li>
						<img src="img/g2.PNG">
						<p>X餐廳</p>
					</li>
				</ul>

			</div>
			<div class="spot">
				<ul>
					<li>
						<img src="img/spot1.jpg">
						<p><a href="item-detail.php">阿里山觀景台</a></p>
					</li>
					<li>
						<img src="img/g2.PNG">
						<p>X景點</p>
					</li>
				</ul>

			</div>
			<div class="act">
				<ul>
					<li>
						<img src="img/act1.png">
						<p><a href="item-detail.php">快樂上學去巡迴特展</a></p>
					</li>
					<li>
						<img src="img/g2.PNG">
						<p>X活動</p>
					</li>
				</ul>

			</div>
		</div>
	</div>
</body>
</html>