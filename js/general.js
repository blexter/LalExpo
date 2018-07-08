$(document).ready(function(){
    $('.section10').on('inview', function(event, isInView) {
      if (isInView) {
        $('.section10 h1').addClass('animated fadeIn')
        $('.section10 .derr div').addClass('animated bounceInRight')
        $('.section10 .log img').addClass('animated fadeIn')
      } else {
        $('.section10 h1').removeClass('animated fadeIn')
        $('.section10 .derr div').removeClass('animated bounceInRight')
        $('.section10 .log img').removeClass('animated fadeIn')
      }
    });
    $('.section01 .pre').on('inview', function(event, isInView) {
      if (isInView) {
        $('.izq01').addClass('animated bounceInRight')
        $('.section01 a').addClass('animated fadeIn')
      } else {
        $('.izq01').removeClass('animated bounceInRight')
        $('.section01 a').removeClass('animated fadeIn')
      }
    });
    $('.section03').on('inview', function(event, isInView) {
      if (isInView) {
        $('.section03 p').addClass('animated bounceInLeft')
        $('.section03 a').addClass('animated fadeIn')
      } else {
        $('.section03 p').removeClass('animated bounceInLeft')
        $('.section03 a').removeClass('animated fadeIn')
      }
    });
    $('.menu2 div').hover(function(){
      $('.menu2 div').removeClass('act')
    	$(this).addClass('act')
    },function(){
    	//$(this).removeClass('act')
    })
    $('.section02 a,.section04 a').hover(function(){
    	$(this).addClass('pulse animated')
    },function(){
      $(this).removeClass('pulse animated')
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
  function showForm(f){
  $('#login').show()
  $('#'+f).css('opacity','0').css('display','block').animate({opacity:1})
}
function closeForm(){
  $('.login').hide()
  $('.preLogin').animate({opacity:0},400,function(){
    $('.preLogin').hide()
  })
}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n,esAuto) {
  if(TIMERSLIDE)
      clearTimeout(TIMERSLIDE)
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  TIMERSLIDE=setTimeout(function(){plusSlides(1,true)},5000)
  //if(dots[slideIndex-1]){
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  //}
}
function login(){
  if(typeof realBotones =='undefined')
  realBotones=$('#preLogin .login_botones').html()
  $('#preLogin .login_botones').html('<a class="botLink">Loading...</a>')
  $('#log_leyenda').html('')
  $.ajax({
    url:'servicios/login.php?log=1',data:$('#preLogin').serialize(),type:'post',
    success:function(d){
      if(d==1){
        $('#preLogin .login_botones').html('<a class="botLink">Entering...</a>')
        document.location.href='dashboard.php';
      }else{
        $('#preLogin .login_botones').html(realBotones)
        $('#log_leyenda').html('error: '+d)
      }
    },error:function(){
      $('#log_leyenda').html('Hubo un error al intentar ingresar, por favor, intente nuevamente.')
    }
  })
  return false
}