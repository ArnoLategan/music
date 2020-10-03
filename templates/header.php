


<head>
<title>My Pizzas</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.brand{
		background-color: red !important;
		font-size:16px !important;
	}
	.brand-text{
		color:red !important;
		text-align: left !important;
	}
	form{
		max-width: 460px;
		margin: 20px auto;
		padding: 20px;
	}
	.pizza{
		width: 100px;

		margin: 40px auto-30px;
		display: block;
		position:relative;
		top:-30px;
		left: 40px;
	}
	.container{background-color: grey;}

.navbar-inverse {
   
    border-color: red;
    border-bottom-width: medium;
    background-image: url(images/LOGO1.png);
    transform: translateX(-50%);
  left: 50%;
  position: absolute;
}

display: -webkit-flex;

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.bg-img {
  /* The image used */
/*  background-image: url("images/16.jpg");*/

  min-height: 450px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}

/* Position the navbar container inside the image */
.container1 {
  position: absolute;
  margin: 20px;
  margin-right: 50%;
  width: auto;
}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: black;
 z-index: 100;

}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: sans-serif;
}

.topnav a:hover {
  background-color: white;
  color: black;
}

	.caption {
  position: absolute;
  left: 0;
  top: 85%;
  width: 100%;
  text-align: center;
  color: black;
}

.caption1 {
  position: absolute;
  left: 0;
  top: 45%;
  width: 100%;
  text-align: center;
  color: black;
}

.caption1 span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 15px;
  letter-spacing: 10px;
}

.logo {
  
  top: -20px;
  
  text-align: center;
  color: #000;
  z-index: 1;
}	

.logo span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 15px;
  letter-spacing: 10px;
}

 .img1{
  	height: 200px;
  	width:230px;

  	  display: inline-block;
  margin-left: auto;
  margin-right: auto;

  }
</style>
</head>


<div class="bg-img">
  <div class="container1">
    <div class="topnav">
      <a href="#home"><i class="fa fa-fw fa-headphones"></i>Mixtapes</a>
      <a href="#news"><i class="fa fa-fw fa-bomb"></i>Charts</a>
      <a href="#contact"><i class="fa fa-fw fa-info"></i>About</a>
      <a href="#about"><i class="fa fa-fw fa-mobile"></i>Contact</a>
    </div>
  </div>
 <div class="logo">
 	<img src="images/LOGO1.png" class="img1">
  
  </div>
   <div class="caption1">
  <span style="background-color:transparent;" class="border">Our Music...</span>
  </div>
   <div class="caption">
  <span style="background-color:black" class="border">SCROLL DOWN</span>
  </div>
</div>