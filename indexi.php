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
  </head>
<style>
#btn{
	border:none;
	width:150px;
	background-color:gray;
	color:white;
	height:50px;
	position:relative;
}
span:nth-child(1){
	position:absolute;
	width:0;
	bottom:0;
	left:0;
	height:1px;
	background-color:black;
	transition:0.5s ease;
}
span:nth-child(2){
	position:absolute;
	width:0;
	top:0;
	right:0;
	height:1px;
	background-color:black;
	transition:0.5s ease;
}
span:nth-child(3){
	position:absolute;
	width:1px;
	bottom:0;
	left:0;
	height:0;
	background-color:black;
	transition:0.5s ease;
}
span:nth-child(4){
	position:absolute;
	width:1px;
	top:0;
	right:0;
	height:0;
	background-color:black;
	transition:0.5s ease;
}
#btn:hover span:nth-child(1){
	transform-origin:right;
	width:100%;
}
#btn:hover span:nth-child(2){
	transform-origin:right;
	width:100%;
}
#btn:hover span:nth-child(3){
	transform-origin:right;
	height:100%;
}
#btn:hover span:nth-child(4){
	transform-origin:right;
	height:100%;
}
</style>
<body>
<button id="btn">Value
<span></span>
<span></span>
<span></span>
<span></span></button>
</body>
</html>