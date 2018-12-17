

<div class="altbod">
  <div class="page-title">
    <p><? echo $Page1Name ?></p>
  </div>
  <div class="settings-box"></div>

  <!--Settings Page-->
  <div class="settings-page">
     <div class="page-title">
      <div class="Page-name"></div><a href="Edit_page_1.php"><div id="name-btn"></div></a>
  </div>
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
  <a href=""><div style="text-align:center; margin-top:10px; margin-left:20px;"><div style="padding-left:20px; width:632px; height:46px; border-radius:50px; display:inline-block; margin:auto; border:3px dashed #1b1f20;">
  </div></div></a>
  </div>
  <!--END Settings Page-->
<!--APPLICATION ROW 1-->
<div class="row padded">
<?php
$sql30 = "SELECT ID,App_Name,Icon_Image,URL,Color,Target FROM Applications WHERE ID BETWEEN 1 AND 4";
$result = $conn->query($sql30);
$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo"<a href='".$row['URL']."' target='".$row['Target']."'><div class='col-sm-3'><div class='button-cell' style='border:5px solid ".$row['Color'].";'><img class='iconset' src='img/".$row['Icon_Image']."'></div></div></a>";
 }
}
   ?>
</div>
<!--APPLICATION ROW 2-->
<div class="row padded">
<?php
$sql31 = "SELECT ID,App_Name,Icon_Image,URL,Color,Target FROM Applications WHERE ID BETWEEN 5 AND 8";
$result2 = $conn->query($sql31);
$num_rows = mysqli_num_rows($result2);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
      echo"<a href='".$row['URL']."' target='".$row['Target']."'><div class='col-sm-3'><div class='button-cell' style='border:5px solid ".$row['Color'].";'><img class='iconset' src='img/".$row['Icon_Image']."'></div></div></a>";
 }
}
   ?>
</div>
<?php
$sql30 = "SELECT ID,Page_Name,App_Count,Priority,Search_Name,Search_URL FROM Pages WHERE ID = 1";
$result = $conn->query($sql30);
$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "
 <form action='".$row['Search_URL']."' method='get'>
 <div style='text-align:center; margin-top:10px;'>
<input placeholder='Search ".$row['Search_Name']."' type='text' name='q' style='padding-left:20px; width:632px; height:46px; border-radius:50px; display:inline-block; margin:auto; border:1px solid #E4E6EA; padding-right:50px;'>
<input id='search-btn' type='submit' value=' '>
</div>
</form>";
 
 }
}
   ?>
</div>

