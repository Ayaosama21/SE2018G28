<?php
include_once('nav.php');
?>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<style>
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }

.body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
p.italic {font-size: 16px;}
.margin {margin-bottom: 45px;}


h1.italic{

  font-style: italic;

  }

img {
  opacity: 0.5;
  filter: alpha(opacity=50); /* For IE8 and earlier */
}
mark{
  background-color:green;
}
  
</style>


 
   <div class="container-fluid bg-1 text-center">
        <img src="0.jpg" opacity="0.5" width="1200" height="700" alt='Image'>
          <div class="centered">
        <h1 class="italic"> <font color='white' size='+4'>     WELCOME TO DEPORTES  </font></h1>
  
            
         </div>
         </div>


<div class="container-fluid bg-2 text-center mb-4">

  <div class="row">
    <div class="col-sm-4">
<i class='fas fa-swimmer' style='font-size:36px'></i>
<p> <font size='+2'>  Here you can find some informaion about sportes just click on  <mark ><a href="sports.php"> Sports </a></mark>  </font></p>

    </div>



     <div class="col-sm-4">
<i class='fas fa-bell' style='font-size:36px'></i>
<p>  <font color size='+2'>  If any event belonges to any kind of sports will happen near you, you get notification all you must do click on    <mark><a href="sign-in.php"> Sign up</a></mark> to have your account</p>
     </font></div>




     <div class="col-sm-4">     
<i class='far fa-handshake' style='font-size:36px'></i>
<p><font size='+2'> Once you have an accout you can search about clubs and the price of joining </font></p>

     </div>






     <?php
     include_once('footer.php');
     ?>
