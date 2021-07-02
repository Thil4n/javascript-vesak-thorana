<!DOCTYPE html>
<html>
<head>
  <title>ඩිජිටල් තොරණ | බැති ගී සරණිය</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
* {margin: 0px; padding: 0px;}
html, body {height: 100%;}


body{
  background-color: #000000;
}

 .led {
  width: 12px;
  height: 12px;
  background-color: #555555;
  margin: 0 auto;
  position: absolute;
  border-radius: 50%;
  left: 50%;
  top: 50%;
  margin-left: -5px;
  margin-top: -5px;
  z-index: -1;
}


.led-red {
  background-color: #550000;
}

.led-red.on {
    background-color: #FF0000;
}

.led-yellow {
  background-color: #555500;
}

.led-yellow.on {
    background-color: #FFFF00;
    box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 12px;
  }

.led-green {
  background-color: #005500;
}

.led-green.on {
    background-color: #ABFF00;
    box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #304701 0 -1px 9px, #89FF00 0 2px 12px;
}

.led-blue {
  background-color: #000055;
}

.led-blue.on {
    background-color: #12E0FF;
    box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #006 0 -1px 9px, #3F8CFF 0 2px 14px;
}

 .circle {
  position: absolute;
  left: 50%;
  top: 50%;

}


.img-0 {
  width: 250px;
  height: 250px;
  position: fixed;
  top: calc(50% - 125px);
  left: calc(50% - 125px);
  z-index: 999;
}

.bg {
  position: fixed;
  z-index: -1;
  top: calc(50vh - 340px);
  left: calc(50vw - 524px);
  width: 1040px;
  transform: rotate(0deg);
}




<?php
for ($i=0; $i <= 20; $i++) { 
  
  $deg = $i * (360/20);

  echo ".circle-0-1 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(40px);}\r\n";
  echo ".circle-0-2 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(60px);}\r\n";
  echo ".circle-0-3 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(80px);}\r\n";
  echo ".circle-0-4 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(100px);}\r\n";
  echo ".circle-0-5 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(120px);}\r\n";
  echo ".circle-0-6 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(140px);}\r\n";

  echo ".circle-1 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(80px);}\r\n";  
  echo ".circle-1 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(80px);}\r\n";
  echo ".circle-2 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(80px);}\r\n";
  echo ".circle-3 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(80px);}\r\n";
  echo ".circle-4 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(80px);}\r\n";
  echo ".circle-5 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(80px);}\r\n";
  echo ".circle-6 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(80px);}\r\n";
  echo ".circle-7 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(80px);}\r\n";
  echo ".circle-8 .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(80px);}\r\n";

}

for ($i=0; $i <= 40; $i++) { 
  
  $deg = $i * (360/40);

  echo ".modal-circle .led:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(240px);}\r\n";

}

for ($i=1; $i <= 8; $i++) { 
  
  $deg = ($i-1) * (360/8);


  echo ".outer-circle .circle:nth-child(".$i.") {transform: rotate(" . $deg . "deg) translate(230px);}\r\n";
}
?>


.circle-container > * {
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 8em;
  height: 8em;
  margin: -4.1em;
}

<?php

for ($i=1; $i <= 8 ; $i++) { 
  $deg = 90 + ($i-1) * 45;

echo ".circle-container > :nth-of-type(". $i .") {transform: rotate(". $deg . "deg) translate(230px) rotate(-". $deg . "deg);}\r\n";

}
?>


.circle-container img {
  display: block;
  width: 100%;
  border-radius: 50%;
  cursor: pointer;
}

.circle-container img:hover {
  border: 2px solid #F0F0FF;
}

.small-screen-msg {
  display: none;
}

.small-screen-msg  h2{
  text-align: center;
  color: #ffffff;
}

@media only screen and (max-width: 1024px) {
  .page {
    display: none;
  }

  .small-screen-msg {
    display: block;
  }
}


.curtain {
  margin: 0;
  width: 100%;
  overflow: hidden;
}
.curtain-wrapper {
  width: 100%;
  height: 100%;
  margin: 0;
}

.curtain-panel {
  display: flex;
  align-items: center;
  background: #5F0A0D;
  color: #fff;
  float: left;
  position: relative;
  width: 50%;
  height: 100vh;
  transition: all 4s ease-out;
  z-index: 2;
  margin: 0;
}
.curtain-left {
  justify-content: flex-end;
  transform: translateX(0);
}
.curtain-right {
  justify-content: flex-start;
  transform: translateX(0);
}

.curtain-left.open {
  transform: translateX(-100%);
}

.curtain-right.open {
  transform: translateX(100%);
}

.content {
  z-index: 5;
}

.curtain-panel {
  z-index: 1000;
}


.modal {
  position: fixed;
  display: none;
  margin: 0 auto;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.9);
  z-index: 9999;
  cursor: pointer;

}
.modal-circle {
  position: fixed;
  left: 330px;
  top: 50%;
}


.modal .frame-img{
  width: 460px;
  height: 460px;
  border-radius: 50%;
  position: fixed;
  left: 100px;
  top: calc(50% - 230px);
}


#writer {
  color: #FFFFFF;
}

.paper {
  width: 520px;
  height: auto;
  position: fixed;
}

#writer {
  max-width: 400px;
  margin-left: 60px;
  top: 100px;
  position: fixed;
  color: #814F2C;
}

.bottm_buton_set {
  position: fixed;
  bottom: 90px;
  right: 250px;
}

.bottm_buton_set .btn{
    background-color: rgb(123, 77, 43, 0.8);
    color: #FFFFFF;
}

   .lotus{
      width: 150px;
      height: 150px;
    }

    .lotus-animation {
      width: 150px;
      height: 150px;
      background-color: #FF0000;
      position: fixed;
      z-index: 999;
      top: calc(50% + 160px);
    }

    .lotus-animation.left {
      left: calc(50% - 440px);
    }

    .lotus-animation.right {
      left: calc(50% + 290px);
    }

.bt-led {
  width: 12px;
  height: 12px;
  background-color: #555555;
  margin: 0 auto;
  border-radius: 50%;
}

.bottom-led-pannel{
  width: 1010px;
  height: 190px;
  position: fixed;
  top: calc(50% + 145px);
  left: calc(50% - 505px);
      z-index: -1;
}

.led-line {
  display: flex;
  margin-top: 10px;
}

.bt-led.hidden {
  background-color: rgb(0,0,0,0);
  box-shadow: none !important;
}

  </style>
</head>
<body>
<div class="modal">
<div class="row">
    <div class="col-sm-6">
    <div class="modal-circle">
<?php
for ($i=0; $i < 40; $i++) {

  echo "<div class=\"led led-". $i ."\"></div>\r\n";
}
?>
</div>
    <img class="frame-img">
  </div>
  <div class="col-sm-6">
    <img src="img/paper.png" class="paper">
    <h1 id="writer"></h1>
    <div class="bottm_buton_set">
      <button class="btn prev_btn">පෙර රූප රාමුව</button>
      <button class="btn next_btn">මීළඟ රූප රාමුව</button>
      <button class="btn credit_btn">ස්තූතිය</button>
    </div>
  </div>
</div>
</div>
<div class="page">
  <div class="curtain">
  <div class="curtain-wrapper">
    <div class="curtain-panel curtain-left">
      <img src="img/curtain-left-0.jpg">
    </div>
  
    <div class="curtain-panel curtain-right">
     <img src="img/curtain-right-0.jpg">
    </div>
  </div>
</div>


<div class="content">
<ul class='circle-container'>
<?php

$tooltips = [
          
          "පලමු", "දෙවන", "තෙවන", "සිවුවන", "පස්වන", "හයවන", "හත්වන", "අටවන"
        ];

for ($i=1; $i <= 8; $i++) { 
  echo "<li><img title = \" " . $tooltips[$i-1] . " රූප රාමුව\" data-id=\"" . $i . "\" src=\"img/" . $i . ".jpg\"></li>\r\n";
}
?>
</ul>


<img class="img-0" src="img/0.png">
<img class="bg"  src="img/bg.png">

<div class="lotus-animation left" style="display: none;">
  <img class="lotus"  src="img/lotus.png">
</div>

<div class="lotus-animation right" style="display: none;">
  <img class="lotus" src="img/lotus.png">
</div>

<div class="bottom-led-pannel">

<div class="led-line">

<?php
for ($i=1; $i <= 40; $i++) {

  $index = $i-20; 

if (10 < $i && $i < 31) {

  echo "<div class='bt-led hidden b". $index."'></div>\r\n";
}else{
  echo "<div class='bt-led b". $index."'></div>\r\n";  
}

}
?>
</div>

<div class="led-line">

<?php
for ($i=1; $i <= 40; $i++) { 

  $index = $i-20; 

if (10 < $i && $i < 31) {
  echo "<div class='bt-led hidden b". $index."'></div>\r\n";
}else{
  echo "<div class='bt-led b". $index."'></div>\r\n";  
}

}
?>
</div>

<div class="led-line">

<?php
for ($i=1; $i <= 40; $i++) { 

  $index = $i-20; 

if (10 < $i && $i < 31) {
  echo "<div class='bt-led hidden b". $index."'></div>\r\n";
}else{
  echo "<div class='bt-led b". $index."'></div>\r\n";  
}

}
?>
</div>

<div class="led-line">

<?php
for ($i=1; $i <= 40; $i++) {
  $index = $i-20;  

if (10 < $i && $i < 31) {
  echo "<div class='bt-led hidden b". $index."'></div>\r\n";
}else{
  echo "<div class='bt-led b". $index."'></div>\r\n";  
}

}
?>
</div>

<div class="led-line">

<?php
for ($i=1; $i <= 40; $i++) { 

  $index = $i-20; 

if (15 < $i && $i < 25) {
  echo "<div class='bt-led hidden b". $index."'></div>\r\n";
}else{
  echo "<div class='bt-led b". $index."'></div>\r\n";  
}

}
?>
</div>

<div class="led-line">

<?php
for ($i=1; $i <= 40; $i++) {
  $index = $i-20;  

if (16 < $i && $i < 25) {
  echo "<div class='bt-led hidden b". $index."'></div>\r\n";
}else{
  echo "<div class='bt-led b". $index."'></div>\r\n";  
}

}
?>
</div>

<div class="led-line">

<?php
for ($i=1; $i <= 40; $i++) {
  $index = $i-20;  

if (17 < $i && $i < 24) {
  echo "<div class='bt-led hidden b". $index."'></div>\r\n";
}else{
  echo "<div class='bt-led b". $index."'></div>\r\n";  
}

}
?>
</div>

<div class="led-line">

<?php
for ($i=1; $i <= 40; $i++) { 
    $index = $i-20; 

if (18 < $i && $i < 23) {
  echo "<div class='bt-led hidden b". $index."'></div>\r\n";
}else{
  echo "<div class='bt-led b". $index."'></div>\r\n";  
}

}
?>
</div>





</div>

<div class="middle-circle">
<div class="circle-0-1">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-blue led-". $i ."\"></div>\r\n";
}
?>
</div>



<div class="circle-0-2">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-yellow led-". $i ."\"></div>\r\n";
}
?>
</div>

<div class="circle-0-3">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-green led-". $i ."\"></div>\r\n";
}
?>
</div>

<div class="circle-0-4">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-red led-". $i ."\"></div>\r\n";
}
?>
</div>

<div class="circle-0-5">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-blue led-". $i ."\"></div>\r\n";
}
?>
</div>

<div class="circle-0-6">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-yellow led-". $i ."\"></div>\r\n";
}
?>
</div>
</div>

<div class="outer-circle">
<div class="circle circle-1">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-". $i ."\"></div>\r\n";
}

?>
</div>

<div class="circle circle-2">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-". $i ."\"></div>\r\n";
}
?>
</div>

<div class="circle circle-3">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-". $i ."\"></div>\r\n";
}
?>
</div>

<div class="circle circle-4">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-". $i ."\"></div>\r\n";
}
?>
</div>

<div class="circle circle-5">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-". $i ."\"></div>\r\n";
}
?>
</div>

<div class="circle circle-6">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-". $i ."\"></div>\r\n";
}
?>
</div>

<div class="circle circle-7">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-". $i ."\"></div>\r\n";
}
?>
</div>

<div class="circle circle-8">
<?php
for ($i=0; $i < 20; $i++) {

  echo "<div class=\"led led-". $i ."\"></div>\r\n";
}
?>
</div>
</div>
</div>
</div>


<div class="small-screen-msg">
  
  <h2>මෙම වෙබ් පිටුව ජංගම දුරකතන තිරයෙන් නැරබීමට නොහැකිය.</h2>
</div>

<audio id="audio" src="songs/audio_1.mp3"></audio>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}


async function middle_led_animation_1() {
  for (var i = 0; i < 6; i++) {
    await sleep(150);
    $(".circle-0-" + (i + 1) + " .led").addClass("on");
  }
  await sleep(200);
  $(".middle-circle .led").removeClass("on");

  middle_led_animation_1();
}

async function middle_led_animation_2() {
  var colors = ["red", "green", "yellow", "blue"];
  var j = 0;

  for (var i = 0; i < 20; i++) {

    await sleep(100);
    $(".middle-circle .led-" + i).addClass("on");

    j++;

    if (j == 4) {
      j = 0;
    }
  }
  
  await sleep(250);
  $(".middle-circle .led").removeClass("on");
  middle_led_animation_2()
}


async function outer_led_animation() {
  var colors = ["red", "green", "yellow", "blue"];
  var j = 0;

  for (var i = 0; i < 20; i++) {

    await sleep(100);
    $(".outer-circle .led-" + i).addClass("on led-" + colors[j]);

    j++;

    if (j == 4) {
      j = 0;
    }
  }
  
  await sleep(250);
  $(".outer-circle .led").removeClass("led-green led-red led-yellow led-blue");
  outer_led_animation();
}


var txt_list_array = [

  [
    "කරුණා නිධාන වූ සර්වඥයන් වහන්සේ දෙව්රම් වෙහෙර වැඩ වාසය කරනා සමයේ බණ භාවනාවේ කම්මැලි වූ භික්ෂුවකගෙන් එලෙස පසුබට වීමට හේතුව විමසූහ.",
    "මනාව සැරසීගත් ස්ත්රියක් කෙරෙහි සිත බැදීම යයි කීමෙන් පෙර මහෝත්තමයන් පවා ස්ත්රී වසගයට පැමිණි බව පැහැදිලි කර ස්වර්ණ මයුර ජාතකය වදාළහ.",
    "පෙර බරණැස බ්‍රහ්මදත්ත නම් රජ කෙනෙක් රාජ්ය කරන සමයෙහි බෝසතාණෝ රන්වන් මොණර රාජයෙකු ලෙස උපන්නේය.",
    "මනුෂ්ය වාසයෙහි විසීම උපද්රව සහිත බැවින් කදු වළලු තුනකට එහා දණ්ඩකාරණ්යට පියාසැරීය.",
    "සෑම දිනකම ගොදුරු සොයා යාමට පෙර සූර්ය නමස්කාර කර බ්රහ්ම මන්ත්ර වූ මොර පිරිත කියන මයුර රාජයා අතීතයේ පහල වූ බුද්ධාදී රත්නත්රයේ පිහිට පතයි.",
    "හිරු බැසයන කල්හිදී එලෙසම සිහිකරයි.",
    "ඒ ස්වර්ණ මධුර රාජයා දුටු වැද්දෙකු කෙදිනක හෝ  තම මරණයෙන් පසු රජතුමා එවන් මොණරකු පිළිබඳව  සොයන්නෙ නම් මේ මොණරා අල්ලා ගෙනවිත් දෙන ලෙස තම පුතුට කියා මිය පරලොව ගියේ ය."
  ],
  
  [
    "මේ අතර බරණැස අගමෙහෙසිය වූ කේමා බිසව රජුට සැලකර සිටියේ තමා පෙරදින රාත්රියේ සිහිනෙන් රණ මොණරකුගෙන් බණ අසනු දුටු බවයි.",
    "එය සැබෑවක් කරගත නොහැකි වුවහොත්  තමා මියයනු ඇති බවත් කීවා ය."
  ],
  
  [
    "රජු අමාත්යවරුන්ගෙන් විමසූකල මන්ත්ර දත් බමුණනගෙන් ඇසී ය.",
    "බමුණන් දඩයම් වැද්දන් එය දන්නා බව කීය.රාජ අණ නිකුත්විය.",
  ],
  
  [
    "දඩයම් වැද්දන් ඉදිරිපත්ව දණ්ඩකාරණ්යයේ උගුල් අටවා තිබුණද මොණරාගේ මන්ත්ර බලයත් සිල් බලයත් නිසා අල්ලා ගත නොහැකි විය.",
    "වැදි පුතු මියයන තුරුම උත්සහය අසාර්ථක විය.",
    "බලාපොරොත්තුව සිහිනයක්ම වූ ඛේමා බිසව මිය පරලොව ගියාය. ",
    " බිසව මළ සොවින් වෛර බැදගත් රජු ඒ රන්වන් මොණරාගේ මස් අනුභව කළ අයෙක් අජරාමර වන්නේ යැයි රන්පතක ලියා තබා මිය ගියේය.",
    "රන්පත කියවා අජරාමර වීමට තැත් කළ රජවරු හය දෙනෙක්ම එය අසාර්ථකව මියදුණි. වැද්දන්ටද එයම විය."
  ],
  
  [
    "හත්වන රජු උපායක් කල්පනා කරන්නේ මොණරාගේ සිත රාගයෙන් ව්යාකූල කර මන්ත්ර බලය බිදිමියි සිතා සුරූපී සෙබඩක අල්වා ගන්නට අණ කළේය.",
    "ඇයට මිහිරි හඬින් ගී ගයන්නට පුරුදු කර මොණරා ගමන් ගන්නා මගෙහි රැදවීය.",
    "රාගී හැගීම් ඇවිස්සුණ මොණරාගේ මන්ත්ර බලය බිදී ඒ උගුලට අසු විය. "
  ],

  [
    "රජු ඉදිරියේ මොණරා විමසා සිටියේ තමා අල්වා ගැනීමට හේතුව කුමක්ද කියා ය.",
    "තොපගේ මස් අනුභව කරන්නෙක් අජරාමර වන බව රන් පතක ලියා තිබුණේ යැයි රජු පිළිතුරු දුනි.",
    "තමා මියදෙන්නේ නම් එම මස් අනුභව කරන කෙනෙක් අජරාමර වන්නේ කෙසේදැයි විමසූ කළ ඒ රණ මයුර රාජයෙක් වීම යැයි රජු කීවේය.",
    "මොණරිදු එයට හේතුව පැහැදිලි කරමින්  පෙර භවයක බරණැස සක්විති රජවරු දැහැමින් රට පාලනය කල අතර නිති පන්සිල් රැකි නිසා මරණින් මතු දෙව් ලොව උපන් බවත්,",
    "චුතව පසු ආත්මයක කල අකුසල කර්මයක් පලදී මොණර ආත්මයක්  ලැබුවද සිල් බලය නිසා රන් වන් වූ බවත් පැවසීය."
  ],
  
  [
    "තවද තෙමේ සක්විති රජු කල අහසින්  ගමන් ගත් යානය දැන් ඔබගේ මගුල් පොකුණ තුළ ඇති බවත් කී කල රජු පොකුණ ඉසින්නට සැලැස්වීය.",
    "එය සත්යයක් වූයෙන් ප්රීතියට පත් රජු මොණරාට ජීවිත දානය පිරිනැමීය. බෝසතාණෝද රජුට අවවාද කර නැවත දණ්ඩකාරණයට පියාසැරීය. ",
    "ඒ කතාව ඇසූ උකටලීව සිටි භික්ෂුව රහත් බවට පත් විය.",
    "එකල රජු නම් ආනන්ද තෙරණෝය. ස්වර්ණ මයුර රාජාව උපන්නේ තමන් වහන්සේම යැයි වදාළ සේක.",
  ],
  
  [
    "තවද තෙමේ සක්විති රජු කල අහසින්  ගමන් ගත් යානය දැන් ඔබගේ මගුල් පොකුණ තුළ ඇති බවත් කී කල රජු පොකුණ ඉසින්නට සැලැස්වීය.",
    "එය සත්යයක් වූයෙන් ප්රීතියට පත් රජු මොණරාට ජීවිත දානය පිරිනැමීය. බෝසතාණෝද රජුට අවවාද කර නැවත දණ්ඩකාරණයට පියාසැරීය. ",
    "ඒ කතාව ඇසූ උකටලීව සිටි භික්ෂුව රහත් බවට පත් විය.",
    "එකල රජු නම් ආනන්ද තෙරණෝය. ස්වර්ණ මයුර රාජාව උපන්නේ තමන් වහන්සේම යැයි වදාළ සේක.",
  ]
  
];


var slide = 1;

async function type_writer(n) {

  for (var i = 0; i < txt_list_array[n-1].length; i++) {

    if (slide != n) {
      break;
      return false;
    }

    $("#writer").text(txt_list_array[n-1][i]).stop(true,true).hide().fadeIn(1000);
    await sleep(8000);
  }
}


async function modal_led_animation() {

  var colors = ["red", "green", "yellow", "blue"];
  var j = 0;

  for (var i = 0; i < 40; i++) {

    await sleep(100);
    $(".modal-circle .led-" + i).addClass("on led-" + colors[j]);

    j++;

    if (j == 4) {
      j = 0;
    }
  }
  
  await sleep(250);
  $(".modal-circle .led").removeClass("led-green led-red led-yellow led-blue");
  modal_led_animation();
}


middle_led_animation_1();
outer_led_animation();



$(document).click(function() {
  $(".curtain-left").addClass("open");
  $(".curtain-right").addClass("open");
  document.getElementById("audio").play();
})

$(document).ready(function() {
  setTimeout(function(){ 
    $(".curtain-left").addClass("open");
    $(".curtain-right").addClass("open");
    document.getElementById("audio").play();
  }, 4000);

  setTimeout(function(){ 
    alert("තොරණ විස්තරය කියවීමට එක් එක් රූප රාමුව ක්ලික් කරන්න");
  }, 10000);  

})


$(".circle-container li img").click(function () {
  var id = $(this).data("id");
  console.log(id);
  slide = id;

  if (id == 1) {
    $(".bottm_buton_set .prev_btn").attr("disabled", "disabled");

  }else if (id == 8) {
    $(".bottm_buton_set .next_btn").attr("disabled", "disabled");
  }

  $(".modal .frame-img").attr("src", "img/" + id + ".jpg");
  document.getElementById("audio").play();
  $(".modal").fadeIn(1000);
  modal_led_animation();

  stop_writing = true;
  type_writer(id);
})


$(".bottm_buton_set .next_btn").click(function () {

  $(".bottm_buton_set .prev_btn").removeAttr("disabled", "disabled");
 
  slide++;

  $(".modal .frame-img").attr("src", "img/" + slide + ".jpg").stop(true,true).hide().fadeIn(1000);
  type_writer(slide);
    
  if (slide == 8) {
    $(this).attr("disabled", "disabled");
  }

   return false;
})


$(".bottm_buton_set .prev_btn").click(function () {

  $(".bottm_buton_set .next_btn").removeAttr("disabled", "disabled");
 
  slide--;

  $(".modal .frame-img").attr("src", "img/" + slide + ".jpg").stop(true,true).hide().fadeIn(1000);
  type_writer(slide);
    
  if (slide == 1) {
    $(this).attr("disabled", "disabled");
  }

   return false;
})

$(".modal").click(function () {

  $(".modal").fadeOut(1000);
  $(".modal-circle .led").removeClass("on");
})


async function lotus_animation() {
  var colors = ["#FF0000", "#00FF00", "#185adb", "#f55c47"];

  for (var i = 0; i < 20; i++) {

    await sleep(200);

    $(".lotus-animation").css("background-color" , colors[i]);

    if (i == 5) {
      i = 0;
    }
  }
}

//lotus_animation();

async function bottom_led_animation() {

  var colors = ["red", "green", "yellow", "blue"];
  var j = 0;

  for (var i = 1; i <= 20; i++) {

    await sleep(100);
    

    $(".bottom-led-pannel .led-line:nth-child(1) .b" + (-i) + " , .bottom-led-pannel .led-line:nth-child(1) .b" + i).addClass("on led-blue");
    $(".bottom-led-pannel .led-line:nth-child(2) .b" + (-i) + " , .bottom-led-pannel .led-line:nth-child(2) .b" + i).addClass("on led-red");
    $(".bottom-led-pannel .led-line:nth-child(3) .b" + (-i) + " , .bottom-led-pannel .led-line:nth-child(3) .b" + i).addClass("on led-green");
    $(".bottom-led-pannel .led-line:nth-child(4) .b" + (-i) + " , .bottom-led-pannel .led-line:nth-child(4) .b" + i).addClass("on led-yellow");
    $(".bottom-led-pannel .led-line:nth-child(5) .b" + (-i) + " , .bottom-led-pannel .led-line:nth-child(5) .b" + i).addClass("on led-blue");
    $(".bottom-led-pannel .led-line:nth-child(6) .b" + (-i) + " , .bottom-led-pannel .led-line:nth-child(6) .b" + i).addClass("on led-red");
    $(".bottom-led-pannel .led-line:nth-child(7) .b" + (-i) + " , .bottom-led-pannel .led-line:nth-child(7) .b" + i).addClass("on led-green");
    $(".bottom-led-pannel .led-line:nth-child(8) .b" + (-i) + " , .bottom-led-pannel .led-line:nth-child(8) .b" + i).addClass("on led-yellow");
    j++;

    if (j == 4) {
      j = 0;
    }
  }
  
  await sleep(250);
  $(".bottom-led-pannel .bt-led").removeClass("led-green led-red led-yellow led-blue");
  bottom_led_animation();
}

bottom_led_animation()

</script>
</html>