<!DOCTYPE html>
<html>
<head>
    <title>Blank Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kitchen Bud App">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

<!--  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
 <link rel="stylesheet" type="text/css" href="css/classic-bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet"> 

  <style type="text/css">
  input[type="submit"] {
    margin-left: -45px;
    height: 24px;
    width: 24px;
    background: transparent;
    background-image: url('img/Search-icon.svg');
    color: white;
    border: 0;
    -webkit-appearance: none;
}
input[type="text"]:focus {
  box-shadow: 1px 1px 8px #e0e0e0;
}
input[type="text"]:hover {
  box-shadow: 1px 1px 8px #e0e0e0;
}
</style>

<?php
include('includes/config.php');
?>

</head>
<div class="altbod">
  <div class="settings-box"></div>
  <!--Settings Page-->
  <div class="settings-page">
    <div class="row padded">
    <a href="Edit_1.php"><div class="col-sm-3"><div class="button-cell2" style="border:3px dashed #1b1f20;"><img class="edit-icon" src="img/Settings-icon.svg"></div></div></a>
    <a href="Edit_2.php"><div class="col-sm-3"><div class="button-cell2" style="border:3px dashed #1b1f20;"><img class="edit-icon" src="img/Settings-icon.svg"></div></div></a>
    <a href="Edit_3.php"><div class="col-sm-3"><div class="button-cell2" style="border:3px dashed #1b1f20;"><img class="edit-icon" src="img/Settings-icon.svg"></div></div></a>
    <a href="Edit_4.php"><div class="col-sm-3"><div class="button-cell2" style="border:3px dashed #1b1f20;"><img class="edit-icon" src="img/Settings-icon.svg"></div></div></a>
  </div>
    <div class="row padded">
    <a href="Edit_5.php"><div class="col-sm-3"><div class="button-cell2" style="border:3px dashed #1b1f20;"><img class="edit-icon" src="img/Settings-icon.svg"></div></div></a>
    <a href="Edit_6.php"><div class="col-sm-3"><div class="button-cell2" style="border:3px dashed #1b1f20;"><img class="edit-icon" src="img/Settings-icon.svg"></div></div></a>
    <a href="Edit_7.php"><div class="col-sm-3"><div class="button-cell2" style="border:3px dashed #1b1f20;"><img class="edit-icon" src="img/Settings-icon.svg"></div></div></a>
    <a href="Edit_8.php"><div class="col-sm-3"><div class="button-cell2" style="border:3px dashed #1b1f20;"><img class="edit-icon" src="img/Settings-icon.svg"></div></div></a>
  </div>
  <a href=""><div style="text-align:center; margin-top:20px; margin-left:20px;"><div style="padding-left:20px; width:632px; height:46px; border-radius:50px; display:inline-block; margin:auto; border:3px dashed #1b1f20;">
  </div></div></a>
  </div>
  <!--END Settings Page-->
<!--APPLICATION ROW 1-->
<div class="row padded">
<?php
$sql30 = "SELECT ID,App_Name,Icon_Image,URL,Color FROM Applications WHERE ID < 5";
$result = $conn->query($sql30);
$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo"<a href='".$row['URL']."'><div class='col-sm-3'><div class='button-cell' style='border:5px solid ".$row['Color'].";'><img class='iconset' src='img/".$row['Icon_Image']."'></div></div></a>";
 }
}else{
  echo "$num_rows";
}
   ?>
</div>
<!--APPLICATION ROW 2-->
<div class="row padded">
<?php
$sql31 = "SELECT ID,App_Name,Icon_Image,URL,Color FROM Applications WHERE ID >= 5";
$result2 = $conn->query($sql31);
$num_rows = mysqli_num_rows($result2);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
      echo"<a href='".$row['URL']."'><div class='col-sm-3'><div class='button-cell' style='border:5px solid ".$row['Color'].";'><img class='iconset' src='img/".$row['Icon_Image']."'></div></div></a>";
 }
}else{
  echo "$num_rows";
}
   ?>
</div>
 <form action="http://search.yahoo.com/search" method="get">
  <div style="text-align:center; margin-top:20px;"><input placeholder="Search Yahoo NZ" type="text" name="q" style="padding-left:20px; width:632px; height:46px; border-radius:50px; display:inline-block; margin:auto; border:1px solid #E4E6EA; padding-right:50px;">
  <input type="submit" value=" "></div>
</form> 
</div>
</body>
<script type="text/javascript">
  
$('.settings-box').click(function(){
    $('.settings-page').toggleClass("full-width");
});


</script>
</html>