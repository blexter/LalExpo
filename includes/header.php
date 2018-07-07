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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="css/fonts.css" />
  <link rel="stylesheet" href="css/general.css" />
  <script>
  $(document).ready(function(){
    $('.menu2 div').hover(function(){
      $('.menu2 div').removeClass('act')
    	$(this).addClass('act')
    },function(){
    	//$(this).removeClass('act')
    })
    var end = new Date('8/17/2018 9:30 AM');

    var _minute =  60000;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {
            clearInterval(timer);
            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);

        $('.dvRest .days').html(days)
        $('.dvRest .hours').html(hours)
        $('.dvRest .minutes').html(minutes)
    }
    timer = setInterval(showRemaining, 1000);
  })
  </script>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
  <div id="todo">
    <div class="topH">
      <div class="logo">
        <img src="img/logo.jpg" alt="LalExpo" />
      </div>
      <div class="botones">
        <img src="img/logotemp.jpg" class="logotemp" />
        <a href="javascript:;">Register</a>
        <a href="javascript:;">Log in</a>
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
    <div class="banners">
    </div>
    <!--<nav>
      <a href="index.php">Home</a>
      <a href="#">Be our sponsor</a>
      <a href="who.php">Who is coming</a>
      <a href="Schedule.php">Schedule</a>
      <a href="#">Gallery</a>
      <a href="#">Social</a>
      <a href="#">Awards</a>
      <a href="#">Info</a>
    </nav>-->
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