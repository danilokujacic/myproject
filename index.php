<!DOCTYPE html>
<html>
<head>
<title>SD</title>
  <meta name="description" content="Smooth Designing">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Smooth Desing">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://github.com/IanLunn/Hover.git"/>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
<style>
*{
	padding:0;
	margin:0;
}
header{
	height:10vh;
	background-color:black;
	position:relative;
}
button{
	background-color:RGBA(0,0,0,0);
	position:absolute;
	bottom:15%;
	border:none;
	left:50%;
	cursor:pointer;
	font-family: 'Anton', sans-serif;
	font-size:2vw;
	padding:15px;
	opacity:0;
	transition:0.5s ease;
	color:white;
	transform:translate(-50%,-5%);
}
button::before {
  position: absolute;
  content: '';
  top:0;
  left: 0;
  transform:skew(-20deg);
  height: 100%;
  width:100%;
  transform-origin:left;
  transition:width 0.25s ease;
  border:1px solid white;
}
button::after {
  position: absolute;
  content: '';
  top:0;
  left: 0;
  height: 100%;
  width:0;
  transform:skew(-20deg);
  background-color: #cccc00;
  transition:width 0.25s ease;
  z-index:-1;
}
button:hover{
	color:black;
}
button:hover::after {
  width: 100%;
}
#logo{
	float:left;
	font-family: 'Anton', sans-serif;
	width:20%;
	height:100%;
	text-align:center;
}
h2{
	position:absolute;
	font-size:8vw;
	width:80%;
	opacity:0;
	transition:0.5s ease;
	text-align:center;
	color:white;
	font-family: 'Anton', sans-serif;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
}
#hdpic{
	height:90vh;
	width:100%;
	background-size:100% 100%;
	background-image:url('header.jpg');
	transition:3s ease;
	 background-position: center; 

}
#hdpic:hover{
	background-size:120% 120%;
}
h1{
	font-size:3vw;
	color:white;
	line-height:10vh;
	vertical-align:middle;
}
ul{
display:flex;
padding:10px;
list-style-type:none;}
ul li a{
	display:block;
	width:7vw;
	transition:0.5s ease;
	position:relative;
	height:50px;
	line-height:50px;
	font-family: 'Anton', sans-serif;
	font-size:20px;
	text-align:center;

text-decoration:none;
color:white;
transition:.5s;
margin:0 10px;}
ul li a:hover:first-letter {
    color: #cccc00;
}
.contact{
	width:25%;
	height:100%;
	float:left;
	position:relative;
		box-shadow:5px 5px 5px gray;
}
ul li a span{
	position:absolute;
	transition:transform .5s;
}
ul li a span:nth-child(1),ul li a span:nth-child(3){
	width:100%;
	height:1px;
	background:white;
}
ul li a span:nth-child(1){
	top:0;
left:0;
transform-origin: right;}
ul li a:hover span:nth-child(1){
	transform:scaleX(0);
transform-origin: left;
transition:transform .5s;}
ul li a span:nth-child(3){
	bottom:0;
left:0;
transform-origin: left;}
ul li a:hover span:nth-child(3){
	transform:scaleX(0);
transform-origin: right;
transition:transform .5s;}




ul li a span:nth-child(2),ul li a span:nth-child(4){
	width:1px;
	height:100%;
	background:white;
}
ul li a span:nth-child(2){
	top:0;
left:0;
transform: scale(0);
transform-origin: bottom;}
ul li a:hover span:nth-child(2){
	transform:scale(1);
transform-origin: top;
transition:transform .5s;}
ul li a span:nth-child(4){
	top:0;
right:0;
transform: scale(0);
transform-origin: top;}
ul li a:hover span:nth-child(4){
	transform:scale(1);
transform-origin: bottom;
transition:transform .5s;}
#followdiv{
	height:100vh;
	width:100%;
	background-color:white;
	position:relative;
}
#contacticon{
	width:90%;
	height:40%;
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
}
.fifi{
	font-size:5vw;
	color:black;
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
}
.fifi{
	transition:0.5s ease;
}
.link{
	opacity:0;
	transition:0.5s ease;
}
.animated{
	opacity:1;
}
.link:hover .fifi{
	font-size:10vw;
}
.active{
	opacity:1;
}
.contact:nth-child(1):hover {
  box-shadow:15px 15px 5px gray;
}
@media all and (max-width: 800px) {
	ul{
		float:right;
	}
	ul li a{
		width:10vw;
		font-size:2.5vw;
	}
	#contacticon{
		top:30%;
		width:80%;
	}
	#logo{
		width:initial;
		padding-left:3%;
	}
	
	.contact{
		width:100%;
		height:200px;
		margin-top:5%;
	}
	#logo h1{
		font-size:4.3vw;
	}
	#followdiv{
		height:initial;
		padding:5px;
	}
	h2{
		font-size:12vw;
	}
	button{
		bottom:25%;
		font-size:5vw;
	}
	#hdpic{
		background-attachment:initial;
		background-size:200% 200%;
	}
}
</style>
</head>
<body>
<header>
<div id="logo">
<h1>
Smooth Design
</h1>
</div>
<ul>
	<li>
		<a href="#">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<font color="white">Home</font>
		</a>
	</li>
	<li>
		<a href="#">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<font color="white">Galery</font>
		</a>
	</li>
	<li>
		<a href="#">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<font color="white">Contactrrr</font>
		</a>
	</li>
	<li>
		<a href="#">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<font color="white">Portfolio</font>
		</a>
	</li>
</ul>
</header>
<div id="hdpic">
<h2>
<font class="capital" color="#cccc00">S</font>mooth <font class="capital" color="#cccc00">D</font>esign
</h2>
<button class="hvr-sweep-to-right"><font>Follow me</font></button>
</div>
<div id="followdiv">
<div id="contacticon">
<a href="#" class="link">
<div class="contact">
<span class="fifi" href="#">
<i class="fa fa-facebook-f"></i>
</span>
</div>
</a>
<a href="#" class="link">
<div class="contact">
<span class="fifi" href="#">
<i class="fa fa-twitter"></i></i>
</span>
</div>
</a>
<a href="#" class="link">
<div class="contact">
<span  class="fifi" href="#">
<i class="fa fa-whatsapp"></i></i>
</span>
</div>
</a>
<a href="#" class="link">
<div class="contact">
<span class="fifi" href="#">
<i class="fa fa-instagram"></i></i>
</span>
</div>
</a>
</div>
</div>
<script>
var timeout;
$("#hdpic").hover(function(){
	$("h2").css({"opacity":"1"});
	 if (!$('button').is(':hover')) {
        clearTimeout(timeout);
    }
	timeout = setTimeout(function(){
		$( "button" ).addClass( "active" );
	},1000);
});
$("button").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#followdiv").offset().top
    }, 1000);
});
$("#hdpic").mouseleave(function(){
	$("h2").css({"opacity":"0"});
	$("button").removeClass("active");
	clearTimeout(timeout);
});
$(function(){   
var itemOffset = $('#followdiv').offset().top;

$(window).scroll(function(){
    var scrollTop = $(window).scrollTop();
    if(scrollTop >= itemOffset - 100){
        $(".link").css({"opacity":"1"});
    }
});});
</script>
</body>
</html>