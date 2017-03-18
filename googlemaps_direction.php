<?php
session_start();
include 'connect.php';
$FB_uid = "test";

$query = "SELECT Act_Address,Act_Mode FROM activity WHERE Act_ID = 1";
$read = mysqli_query($conn,$query);
$result = mysqli_fetch_row($read);

$query = "SELECT Act_Address,Act_Mode FROM activity WHERE Act_ID = 2";
$read = mysqli_query($conn,$query);
$result2 = mysqli_fetch_row($read);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Displaying text directions with <code>setPanel()</code></title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style type="text/css">
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
#map {
  height: 100%;
  width: 69%;
  /*margin-left: 10px;*/
}

#floating-panel {
  position: absolute;
  top: 10px;
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
}

#right-panel {
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
  
}

#right-panel select, #right-panel input {
  font-size: 15px;
}

#right-panel select {
  width: 100%;
}

#right-panel i {
  font-size: 12px;
}

#right-panel {
  height: 100%;
  width: 29%;
  float:left;
  overflow: auto;
}

#map {
  /*margin-right: 400px;*/
  float:left;
}

#floating-panel {
  background: #fff;
  padding: 5px;
  font-size: 14px;
  font-family: Arial;
  border: 1px solid #ccc;
  box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
  display: none;
}

@media only screen and (max-width: 375px) {

  #map {
    height: 50%;
    width: 100%;
    float: top;
    margin: 0;
  }
  #right-panel {
    height: 50%;
    width: auto;
    float: none;
    
  }

    </style>
    
  </head>
  <body>
    <div id="floating-panel">
      <b>Mode of Travel: </b>
      <select id="mode">
        <option value="DRIVING" selected=true>Driving</option>
        <option value="WALKING" >Walking</option>
        <!-- <option value="BICYCLING">Bicycling</option> -->
        <option value="TRANSIT" >Transit</option>
      </select>
    </div>
    <div id="map"></div>
    <div id="right-panel"></div>
    <button onclick="myFunction()">Click me</button>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
function initMap() {
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var directionsService = new google.maps.DirectionsService;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: {lat: 23.58259486, lng: 120.58552886}
  });
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('right-panel'));

  var control = document.getElementById('floating-panel');
  control.style.display = 'block';
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

  // calculateAndDisplayRoute(directionsService, directionsDisplay);

  var onChangeHandler = function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  };
  
  //console.log('<?php echo $result[1]; ?>');
  if ('<?php echo $result[1]; ?>' == 'DRIVING' ) {
    //console.log(1);
    $("#mode").change(function(){
      $( "#mode option:selected" ).filter(onChangeHandler);
    }).trigger("change"); //如果資料庫mode為null，執行此function；如果不為null，則從資料庫取值放入selectedMode
  }else if('<?php echo $result[1]; ?>' == 'WALKING'){
    //console.log(2);
    $("#mode").change(function(){
      $( "#mode option[value='WALKING']" ).attr('selected', 'selected').filter(onChangeHandler);
    }).trigger("change"); //如果資料庫mode為null，執行此function；如果不為null，則從資料庫取值放入selectedMode
  }else{
    //console.log(3);
    $("#mode").change(function(){
      $( "#mode option[value='TRANSIT']" ).attr('selected', 'selected').filter(onChangeHandler);
      // $( "#mode option[value='TRANSIT']" ).attr('selected', 'selected');
    }).trigger("change"); //如果資料庫mode為null，執行此function；如果不為null，則從資料庫取值放入selectedMode
  }
  
  // document.getElementById('mode').addEventListener('change', onChangeHandler); 等於 // $("#mode").change(onChangeHandler);
  // document.getElementById('start').addEventListener('change', onChangeHandler);
  // document.getElementById('end').addEventListener('change', onChangeHandler);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  // var start = document.getElementById('start').value;
  // var end = document.getElementById('end').value;
  var selectedMode = document.getElementById('mode').value;//從前端mode取值，並放入資料庫
  $.ajax({
     url: 'googlemaps_direction.php', //This is the current doc
     type: "POST",
     dataType:'json', // add json datatype to get json
     data: ({Mode: selectedMode}),
     success: function(data){
         console.log(data);
     }
  });
  var start = '<?php echo $result[0]; ?>'; //資料庫取值放入start
  var end = '<?php echo $result2[0]; ?>'; //資料庫取值放入end
  //var selectedMode = '<?php echo $result[1]; ?>';

  directionsService.route({
    origin: start,
    destination: end,
    travelMode: google.maps.TravelMode[selectedMode]
  }, function(response, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

function myFunction() {
  var time = $('.adp-summary > span:nth-child(3)').text();
  console.log(time);
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuo23O04A6RFr2mDaBWbGoI_YbQpweyYk&signed_in=true&callback=initMap"
        async defer></script>
  </body>
</html>
<?php 
  $Mode = $_POST['Mode']; 
  $update="UPDATE activity SET Act_Mode='$Mode' WHERE Act_ID = 1"; 
  mysqli_query($conn,$update); 
?>
