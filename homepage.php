<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=advice-width, initial-scale=1.0">
 <link rel="stylesheet" href="indexStyle.css">
 <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css"> -->
 <!-- <link rel="stylesheet" href=home.css> -->
 <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
 <title>Home Page</title>
</head>

<body>
    <nav class="navbarr">
    <div class="inner-width">
      <a class="logo">Fairy Bakery</a>
      <div class="navbarr-menu">
        <ul id='MenuItems'>
          <a href="homepage.php" class="home" >Home</a>
          <a href="contact.php" class="button" >Contact</a>
          <a href="loginadmin_form.php" class="button" >ADMIN</a>
        </ul>
      </div>
    </div>
  </nav>
</body>


<body>
  <body>
 <div class="flavour">
  <div class="heading">
   <h1>What's on sale?</h1>
   <p>
    Save on gifts for next year with our end-of-year sale now
   </p>
   <h3><a href="#" class="button2" >Shop now > </a></h3>
  </div>

  <div class="container-fluid">
    <div class="nnn">
      <h1>NEW ARRIVALS</h1>
   <div class="row d-flex justify-content-center" style="column-gap: 10px;"  margin-bottom="0.5 rem">
    <div class="flavour-item">
     <img src="image/millecrepe.jpg">
     <div class="details">
      <div class="details-subsection">
      </div>
     </div>
    </div>

    <div class="flavour-item">
     <img src="image/rainbowmille.jpg">
     <div class="details">
      <div class="details-sub">
      </div>
     </div>
    </div>
    
    <div class="flavour-item">
     <img src="image/Redvelvet.jpg">
     <div class="details">
      <div class="details-sub">
      </div>
     </div>
    </div>

    <div class="flavour-item">
     <img src="image/tiramisu.jpg">
     <div class="details">
      <div class="details-sub">
      </div>
     </div>
    </div>

    <div class="flavour-item">
     <img src="image/Oreocake.jpg">
     <div class="details">
      <div class="details-sub">
      </div>
     </div>
    </div>

   </div>
 </div>
   <div>
        <div class="about">
       <h1>ABOUT US</h1>
       <p>Thursday to Tuesday - 9am to 10pm</p>
       <p>Saturday to sunday - 8am to 11pm</p>
       <div class="footer-row">
        <p>FairyBakery@gmail.com<i class="fa fa-paper-plane"></i></p>
           <p>+017-5339128<i class="fa fa-phone"></i></p>
           </p>
       </div>
       <div class="social-links">
            <i class="fa fa-paper-plane"></i>
            <i class="fa fa-phone"></i>
        </div>
        </div>
   </div>

   
 </div>
</body>
</body>
</html>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap');
*{
  padding: 0;
  margin: 0;
  box-sizing:border-box;
  font-family:'Poppins', sans-serif;
}
body{
/*  background-image: url(image/background2.jpeg);*/
  background: white;
  font-family: 'Poppins', sans-serif;
}

.heading{
  background-image: url(image/backgroundLilac.jpeg);
/*  background:pink;*/
  color: #000000;
  margin-bottom: 15px;
  padding: 200px 0;
  grid-column:1/-1;
  text-align: center;
  background-size: cover;
  background-position: center;
}
.heading>h1{
  font-weight: 350;
  font-size:32px;
  letter-spacing: 10px;
  margin-bottom:10px;
  text-transform: uppercase;
}
.header>h3{
  font-weight: 600;
  font-size: 40px  
  letter-spacing: 5px;
  text-transform: uppercase;
}
.home{
  display: inline-block;
  background-color: #CB5985;
  color: white;
  text-decoration: none;
  padding: 5px 30px;
  border: solid transparent;
  border-radius: 4px;
  transition: background-color 0.3 ease;
}
.button{
  display: inline-block;
  background-color: #D69DC3;
  color: transparent;
  text-decoration: none;
  padding: 5px 30px;
  border: solid transparent;
  border-radius: 4px;
  transition: background-color 0.3 ease;
}
.button2{
  display: inline-block;
  background-color: transparent;
  color: black;
  text-decoration: none;
  padding: 10px 20px;
  border: 1px solid black;
  border-radius: 4px;
  transition: background-color 0.3 ease;
  text-align:right ;
}
*{
margin: 0;
padding: 0;
text-decoration: none;
box-sizing: border-box;
}
.body{
  background : white;
}
.navbarr{
/*  position:fixed;*/
  background-color: transparent;
  width: 100%;
  padding: 20px 0;
  top: 0;
  z-index:100;
  line-height: 20px;
}
.inner-width{
  max-width:1300px;
  margin: auto;
  padding: 0 60px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.logo{
  font-size:40px;
  font-weight:100;
  font-family: 'Great Vibes', sans-serif;
  color: #222222;
  cursor: pointer;
}
.navbarr-menu a {
  font-size: 13px;
  font-weight: 500;
  font-family: 'Raleway', sans-serif;
  color: #222222;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-left: 10px;
  display: inline-block;
}
.navbarr-menu a::after{
  content: '';
  display: block;
  width: 0;
  height: 1.8px;
  background-color: #de6900;
  transition:width .3s;
}
.navbarr-menu a:hover::after{
  width:100%;
}
.title p{
  margin-bottom: 0;
  margin-top:33px;
  font-size:14px;
  font-family: 'Raleway', sans-serif;
  font-weight: 500;
  letter-spacing: 1px;
  line-height: 25px;
}
.content2 button{
  padding: 14px 27px;
  margin-top: 30px;
  background-color:#de6900;
  border:none;
  color:#fff;
  font-size:15px;
  font-weight:700;
  letter-spacing: 2px;
  font-family:'Raleway', sans-serif;
  cursor:pointer;
  text-transform: uppercase;
  transition:0.3s;
}

.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.flavour-item {
  flex-basis: 18%;
  margin-bottom: -30px;
}

.flavour-item img {
  width: 100%;
  height: auto;
  border-radius: 25px;
}

.nnn{
/*  background-image: url(image/Background.jpg);*/
  background:white;
  color: #000000;
  margin-bottom: 30px;
  padding: 30px 0;
  grid-column:1/-1;
  text-align: center;
}
.nnn>h1{
  font-weight: 400;
  font-size:32px;
  letter-spacing: 10px;
  margin-bottom:10px;
  text-transform: uppercase;
}
.nnn>h3{
  font-weight: 600;
  font-size:22px  letter-spacing: 5px;
  text-transform: uppercase;
}

.about{
  background-image: url(image/backgroundAwan.jpeg);
  color: #000000;
  margin-bottom: 0px;
  padding: 40px 0;
  grid-column:1/-1;
  text-align: center;
  background-size: cover;
  background-position: center;
}
.about>h1{
  font-weight: 350;
  font-size:32px;
  letter-spacing: 10px;
  text-transform: uppercase;
}
</style>