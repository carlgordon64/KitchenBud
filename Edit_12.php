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
    width:310px;
    height: 36px;
    background: transparent;
    border:2px solid #1b1f20;
    margin-top:10px;
}
input[type="text"]:focus {
  box-shadow: 1px 1px 8px #e0e0e0;
}
input[type="text"]:hover {
  box-shadow: 1px 1px 8px #e0e0e0;
}
input[type="file"] {
  background:#fff;
  height:36px;
  width:310px;
  margin-top:10px;
  color:#A2A2A2;
  border-top-right-radius:50px;
  border-bottom-right-radius:50px;
  overflow: hidden;
}

</style>

<?php
include('includes/config.php');
//DEFINE WHICH ICON
$this_icon = 12;
?>

</head>
<div class="altbod-edit">
  <h4>Edit Button <? echo $this_icon ?></h4>
  <a href="index.php"><div class="close-box"></div></a>
   <?php
$sql30 = "SELECT ID,App_Name,Icon_Image,URL,Color FROM Applications WHERE ID = $this_icon";
$result = $conn->query($sql30);

$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $this_color = $row['Color'];
      $this_name = $row['App_Name'];
      $this_url = $row['URL'];
      echo"<div class='row'><div class='button-cell' style='border:5px solid ".$row['Color'].";'><img class='iconset' src='img/".$row['Icon_Image']."'></div></div>";
 }
}
   ?>



<form enctype="multipart/form-data" action="Edit_12.php" method="POST">
  <div style="text-align:center; margin-top:14px;"><input placeholder="<?php echo $this_name ?>" type="text" name="AppName" style="padding-left:20px; width:310px; height:35px; border-radius:50px; display:inline-block; margin:auto; border:1px solid #E4E6EA; padding-right:50px;">
  </div>
   <div class="upload-btn-wrapper"><input type="file" name="uploaded_file"></input></div>
   <div style="text-align:center; margin-top:6px;"><input placeholder="<?php echo $this_url ?>" type="text" name="new_url" style="padding-left:20px; width:310px; height:35px; border-radius:50px; display:inline-block; margin:auto; border:1px solid #E4E6EA; padding-right:50px;">
  </div>
  <div style="text-align:center; margin-top:8px;">
    <input type="color" name="new_color" value="<?php echo $this_color ?>" style="width:310px; height:36px; padding:0px; border:0px;" >
  <p style="margin-top:-33px; color:#fff; font-weight:700; pointer-events: none;">COLOR</p>
  </div>
  <input type="submit" value="CONFIRM CHANGES" name="submit">
</form> 



<?php
$new_name = $_POST['AppName'];
//name change
if(isset($_POST['submit']) && !empty($new_name) ){
$sql30 = "UPDATE Applications SET App_Name='".$new_name."' where id=$this_icon";

if ($conn->query($sql30) === TRUE) {
    echo "Button name updated to $new_name";
} else {
    echo "Error updating record: " . $conn->error;
}
}
$new_image = basename( $_FILES['uploaded_file']['name']);
//image upload
if(isset($_POST['submit']) && !empty($new_image) ){
$sql30 = "UPDATE Applications SET Icon_Image='".$new_image."' where id=$this_icon";

if ($conn->query($sql30) === TRUE) {
    echo "Image updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
$new_url = $_POST['new_url'];
//URL upload
if(isset($_POST['submit']) && !empty($new_url) ){
$sql30 = "UPDATE Applications SET URL='".$new_url."' where id=$this_icon";

if ($conn->query($sql30) === TRUE) {
    echo "URL updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
$new_color = $_POST['new_color'];
//Color upload
if(isset($_POST['submit']) && !empty($new_color) ){
$sql30 = "UPDATE Applications SET Color='".$new_color."' where id=$this_icon";

if ($conn->query($sql30) === TRUE) {
    //echo "Color changed to $new_color";
} else {
    echo "Error updating record: " . $conn->error;
}
}
//ACTUAL IMAGE FILE UPLOADER
if(!empty($_FILES['uploaded_file']))
  {
    $path = "img/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    }
  }
?>
</div>
</body>
</html>