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
.css-input { border:0px; border-bottom: 1px solid #BEBEBE;font-size:32px; padding:6px;} 
.css-input:focus { outline:none; }

select{
	width:100px;
	height: 50px;
	border: 0px;
	border-bottom: 1px solid #BEBEBE;
	font-family: '微軟正黑體';
	font-size: 32px;
	margin-right: 5px;
	color: #8F8F8F;
	float: left;
}

#submit_yes{
	width: 98px;
	height: 128px;
	background-image: url(./img/check-yes.png);
	border: 0px;
	background-color:white;
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
			<div class="block-content">
				行程名稱：<br/>
				<form action="plan-setting.php" method="post">
				<input class="css-input" type="text" id="plan_name" name="plan_name" /><br/><br/>
				行程日期：<br/>
				<select name="syr">
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
				</select>
				<select name="smon" >
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
				</select>
				<select name="sdate">
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
				</select><br/>
				<p style="width:400px;padding-left:150px;font-size:20px;color:#BEBEBE;">|</p>
				<select name="eyr">
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
				</select>
				<select name="emon" >
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
				</select>
				<select name="edate">
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
				</select>
				<br/><br/>
				<p style="text-align:right;margin-bottom:50px;">
				<input type="submit" name="submit_yes" id="submit_yes" value=" ">
				
				<a href="#"><img src="img/check-no.png"></a>
				</p>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>