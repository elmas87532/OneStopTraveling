<?php
session_start();
include 'connect.php';
$FB_uid = "test";
if (isset($_POST['submit_yes'])) {
	$plan_name = $_POST['plan_name'];
	$syr = $_POST['syr'];
	$smon = $_POST['smon'];
	$sdate = $_POST['sdate'];
	$eyr = $_POST['syr'];
	$emon = $_POST['smon'];
	$edate = $_POST['sdate'];
	$query = "INSERT INTO project(Pro_Name,Pro_Syr,Pro_Smon,Pro_Sdate,Pro_Eyr,Pro_Emon,Pro_Edate,Pro_LeaderUID) VALUES('$plan_name',$syr,$smon,$sdate,$eyr,$emon,$edate,'$FB_uid')";
	mysqli_query($conn,$query);
	$query = "SELECT Pro_ID FROM project WHERE Pro_LeaderUID='$FB_uid' ORDER BY Pro_ID DESC";
	$read = mysqli_query($conn,$query);
	$result = mysqli_fetch_row($read);
	echo $result[0];
	$pro_id = (int)$result[0];
	$query = "INSERT INTO member(FB_userID,Pro_ID) VALUES('$FB_uid', $pro_id)";
	mysqli_query($conn,$query);
}

$_SESSION['current_project'] = $plan_name;

?>
<!DOCTYPE html>
<html>
<head>
	<title>One Stop Traveling</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script src="js/jquery.js"></script>
	<script src="js/all.js"></script>
	<style type="text/css">
.css-input { float:left;border:0px; border-bottom: 1px solid #8F8F8F;font-size:24px;width: 30px; padding:6px; background-color: transparent;} 
.css-input:focus { outline:none; }
.content li{
	float: left;
	width: 90%;
	height: 400px;
	color: white;
}
.cowork-button{
	background-color: transparent;
		border: 0px;
		margin-top: 5px;
		
}
.set-time span{
	font-size: 24px;
	font-weight: bold;
}

	</style>
	<script type="text/javascript">
var xhr;
function run_ajax() {
	try{
		xhr = new XMLHttpRequest();
		if (xhr.overrideMimeType) {
			xhr.overrideMimeType('text/xml');
		}
	}catch(e){
		try{
			xhr = new ActiveXObject("Msxml2.XMLHTTP");
		}catch(e){
			try{
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}catch(e){
				alert("瀏覽器不支援XMLHttpRequest");
				return false;
			}
		}
	}
	xhr.onreadystatechange = getData;
	xhr.open("post","<?php echo $_SERVER['PHP_SELF'];?>",true);
	xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');

	
}

	</script>
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
			<div class="plan-title">
				<img src="img/plan-setting-factor2.png"style="margin-right:10px;"><span>行程名稱</span>
				<div class="plan-date">2017/11/11</div>
			</div>
			<div class="plan-item">
				<ul>
				
					<li>
						<div class="set-time">
							<input class="css-input" type="text" id="start-hr" maxlength="2" name="start-hr" onkeyup="value=value.replace(/[^\d]/g,'') "/><span>:</span><input class="css-input" type="text" id="start-min" maxlength="2" name="start-min" onkeyup="value=value.replace(/[^\d]/g,'') "/><br/><br/>
							<input class="css-input" type="text" id="end-hr" maxlength="2" name="start-hr" onkeyup="value=value.replace(/[^\d]/g,'') "/><span>:</span><input class="css-input" type="text" id="end-min" maxlength="2" name="start-min" onkeyup="value=value.replace(/[^\d]/g,'') "/>
						</div>
						<div class="sap">
							<div class="time-spot"></div>
						</div>
						<div class="item-info">
							<p>知本溫泉(景點名稱)</p>
							<p><a href="googlemaps_direction.php">111</a></p>
							<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14719.370745323777!2d120.2836491!3d22.7340878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe6e681ecaffe55f2!2z5ZyL56uL6auY6ZuE5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1489026673426" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
						</div>
					</li>
					
					<li>
						<div class="set-time">
							<input class="css-input" type="text" id="start-hr" maxlength="2" name="start-hr" onkeyup="value=value.replace(/[^\d]/g,'') "/><span>:</span><input class="css-input" type="text" id="start-min" maxlength="2" name="start-min" onkeyup="value=value.replace(/[^\d]/g,'') "/><br><br/>
							<input class="css-input" type="text" id="end-hr" maxlength="2" name="start-hr" onkeyup="value=value.replace(/[^\d]/g,'') "/><span>:</span><input class="css-input" type="text" id="end-min" maxlength="2" name="start-min" onkeyup="value=value.replace(/[^\d]/g,'') "/>
						</div>
						<div class="sap">
							<div class="time-spot"></div>
						</div>
						<div class="item-info">
							<p></p>
							<p></p>
						</div>
					</li>
				</ul>

				<div class="cowork">
					<button class="cowork-button" id="switchSideBar"><img id="btn-cowork" src="img/cowork.png"></button>
				</div>
				<div class="cover" id="cover"></div>
				<div class="cowork-panel" id="cowork-panel">
					<p>共同編輯</p><hr/>
					<p>成員1</p>
					<p>成員1</p>
					<p>成員1</p>
					<p style="width:200px;float:right;margin-bottom:50px;">
				<a href="plan-setting.html"><img src="img/check-yes.png"></a>
				<a href="#"><img src="img/check-no.png"></a>
				</p>
				</div>
				
			</div>
			
				
			
		</div>
	</div>
</body>
</html>