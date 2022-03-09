<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Em Manutenção</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>

<script>



function timer(){

var countDownDate = new Date("Apr 9, 2022 06:26:55").getTime();





  var now = new Date().getTime();


  var distance = countDownDate - now;


  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


document.getElementById("days").innerHTML = days;
document.getElementById("hours").innerHTML = hours;
document.getElementById("minutes").innerHTML = minutes;
document.getElementById("seconds").innerHTML = seconds;




}


</script>




<body onload="timer()">
 <div class="full-page">
 <div class="logo">
 <span><a>Explicador-Inc</a></span>
 </div>{{--Logo--}}

 <div class="my-countdown">

 <div class="days">
 <div class="number">
 <span><a id="days">62</a></span>
 </div>{{--number--}}

 <div class="show-case">
 <span><a>dias</a></span>
 </div>{{--show-case--}}
 </div>{{--Days--}}





  <div class="hours">
 <div class="number">
 <span><a id="hours">15</a></span>
 </div>{{--number--}}

 <div class="show-case">
 <span><a>horas</a></span>
 </div>{{--show-case--}}
 </div>{{--hours--}}



  <div class="minutes">
 <div class="number">
 <span><a id="minutes">53</a></span>
 </div>{{--number--}}

 <div class="show-case">
 <span><a>minutos</a></span>
 </div>{{--show-case--}}
 </div>{{--minutes--}}


  <div class="seconds">
 <div class="number">
 <span><a id="seconds">06</a></span>
 </div>{{--number--}}

 <div class="show-case">
 <span><a>segundos</a></span>
 </div>{{--show-case--}}
 </div>{{--seconds--}}




 </div>{{--my-countdown--}}


 <div class="icons">
 <div class="fb">
 <span><a><i class="fa fa-facebook"></i></a></span>
 </div>{{--fb--}}

 <div class="tw">
 <span><a><i class="fa fa-twitter"></i></a></span>
 </div>{{--tw--}}

 <div class="inst">
  <span><a><i class="fa fa-instagram"></i></a></span>
 </div>{{--inst--}}


 </div>{{--icons--}}


 <div class="msg">
 <span>Este Site e direcionado aos Estudantes e Professores com a finalidade de troca de Conhecimentos e fornecimento de material de estudo</span>
 </div>{{--msg--}}


 <div class = "left-line">

 </div>{{--left-line--}}

 <div class="icon-clock">
 <span><i class="fa fa-clock-o"></i></span>
 </div>{{--icon-clock--}}


 <div class="right-line">

 </div>{{--right-line--}}



 <div class="content-page">
 <div class="title-content">
 <div class="t-title-content"><span><a>Site em Construção</a></span></div>{{--t-title-content--}}
 </div>{{--title-content--}}

  <div class="subtitle-content">
 <div class="t-subtitle-content"><span><a>Voltamos em Breve</a></span></div>{{--t-subtitle-content--}}
 </div>{{--subtitle-content--}}




 <div class="msg-content-1">
 <div class="t-msg-content-1"><span>Nosso Website esta sob Construção. Estara aqui em breve com incriveis aprimoramentos para o melhorando da experiencia do utilizador. </span></div>{{--t-msg-content-1--}}
 </div>{{--msg-content-1--}}

  <div class="msg-content-2">
  <div class="t-msg-content-2"><span>Se Junte a Nossa Newsletter. Nos Iremos Notifica-lo assim que o Site estiver Pronto</span></div>{{--t-msg-content-2--}}
 </div>{{--msg-content-2--}}

 <div class="box-form">
 <form>
 <div class="box-input">
 <div class="t-box-input"><span><input type="text" placeholder="Digite seu Endereco de Email" required/></span></div>{{--t-box-input--}}
 </div>{{--box-input--}}


 <div class="box-button">
 <div class="t-box-button"><span><a><label for="send-it">Subscrever</label></a></span></div>{{--t-box-button--}}
 <input type="submit" value="Subscribe" id="send-it" hidden/>
 </div>{{--box-input--}}

 </form>
 </div>{{--box-form--}}


 </div>{{--content-page--}}

 <footer>
 <span>&copy 2022 Site em Construção. Designed By <a>Milton Saveca</a></span>

 </footer>


 </div>{{--Full-Page--}}





<script>
var countDownDate = new Date("Apr 9, 2022 06:26:55").getTime();



var x = setInterval(function() {

var now = new Date().getTime();


var distance = countDownDate - now;

var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);


document.getElementById("days").innerHTML = days;
document.getElementById("hours").innerHTML = hours;
document.getElementById("minutes").innerHTML = minutes;
document.getElementById("seconds").innerHTML = seconds;


if (distance < 0) {
    clearInterval(x);
  }
}, 1000);

</script>








</body>
</html>
