<!DOCTYPE html>
<html>
<head>
    <title>Blank Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kitchen Bud App">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/j query/1.11.0/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

<!--  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
 <link rel="stylesheet" type="text/css" href="css/classic-bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <style type="text/css">
  input[type="submit"] {
    margin-left: -50px;
    height: 24px;
    width: 24px;
    background: transparent;
    background-image: url('img/Search-icon.svg');
    color: white;
    border: 0;
    -webkit-appearance: none;
}
input:focus {
  box-shadow: 1px 1px 8px #e0e0e0;
}
input:hover {
  box-shadow: 1px 1px 8px #e0e0e0;
}
</style>

<?php
$servername = "localhost";
$username = "carlgordon";
$password = "6190";
$dbname = "KitchenBud";
$host = 'localhost';
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

</head>
    <div class="altbod">
      <div class="settings-page"></div>
      
<div class="row padded">
  <a href="https://www.bakingmad.com/"> <div class="col-sm-3"><div class="button-cell" style="border:5px solid #EF6043;"><img class="iconset" src="img/Baking-icon.svg"></div></div></a>
  <a href="https://tasty.co/"> <div class="col-sm-3"><div class="button-cell" style="border:5px solid #9412FF;"><img class="iconset" src="img/cooking-icon.svg"></div></div></a>
  <a href="https://keep.google.com/u/0/"> <div class="col-sm-3"><div class="button-cell" style="border:5px solid #F6BF56;"><img class="iconset" src="img/List-icon.svg"></div></div></a>
  <a href="https://calendar.google.com/calendar/r"> <div class="col-sm-3"><div class="button-cell" style="border:5px solid #02C5CA;"><img class="iconset" src="img/Calendar-icon.svg"></div></div></a>
</div>
<br>
<div class="row padded">
  <a href="https://www.youtube.com/"> <div class="col-sm-3"><div class="button-cell" style="border:5px solid #F70400;"><img class="iconset" src="img/Youtube-icon.svg"></div></div></a>
  <a href="https://open.spotify.com/browse/featured"> <div class="col-sm-3"><div class="button-cell" style="border:5px solid #1ED567;"><img class="iconset" style="margin-top:10px;" src="img/Music-icon.svg"></div></div></a>
  <a href="https://www.netflix.com/"> <div class="col-sm-3"><div class="button-cell" style="border:5px solid #BB0200;"><img class="iconset" src="img/Netflix-icon.svg"></div></div></a>
  <a href="https://www.metservice.com/towns-cities/wellington/wellington-city"> <div class="col-sm-3"><div class="button-cell" style="border:5px solid #4A03FF;"><img class="iconset" src="img/Weather-icon.svg"></div></div></a>
</div>
 <form action="http://www.google.com/search" method="get">
  <div style="text-align:center; margin-top:14px;"><input placeholder="Search Google" type="text" name="q" style="padding-left:20px; width:632px; height:46px; border-radius:50px; display:inline-block; margin:auto; border:1px solid #E4E6EA; padding-right:50px;">
  <input type="submit" value=" "></div>
</form> 
</div>
</body>
<script type="text/javascript">
  
$("#about").click(function() {
    $('html,body').animate({
        scrollTop: $("#about-sec").offset().top-50},
        'slow');
});
$("#contact").click(function() {
    $('html,body').animate({
        scrollTop: $("#contact-sec").offset().top-50},
        'slow');
});
$(".contact-us").click(function() {
    $('html,body').animate({
        scrollTop: $("#contact-sec").offset().top-50},
        'slow');
});
$(".custom-brand").click(function() {
    $('html,body').animate({
        scrollTop: $("body").offset().top},
        'slow');
});

</script>
</html>