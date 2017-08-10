<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
	<style type="text/css">
body {
	font-family: Microsoft JhengHei;
	text-align: center;
	/*background-color: lightblue;*/
}

/* Style the tab */
div.tab {
    overflow: hidden;
    background-color: #ffffff;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: center;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 20px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border-top: none;
}

@media only screen and (max-width: 450px) {
	div.tab button {
	    background-color: inherit;
	    float: center;
	    border: none;
	    outline: none;
	    cursor: pointer;
	    padding: 14px 16px;
	    transition: 0.3s;
	    font-size: 15px;
	}
	iframe{
		float: center;
		max-width:330px;
        height: 500px;
	}
}
@media only screen and (max-width: 330px) {
	div.tab button {
	    background-color: inherit;
	    float: center;
	    border: none;
	    outline: none;
	    cursor: pointer;
	    padding: 14px 16px;
	    transition: 0.3s;
	    font-size: 18px;
	}
	iframe{
		float: center;
		max-width:280px;
        height: 500px;
	}
}
	</style>
</head>
<body>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'MRT')" id="defaultOpen">捷運</button>
  <button class="tablinks" onclick="window.open('http://ibus.tbkc.gov.tw/cms/driving-map?lang=Cht', config='height=500,width=500');">公車</button>
  <button class="tablinks" onclick="openCity(event, 'TAXI')">計程車</button>
  <button class="tablinks" onclick="window.open('https://www.c-bike.com.tw/Portal/Station/List', config='height=500,width=500');">腳踏車</button>
  <button class="tablinks" onclick="openCity(event, 'RENTAL')">租車</button>
</div>

<div id="MRT" class="tabcontent">
  <iframe src="http://easygo.krtco.com.tw/mobile/index.html" width="1000" height="500" scrolling="yes"></iframe>
</div>

<div id="BUS" class="tabcontent">
  <!-- <iframe src="http://ibus.tbkc.gov.tw/cms/driving-map?lang=Cht" width="1000" height="500" scrolling="yes"></iframe> -->
</div>

<div id="TAXI" class="tabcontent">
  <iframe src="http://www.mtaxi.com.tw/islandwide/" width="1000" height="500" scrolling="yes"></iframe>
</div>

<div id="BIKE" class="tabcontent">
  <!-- <iframe src="https://www.c-bike.com.tw/Portal/Station/List" width="1000" height="500" scrolling="yes"></iframe> -->
</div>

<div id="RENTAL" class="tabcontent">
  <iframe src="https://www.car-plus.com.tw/ugC_Branch.asp?hidCommunications=1" width="1000" height="500" scrolling="yes"></iframe>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
