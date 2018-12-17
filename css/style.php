<?php

$color1 = 'rgba(255,255,255,0.5)';

$pageY = "auto";

$colorscheme = $_SESSION["colorset"];



//colorscheme map
//$cs_00= header bg color;
//$cs_01= contacts bg color;
//$cs_02= projects + skills bg color;
//$cs_03= blog bg color;
//$cs_04= contact bg color;
//$cs_hi= highlight / pagination hover color;
//color scheme swicth
switch ($colorscheme) {
    case 1:
    $cs_00="#F2F2F2";
    $cs_01="#F2F2F2";
    $cs_02="#2F343B";
    $cs_03="#405F59";
    $cs_04="#A3D0C1";
    $font_color="#000";
    $font_color2="#fff";
    $cs_hi = "#A3D0C1";
    $cs_tint = "#A3D0C1";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "mellow";
        break;
    case 2:
    $cs_00="#242C38";
    $cs_01="#454C57";
    $cs_02="#242C38";
    $cs_03="#977EDB";
    $cs_04="#46C6B8";
    $font_color="#fff";
    $font_color2="#fff";
    $cs_hi = "#46C6B8";
    $cs_tint = "#ffffff";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/curls.png";
    $schematic = "nova";
        break;
    case 3:
    $cs_00="#1b1f20";
    $cs_01="#242C38";
    $cs_02="#2F343B";
    $cs_03="#7E827A";
    $cs_04="#7E827A";
    $font_color="#fff";
    $font_color2="#fff";
    $cs_hi = "#FD775A";
    $cs_tint = "#FD775A";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/curls.png";
    $schematic = "blackjack";
    break;
    case 4:
    $cs_00="#324D5C";
    $cs_01="#46B29D";
    $cs_02="#F0CA4D";
    $cs_03="#E37B40";
    $cs_04="#DE5B49";
    $font_color="#fff";
    $font_color2="#000";
    $cs_hi = "#F0CA4D";
    $cs_tint = "#F0CA4D";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "pineapple";
    break;
     case 5:
    $cs_00="#DBEFE7";
    $cs_01="#B2C8C6";
    $cs_02="#F2F3F2";
    $cs_03="#0b2b35";
    $cs_04="#D6CCBC";
    $font_color="#000";
    $font_color2="#000";
    $cs_hi = "#0b2b35";
    $cs_tint = "#0b2b35";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "blanca";
    break;
    case 6:
    $cs_00="#1F618C";
    $cs_01="#2C3E50";
    $cs_02="#E74C3C";
    $cs_03="#ECF0F1";
    $cs_04="#1F618C";
    $font_color="#fff";
    $font_color2="#fff";
    $cs_hi = "#E74C3C";
    $cs_tint = "#ffffff";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "honeypot";
    break;
      case 8:
    $cs_00="#B85490";
    $cs_01="#CFD66C";
    $cs_02="#2D5B5E";
    $cs_03="#B08914";
    $cs_04="#8FC9FF";
    $font_color="#000";
    $font_color2="#000";
    $cs_hi = "#2D5B5E";
    $cs_tint = "#2D5B5E";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "candyland";
    break;
     case 9:
    $cs_00="#242C38";
    $cs_01="#454C57";
    $cs_02="#FF9326";
    $cs_03="#E5462E";
    $cs_04="#FFFFFF";
    $font_color="#fff";
    $font_color2="#fff";
    $cs_hi = "#FF9326";
    $cs_tint = "#FF9326";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "lemons";
    break;
     case 10:
    $cs_00="#153651";
    $cs_01="#153651";
    $cs_02="#A2A9BC";
    $cs_03="#C0BAC1";
    $cs_04="#604D6A";
    $font_color="#fff";
    $font_color2="#fff";
    $cs_hi = "#D5EBF1";
    $cs_tint = "#D5EBF1";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "dusk";
    break;
    default:
    $cs_00="#DBEFE7";
    $cs_01="#C1D4D2";
    $cs_02="#F2F3F2";
    $cs_03="#A69B8C";
    $cs_04="#D6CCBC";
    $font_color="#fff";
    $font_color2="#1b1f20";
    $cs_hi = "#4CC1BB";
    $cs_tint = "#DBEFE7";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "arctic";
}

$_SESSION["color_hi"] = $cs_hi;
$_SESSION["color_00"] = $cs_00;


//lasso styling
for ($i=0; $i <4 ; $i++) { 

    switch ($i) {
    case 1:
    //Button 2 lasoo
        $color1 = $cs_01;
        $color2 = $cs_02;
        $lassoLength = "800px";
        break;
    case 2:
    //Button 3 lasoo
        $color1 = $cs_02;
        $color2 = $cs_03;
        $lassoLength = "1200px";
        break;
    case 3:
    //Button 4 lasoo
        $color1 = $cs_03;
        $color2 = $cs_04;
        $lassoLength = "1700px";
        break;
    default:
    //Button 1 lasoo
        $color1 = $cs_04;
        $color2 = $cs_01;
        $lassoLength = "300px";

} 
$ii=$i+1;
$color_iterate = ${'cs_0' . $ii};
    # code...
    echo "<style type='text/css'>
    .lassoHead$i{
        transition:1s ease all;
        z-index:15;
 border-radius:100%; width:20px; height:20px; position:inherit; margin:auto; margin-left:-10px; top:0px; background:$color_iterate;  opacity:0.3; 
    }
    .chatbox{
        width:50%; margin:auto;
    }

     .lassoHeadStretch$i{
        transition:0.6s ease all;
        z-index:15;
    top:$lassoLength; 
    background:$color_iterate;; 
    opacity:1; 
    box-shadow: 0px 4px 5px rgba(0,0,0,0.2);
    }

    .lasso$i{
     transition:1s ease all;
     z-index:15;
     width:2px; height:0px; background:$color1; position: relative; left:0px; margin:auto; opacity:0.6; 
    }

     .lassoStretch$i{
    transition:0.6s ease all;
    z-index:15;
      height:$lassoLength; background:$color2; opacity:1;
      box-shadow: 0px 4px 5px rgba(0,0,0,0.2);
    }
    
    

    @media screen and (max-width: 768px) {
.lassoStretch$i{
    display:none;
    }
    .lassoHead$i{
    display:none;
    }

   
}

</style>
    ";
}
//CAROUSEL TRACK
for($o=0; $o<=10; $o++){
$trackID = $o;
echo "
<style type='text/css'>
.caro-date$trackID{
    z-index:15;
    position:absolute; bottom:10px; left:50%; margin-left:-40px;
    width:80px; height:auto; text-align:center; max-height:80px;
    background-color:$cs_hi;
    border-top-right-radius: 4px; 
border-top-left-radius: 4px;
border-bottom-right-radius: 4px; 
border-bottom-left-radius: 4px;padding:2px;
}
#board$trackID{
    display: visible;
    position:absolute;
    width:600px;
    left:50%;
    margin-left:-300px;
    height:370px;
    background: transparent;
    z-index:3;
}
#carousel-cell$trackID {
    transition:0.4s ease all;
  width: 20%;
  height: 430px;
  margin-right: 0px;
  background: rgba(0,0,0,0);
  opacity: 0.2;
  border-bottom-right-radius: 8px; 
border-bottom-left-radius: 8px;
border-top-right-radius: 8px; 
border-top-left-radius: 8px;
}

#carousel-cell$trackID.is-selected {
  opacity: 1;
}
.pointer{
    width:2px;
    background:#000;
    height:12px;
    position:absolute;
    z-index:10;
    top:80px;
}
#carousel-cell$trackID.is-selected .caro-title {
     transition:0.4s ease all;
     background:rgba(0,0,0,0);
}
/* cell number */
#carousel-cell$trackID:before {
  display: block;
  text-align: center;
  content: none;
  line-height: 200px;
  font-size: 80px;
  color: white;
}
/*Media @ 480px or smaller*/
@media screen and (max-width: 480px) {
    #carousel-cell$trackID {
width:80%;
}
#board$trackID{
    display: visible;
    position:absolute;
    width:360px;
    left:50%;
    margin-left:-180px;
    height:370px;
    background: transparent;
    z-index:3;
}


    }
</style>
";

}
echo"
<style type='text/css'>

body{
    background:$cs_00;
}
/* ---- .element-item ---- */
.element-item {
  transition:0.4s ease all;
  position: relative;
  overflow: hidden;
  float: left;
  width: 280px;
  border:2px solid $cs_hi;

  height: 280px;
  margin: 39px;
  padding: 0px;
  background: #e0e0e0;
  background-repeat:no-repeat; background-position:50%; background-size:105% auto;
  color: #262524;
border-radius:100%;
cursor:pointer;
z-index:10;
  /*
  border-top-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;*/
}
.element-item:hover #eye-icon{
    transition:0.4s ease all;
    fill: $cs_hi;
}
.windowtint{
    width:100%; height:280px;  background:$cs_tint; opacity:0.3; margin:auto; position:absolute; top:0px;

}
.texturetint{
    width:1000px; height:500px;  background:red; opacity:0.8; margin:auto; position:absolute; z-index:16; bottom:10;

}
.pagination{
    transition:0.4s ease all;
    border-radius:100%;
    width:60px; height:60px; margin:auto; background:rgba(0,0,0,0.05);
    border:2px solid white; text-align:center; color:white;
}
nav .pagination{
    transition:0.4s ease all;
    border-radius:100%;
    width:60px; height:60px; margin:auto; background:#fff;
    border:2px solid white; text-align:center; color:white;
}
.border_hi{
    border:2px solid $cs_hi; 
}
.pagination:hover{
    transition:0.4s ease all;
    cursor:pointer;
    box-shadow: 2px 4px 5px rgba(0,0,0,0.2);
    background:rgba(255,255,255,1);
}
.pagination:hover #cv-icon{
    transition:0.4s ease all;
    fill: $cs_hi;

}
nav .pagination:hover{
    transition:0.4s ease all;
    cursor:pointer;
    box-shadow: 2px 4px 5px rgba(0,0,0,0.2);
    background:rgba(255,255,255,1);
}
nav .pagination:hover #cv-icon{
    transition:0.4s ease all;
    fill: $cs_hi;

}
.pagination p{
     color:white;
    margin:auto;
}
.pagination a{
    color:white;
    text-align: center;
    margin:auto;
    text-decoration: none;
}
svg {
    fill: #fff;
    width:30px;
    height: auto;
    margin:auto; viewBox:0 0 250 250;
}

.social_icon{
    width:80px; height:80px;
    border-radius: 100%;
    background:transparent;
    margin-left: 20px; margin-right: 20px;
    padding:0px;
    display:inline-block;

}
.social_icon:hover{
box-shadow: 0px 0.5px 15px rgba(0,0,0,0.1);
    }
.social_icon svg {
    transition:0.4s ease all;
    fill: $cs_04;
    width:100%;
    height: auto;
    margin:auto;
    display:inline-block;
    margin-top:-12px;
}
.send_icon{
    width:40px; height:40px;
    border-radius: 100%;
    top:-20px;
    right:5px;
    background:transparent;
    position:relative;
    z-index:15;
    float:right;

}
.send_icon #send-icon {
    transition:0.4s ease all;
    fill: $cs_hi;
    width:100%;
    height: auto;
    margin:auto;
    display:inline-block;
    margin-top:-6px;
}
.send-color{
    transition:0.4s ease all;
    fill:red;
box-shadow: 0px 0.5px 15px rgba(0,0,0,0.1);
    }
    .chatsub:hover .send-icon svg{
    transition:0.4s ease all;
    fill: $cs_hi;
    cursor:pointer;
    opacity:0.9;
    

}
.social_icon:hover #media-icon{
    transition:0.4s ease all;
    fill: $cs_hi;
    cursor:pointer;
    opacity:0.9;
    

}
nav svg {
    fill: #000;
    width:30px;
    height: auto;
    margin:auto;
}
.smallbreaker{
    position:relative;
    top:-10px;
    width:100%;
    height:2px;
    background-color:$cs_00;

}
.ball_row{
    background:transparent;
    padding:0px;
    margin:auto;
    width:100px;
    height:auto;
}
.cs_ball{
    position: relative;
    display:inline-block;
    z-index:1;
    margin:auto;
    width:15px;
    height:15px;
    background-color: transparent;
    border-radius: 100%;
    border:2px solid #fff;
}
.strikeout{
    position:relative;
    z-index:0;
    top:-18px;
    background-color:#fff;
    width:85px;
    height:2px;

}
#ball1{
    background-color:$cs_00;
}
#ball2{
    background-color:$cs_01;
}
#ball3{
    background-color:$cs_02;
}
#ball4{
    background-color:$cs_03;
}
#ball5{
    background-color:$cs_04;
}
.down{
    margin-top:70px;
}
/* rating margin top = half of skills li font size */
.rating{
    z-index:1;
    position:relative;   
    margin-right:10px;
    float:right;
    width:100px;
    min-height: 10px;
    margin-top:8px;
    background:rgba(0,0,0,0.2);
    border-bottom-right-radius: 4px; 
border-bottom-left-radius: 4px;
border-top-right-radius: 4px; 
border-top-left-radius: 4px;
overflow:hidden;
}
.rating span{
    z-index:2;
    position: absolute;
    display: inline-block;
    top:0;
    width: 20px;
    min-height: 10px;
    background:$cs_hi;
}
.r1{
    opacity:0.2;
    z-index:2;
    position: absolute;
    display: inline-block;
    top:0;
    left:0;
}
.r2{
    opacity:0.4;
    z-index:2;
    position: absolute;
    display: inline-block;
    top:0;
    left:20px;
}
.r3{
    opacity:0.6;
    z-index:2;
    position: absolute;
    display: inline-block;
    top:0;
    left:40px;
}
.r4{
    opacity:0.8;
    z-index:2;
    position: absolute;
    display: inline-block;
    top:0;
    left:60px;
}
.r5{
    opacity:1;
    z-index:2;
    position: absolute;
    display: inline-block;
    top:0;
    left:80px;
}
// .rating :nth-child(2n+0){
// background:$cs_hi;
// opacity:0.6;
// left:20px;
// }
.dpop{
    margin:auto;
    position:absolute;
    text-align:center;
    top:65px;
    color:#fff;
    z-index:20;
    font-size:15px;
}
.skills{
    width:90%;
    margin:auto;
    height:372px;
    overflow:hidden;
    /* bg originally $cs_02 */
    background:rgba(0,0,0,0.05);
     -moz-box-shadow:    inset 0 8px 20px rgba(0,0,0,0.1);
   -webkit-box-shadow: inset 0 8px 20px rgba(0,0,0,0.1);
   box-shadow:         inset 0 8px 20px rgba(0,0,0,0.1);
   border-bottom-right-radius: 8px;
    border-top-right-radius: 8px;
    border-bottom-left-radius: 8px;
    border-top-left-radius: 8px;
}
.skills :hover{
cursor:pointer;
    }
    .skillsover1 :hover{
cursor:pointer;
    }
.skillsover1{
    position:relative;
    top:-372px;
    width:100%;
    height:394px;
    background:rgba(10,10,10,1);
    z-index:20;
}
    .skillsover2 :hover{
cursor:pointer;
    }
.skillsover2{
    position:relative;
    top:-372px;
    width:100%;
    height:394px;
    background:rgba(10,10,10,1);
    z-index:20;
}
.cvpage li{
    list-style-type: none;
    }
.skills li{
    // list-style-type: none;
    // color:white;
    // font-size: 16px;
    // background:rgba(255,255,255,0.1);
    // padding-top:20px;
    // padding-bottom:20px;
    // text-align: center;
    // border-bottom:2px solid $cs_01;
}
.avatar{
    width:200px;
    height:200px;
    background: $cs_00;
    border:2px solid transparent;
    border-radius: 100%;
    margin:auto;
}
.avatarimg{
    position:relative;
    /* top margin = (avatar height) - (avatarimg height/2) */
    top:20px;
    width:160px;
    height:160px;
    background: $cs_hi;
    border:2px solid $cs_00;
    border-radius: 100%;
    margin:auto;
    box-shadow: 0px 0.5px 15px rgba(0,0,0,0.2);
}
.me{
    background-image:url('https://avatars3.githubusercontent.com/u/13386774?v=4&s=460');
    background-size:130% auto;
    background-position:52%;
}
.logobtn{
    cursor:pointer;
    margin:auto;
    width:200px;
     height:200px;
     border-radius:100%;
     border:2px solid transparent;
     background:transparent;
}
.contact-footer{
    width:100%;height:auto;margin:auto;background:rgba(255,255,255,0);
}
.social-footer{
    width:60%; margin:auto; height:auto; background:rgba(255,255,255,0); position:absolute; bottom:10px; left:50%; margin-left:-30%;
}
.foot{
    width:100%; min-height:250px; height:auto; background:rgba(255,255,255,0); position:relative; top:-50px;
}
.fc1{
    color:$font_color;
}
.fc4{
    color:$cs_hi;
}
#subhead{
font-family: 'Comfortaa', cursive;
    font-size:24px;
}
.well p{
    color:$font_color;
    font-family: 'Lato', sans-serif;
  font-weight: 300;
}
.well li{
    font-family: 'Lato', sans-serif;
  font-weight: 300;
  font-size:16px;
    color:$font_color2;
}
#rale{
    font-family: 'Raleway', sans-serif;
}



.lassoHeadStretch{
        transition:0.6s ease all;
    top:200px; background:white; opacity:1; 
    box-shadow: 0px 4px 5px rgba(0,0,0,0.2);
    }
    
     

p{
    font-family: 'Raleway', sans-serif;
}
.block-left{
	width:100%; height:500px; background:$color1; border-right:1px solid #000;
}
.block-mid{
	width:100%; height:500px; background:$color1;
}
.block-right{
	width:100%; height:500px; background:$color1; border-left:1px solid #000;
}
.cvpage{
    width:100%;
    min-height:500px;
    height:$pageY;
    background:$cs_01;
}  
.pjpage{
    width:100%;
    min-height:500px;
    height:$pageY;
    background:$cs_02;
    box-shadow: 0px -2px 5px rgba(0,0,0,0.2);
} 
.blpage{
    width:100%;

    min-height:500px;
    padding-top:10px;
    height:$pageY;
    background:#fff;
} 
/* ---- page dots ---- */

.flickity-page-dots {
  position: absolute;
  width: 100%;
  bottom: -25px;
  padding: 0;
  margin: 0;
  list-style: none;
  text-align: center;
  line-height: 1;
}

.flickity-rtl .flickity-page-dots { direction: rtl; }

.flickity-page-dots .dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 0 8px;
  background: $cs_hi;
  border-radius: 50%;
  opacity: 0.25;
  cursor: pointer;
}

.flickity-page-dots .dot.is-selected {
  opacity: 1;
}
.carousel {
  background: transparent;
}


.caro-title{
    transition:0.4s ease all;
    z-index:5;
position:absolute; 
bottom:0;
width:100%; 
border-bottom-right-radius: 8px; 
border-bottom-left-radius: 8px;
border-top:4px solid rgba(0,0,0,0.8);
color:#000;
background:transparent; height:auto; text-align:center;
 padding-top:10px;
 padding-bottom:10px;
font-family: 'Raleway', sans-serif;
}
.caro-title h2{
    font-size:24px;
}

.caro-content{
    z-index:16;
    position:absolute; top:50px; left:50%; margin-left:-200px;
    width:400px; height:auto; text-align:center; max-height:200px;
    background-color:rgba(0,0,0,0);
}
#month{
    text-align:center;
    color:#fff;
    font-family: 'Raleway', sans-serif;
    margin-top:3px;
    font-size:12px;
    padding-bottom:5px;

}
#date{
    text-align:center;
    color:#000;
    font-family: 'Raleway', sans-serif;
    margin-top:-20px;
    font-size:24px;
    padding-bottom:12px;
    background-color:#fff;

}
.ctpage{
    width:100%;
    height:540px;
    max-height:auto;
    background:$cs_04;

} 
#cttexture {
background:red;
background-image:url('$cs_texture');
background-repeat:repeat;
  width: 100%;
  height: 100%;
  position: absolute;
  opacity:0.5;
  bottom: 0;
  left: 0;
}
#cttexture {
  z-index: 10;
}
.cttint{
 width:100%;
 margin:auto;
 position:relative;
  z-index: 8;
    height:540px;
    overflow-y:hidden;
    padding-top:20px;
    max-height:auto;
    top:0px;
    background:$cs_01;
    opacity:1;
      -moz-box-shadow:   inset 0 -3px 10px rgba(0,0,0,0.4);
   -webkit-box-shadow: inset 0 -3px 10px rgba(0,0,0,0.4);
   box-shadow:        inset  0 -3px 10px rgba(0,0,0,0.4);
   // border-top-left-radius: 20px;
   //  border-top-right-radius: 20px;
    }
    .cttint .colorband{
        width:100%;
        height:10px;
        background:red;
    }
    .lift{
        position:relative;
    z-index:15;
    }
    .chatpop{
        width:100%; margin:auto; height:auto; background:$cs_02;
         padding:10px;padding-top:10px;padding-bottom:10px;
         position:relative;
    z-index:13;
    border-top-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
    }
.chatmsg{
    transition:0.5s ease all;
    width:100%;
    position:relative;
    z-index:10;
    height:100px;
    font-size:16px;
    color:#1b1f20;
    padding-left:15px;
    padding-right:50px;
    padding-top:10px;
    margin-top:-60px;
    border:2px solid transparent;
    // border-top-left-radius: 15px;
    // border-bottom-right-radius: 15px;
    // border-top-right-radius: 15px;
    // border-bottom-left-radius: 15px;
}
.chatmsg:hover{
transition:0.5s ease all;
height:150px;
}
.chatsub{
    width:30px;height:30px;
    background:rgba(0,0,0,0);
    color:#fff;
    font-size:18px;
    border:2px solid transparent;
    border-radius:100%;
    position:relative;
    z-index:20;
    float:right;
    top:55px;
    right:10px;
    
}
.chatsub:hover{
cursor:pointer;
    }

.chatsubject{
 width:100%;
    z-index:12;
 position:relative;
 top:-20px;
 margin:auto;
    height:40px;
    font-size:16px;
    color:#1b1f20;
    border:2px solid transparent;
     border-bottom:1px solid #e0e0e0;
    padding-left:15px;
    padding-right:55px;
    
}
.chatname{
 width:49%;
 display:inline-block;
 margin:auto;
    height:40px;
    font-size:16px;
    color:#1b1f20;
    padding-left:15px;
     padding-right:10px;
    border:2px solid transparent;
    // border-top-left-radius: 15px;
    // border-bottom-right-radius: 15px;
    // border-top-right-radius: 15px;
    // border-bottom-left-radius: 15px;
}
.chataddress{
 width:49%;
 display:inline-block;
 margin:auto;
    height:40px;
    font-size:16px;
    color:#1b1f20;
    padding-left:15px;
    padding-right:10px;
    border:2px solid transparent;
    // border-top-left-radius: 15px;
    // border-bottom-right-radius: 15px;
    // border-top-right-radius: 15px;
    // border-bottom-left-radius: 15px;
}
.res-pad{
    padding:20px;padding-bottom:10px;padding-top:0px;
}
/*Media @ 760px or larger*/
@media screen and (min-width: 760px) {

    }
/*Media @ 760px or smaller*/
@media screen and (max-width: 760px) {
    .chatname{
 width:100%;
 border-bottom:1px solid #e0e0e0;
 }
 .chataddress{
 width:100%;
}
    .cvmid{
    padding-top:30px;
}
    .res-pad{
padding-left:100px;
padding-right:100px;
    }
    #more{
    display:none;
}
    .ctpage{
    height:640px;

} 
.cttint{
    height:640px;

}
    #mydiv {
margin-top:70px;
}

.chatbox{
    width:70%; margin:auto;
}

    .social-footer{
    width:100%;
    bottom:10px; left:0px; margin-left:0px;
    }
    .contact-footer{
        width:100%;
    }
    .foot{
    width:100%; min-height:250px; height:auto; margin-bottom:70px;
}
    .carousel-cell {
  width: 85%;
}
}
/*Media @ 495px or smaller*/
@media screen and (max-width: 495px) {
    .cvmid{
    padding-top:15px;
}
    .res-pad{
padding-left:60px;
padding-right:60px;
    }
    .social_icon{
    width:60px; height:60px;
    display:inline-block;
}
.chatbox{
    width:85%; margin:auto;
}
.social-footer{
    width:100%;
    padding-left:55px;
    padding-right:55px;
    margin:auto;
    // background:rgba(255,0,0,0.5);
}
    .foot{
margin-top:20px;
    }
    .caro-date{ bottom:70px; left:0px;
}
    .carousel-cell {
  width: 95%;
}
.caro-content{
    z-index:16;
    position:absolute; top:50px; left:50%; margin-left:-150px;
    width:300px; height:auto; text-align:center; max-height:200px;
    background-color:rgba(0,0,0,0);
}
 .pagination{
    transition:0.4s ease all;
    border-radius:0%;
    width:100%; height:50px; margin:auto; background:rgba(0,0,0,0.05);
    border:none;
    border-bottom:1px solid rgba(255,255,255,0.4); text-align:center; color:white;
}

    }
</style>
";

?>