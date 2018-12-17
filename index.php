<!doctype html>
<html lang="en" class="export">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Touch, responsive, flickable carousels">
  <meta name="viewport" content="width=device-width">

  <title>KitchenPi</title>
   <link rel="stylesheet" href="flickity-docs.css" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/classic-bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet"> 

  <style type="text/css">
  #search-btn {
    margin-left: -45px;
    height: 24px;
    width: 24px;
    background: transparent;
    background-image: url('img/Search-icon.svg');
    color: white;
    border: 0;
    -webkit-appearance: none;
}
  #name-btn {
    display: inline-block;
    position: absolute;
    margin-top:-20px;
    margin-left: 156px;
    height: 19px;
    width: 19px;
    background: transparent;
     background-image: url('img/edit-icon.svg');
     background-repeat: no-repeat;
    color: #000;
    border: 0;
    -webkit-appearance: none;
}
input[type="text"] {
  color: #000;
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
include('includes/PageData.php');


?>

</head>
<body class="page--index">


  <div class="hero-carousel" data-flickity='{ "fullscreen": true }' data-js="hero-carousel">
     <!--CELL 1-->
    <div class="hero-carousel__cell hero-carousel__cell--1">
      <div class="hero-carousel__cell__content">
<? include('includes/Page-1.php'); ?>
      </div>
    </div>
    <!--CELL 2-->
    <div class="hero-carousel__cell hero-carousel__cell--2">
      <div class="hero-carousel__cell__content">
<? include('includes/Page-2.php'); ?>
 </div>
    </div>
  </div>

<?

$new_page_name = $_POST['Page-name'];
//page name change
if(isset($_POST['update']) && !empty($new_page_name) ){
$sql10 = "UPDATE Pages SET Page_Name='".$new_page_name."' WHERE ID = 1";

if ($conn->query($sql10) === TRUE) {
    //echo "Button name updated to $new_page_name";
} else {
    //echo "Error updating record: " . $conn->error;
}
}

?>
<script type="text/javascript">
  
$('.settings-box').click(function(){
    $('.settings-page').toggleClass("full-width");
});
</script>
  <script src="flickity.pkgd.js"></script>


</body>
</html>
