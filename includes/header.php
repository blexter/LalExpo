<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="utf-8" />
  <meta http-equiv="Content-Language" content="es"/>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <link rel="shortcut icon" href="favicon2.ico" type="image/x-icon" />
  <meta content="follow, index, all" name="robots" />
  <title>LALEXPO</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <script src="js/inviewport.jquery.js"></script>
  <script src="js/general.js"></script>

  <link rel="stylesheet" href="css/fonts.css" />
  <link rel="stylesheet" href="css/slideshow.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/general.css" />

</head>
<body itemscope itemtype="http://schema.org/WebPage">
  <div id="todo">
    <div class="topH">
      <div class="logo">
        <img src="img/logo.jpg" alt="LalExpo" />
      </div>
      <div class="botones">
        <img src="img/logotemp.jpg" class="logotemp" />
        <a href="#" onclick="showForm('preRegistrer')">Register</a>
        <a href="#" onclick="showForm('preLogin')">Log in</a>
        <a href="javascript:;" title="Español"><img src="img/esp.jpg" alt="Español" /></a>
      </div>
    </div>
    <div class="sepCont">
      <div class="max">
        <div class="dvBusc">
          <input type="text" class="busc" placeholder="Search..." />
        </div>
        <div class="dvRest">
          Days <span class="days">00</span> Hours <span class="hours">00</span> Minutes <span class="minutes">00</span>
        </div>
      </div>
    </div>
    <div class="slideshow-container">
      <div class="mySlides fade"style="display: block;">
        <img src="img/redpartytest2.gif" style="width:100%">
        <div class="text">Caption Text</div>
      </div>
      <div class="mySlides fade">
        <img src="img/testbahiaparty.gif" style="width:100%">
        <div class="text">Caption Two</div>
      </div>
      <div class="mySlides fade">
        <img src="img/testwhiteparty.gif" style="width:100%">
        <div class="text">Caption Three</div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
<?
function setAct($p){
  $pag=explode('/',$_SERVER['PHP_SELF']);
  $pag=$pag[count($pag)-1];
  return ($p==$pag)?'class="act"':'';
}?>
    <nav class="nav2">
      <a href="index.php" <?=setAct('index.php')?>>Home</a>
      <a href="#">Be our sponsor</a>
      <a href="who.php" <?=setAct('who.php')?>>Who is coming</a>
      <a href="schedule.php" <?=setAct('schedule.php')?>>Schedule</a>
      <a href="#">Gallery</a>
      <a href="#">Social</a>
      <a href="#">Awards</a>
      <a href="#">Info</a>
    </nav>
    <div class="menu2">
      <div class="act left">
        <? include('img/sub01.svg')?>
        <span>Presenting Sponsors</span>
      </div><div class="center">
        <? include('img/sub02.svg')?>
        <span>Accreditations</span>
      </div><div class="right">
        <? include('img/sub03.svg')?>
        <span>Community sponsor</span>
      </div>
    </div>