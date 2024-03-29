<?php 
  echo "<script>window.location='login_form.php'</script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bakery Sweet&Co</title>
  <!--<style type="text/css">
        body
        {
            background-images: url(/image/Pictures.jpeg);
        }
    </style>-->
  <!--<meta charset="UTF-8">-->
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="indexStyle.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
</head>

<body>
  
 <!--  <nav class="navbarr">
    <div class="inner-width">
      <a class="logo" href='website.html'>Bakery Sweet&Co</a>
      <div class="navbarr-menu">
        <ul id='MenuItems'>
          <li><a href="home.php" class="button" >Home</a></li>
          <li><a href= "Menu.php" class="button">Menu </a></li>
          <li><a href= "Contact.php" class="button">Contact </a></li>
          <li><a href="SignUp.php" class="button" >Sign Up</a></li> 
        </ul>
      </div>
    </div>
  </nav> -->
    <nav class="navbarr">
    <div class="inner-width">
      <a class="logo">Bakery Sweet&Co</a>
      <div class="navbarr-menu">
        <ul id='MenuItems'>
          <!-- <a href="home.php" class="button" >Home</a> -->
          <!-- <a href= "Menu.php" class="button">Menu </a> -->
          <a href= "category.php" class="button">Cake </a>
          <a href="pastry.php" class="button" >Pastry</a>
          <!-- <a href="flavours.php" class="button" >Flavour</a> -->
          <a href="logout.php" class="button" >Log Out</a>
          <a href="addtocart.php" class="btn btn-outline-success">My Cart</i></a>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>

<style>
  *{
margin: 0;
padding: 0;
text-decoration: none;
box-sizing: border-box;
}
.navbarr{
/*  position:fixed;*/
  background-color: transparent;
  width: 100%;
  padding: 30px 0;
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
  margin-left: 35px;
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

</style>