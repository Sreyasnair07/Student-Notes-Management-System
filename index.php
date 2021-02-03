<!DOCTYPE html>
<html>
<head>
<body bgcolor="white">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">

<style>
	*{font-family: 'Yusei Magic', sans-serif;}

	 body {
  background-image: url('images/loginbackground.jpg');
  background-attachment: fixed;
  background-size: cover;
}

.header img {
  float: center;
  width: 1200px;
  height: 100px;
  background: #555;
}
.menu{
	background: rgb(0,100,0);
	text-decoration: none;
	color: #fff;
	text-align: center;
	padding: 35px;
}
.menu-bar{
	background:transparent;
	text-align: center;
}
.menu-bar ul
{
	display: inline-flex;
	list-style: none;
	color: #fff;
}
.menu-bar ul li
{
	width: 150px;
	margin: 15px;
	padding: 10px;

}
.menu-bar ul li a
{
	text-decoration: none;
	color: rgb(0,100,0);
}
.active, .menu-bar ul li:hover 
{
	background-color: #009900;
	border-radius: 5px;

}
.menu-bar .fa
{
	margin-right: 8px;
}


 {box-sizing: border-box;}


body {font-family: Verdana, sans-serif;}


.mySlides {display: none;}


img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  background-color: rgb(0,100,0);
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: black;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 2s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

}
</style>
</head>


<body>
<div class="header">
   <center><img src="images/mitlogo.png" alt="logo"></center>
  
</div>
<div class="menu">
	<h style="font-size:50px">MIT Digital Notes</h>
  
</div>
<div class="menu-bar">
	<ul>
		<center><li><a href="login.php"><p style="font-size:25px"><b>Get Notes</b></p></a></li></center>
	</ul>
</div>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="images/slides/s1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="images/slides/s2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="images/slides/s3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="images/slides/s4.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="images/slides/s5.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
<div class="menu">
	<?php require_once('footer.php'); ?>
  
</div>

</body>
</html>
