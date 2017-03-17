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
.content ul{
	margin-top: 30px;
}
.content li{
	float: left;
	background-color: #FFC000;
	width: 90%;
	height: 300px;
	color: white;
	padding: 20px;
	border-radius: 7%;
	text-align: center;
}
.content li .opt{
	float: left;
	width: 100%;
	margin-bottom: 30px;
}
.content li p{
	font-size: 48px;
	margin-bottom: 50px;
}
.content li .opt a img{
	float: right;
	margin-right: 5px;
}
.content li p a{
	color: white;
	text-decoration: none;
}
.content li p a:hover{
	color: #8F8F8F;
}

	</style>
	
</head>
<body>
	<div class="wrap">
		<div class="top">
			<div class="side-menu"><button class="side-menu-button" id="switchSideBar"><img src="img/side-menu.png"></button></div>
			<div class="title">歷史紀錄</div>
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
			<ul>
				
				<li>
				<div class="opt"><a href="#"><img src="img/delete.png"></a><a href="#"><img src="img/opt.png" style="margin-right:20px;"></a></div>
				<p><a href="plan-setting.html">台北三日遊(行程名稱)</a></p>
				<p style="font-size:44px;">2017/2/14~2017/2/16</p>
				</li>
				
			</ul>
			
		</div>
	</div>
</body>
</html>