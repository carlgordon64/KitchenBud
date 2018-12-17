<!DOCTYPE html>
<html>
<head>
    <title>Edit Page 1</title>
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
//DEFINE WHICH PAGE
$this_page = 1;
?>

</head>
<div class="altbod-edit">
  <h4>Edit Page <? echo $this_page ?></h4>
  <a href="index.php"><div class="close-box"></div></a>
   <?php
$sql30 = "SELECT ID,Page_Name,App_Count,Priority,Search_Name,Search_URL FROM Pages WHERE ID = $this_page";
$result = $conn->query($sql30);

$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $this_name = $row['Page_Name'];
      $this_priority = $row['Priority'];
      $this_search = $row['Search_Name'];
      $this_search_URL = $row['Search_URL'];
}
}
   ?>

<br>
<form enctype="multipart/form-data" action="Edit_page_1.php" method="POST">
  <div style="text-align:center; margin-top:14px;"><label for="name">Page Name</label><br><input placeholder="<?php echo $this_name ?>" type="text" id="name" name="PageName" style="padding-left:20px; width:310px; height:35px; border-radius:50px; display:inline-block; margin:auto; border:1px solid #E4E6EA; padding-right:50px;">
  </div>
   <div style="text-align:center; margin-top:6px;"><label for="priority">Priority</label><br><input placeholder="<?php echo $this_priority ?>" type="text" id="priority" name="new_priority" style="padding-left:20px; width:310px; height:35px; border-radius:50px; display:inline-block; margin:auto; border:1px solid #E4E6EA; padding-right:50px;">
  </div>
<div style="text-align:center; margin-top:6px;"><label for="search">Search Bar</label><br>
  <select placeholder="Youtube" type="text" id="priority" name="new_search" style="padding-left:20px; width:310px; height:35px; border-radius:50px; display:inline-block; margin:auto; border:1px solid #E4E6EA; padding-right:50px;">
  <option value="Google">Google</option>
  <option value="Bing">Bing</option>
  <option value="Yahoo">Yahoo</option>
  <option value="Youtube">Youtube</option>
</select>
  </div>

  <input type="submit" value="CONFIRM CHANGES" name="submit">
</form> 

<?php
//search bar change
$new_search = $_POST['new_search'];
switch ($new_search) {
    case "Google":
        $new_url = "http://www.google.com/search";
        break;
    case "Bing":
        $new_url = "http://www.bing.com/search";
        break;
    case "Yahoo":
        $new_url = "http://search.yahoo.com/search";
        break;
        case "Youtube":
        $new_url = "http://youtube.com/search";
        break;
}

if(isset($_POST['submit']) && !empty($new_search) ){
$sql30 = "UPDATE Pages SET Search_Name='".$new_search."', Search_URL='".$new_url."' where id=$this_page";

if ($conn->query($sql30) === TRUE) {
    echo "Search name updated to $new_search";
} else {
    echo "Error updating record: " . $conn->error;
}
}

$new_name = $_POST['PageName'];
//name change
if(isset($_POST['submit']) && !empty($new_name) ){
$sql30 = "UPDATE Pages SET Page_Name='".$new_name."' where id=$this_page";

if ($conn->query($sql30) === TRUE) {
    echo "Page name updated to $new_name";
} else {
    echo "Error updating record: " . $conn->error;
}
}
$new_priority = $_POST['new_priority'];
//image upload
if(isset($_POST['submit']) && !empty($new_priority) ){
$sql30 = "UPDATE Pages SET Priority ='".$new_priority."' where id=$this_page";

if ($conn->query($sql30) === TRUE) {
    echo "Priority updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
?>
</div>
</body>
</html>