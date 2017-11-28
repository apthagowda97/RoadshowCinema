<?php 


include('signphp.php'); 



?>
<!doctype html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>SignUp</title>
  <meta name="description" content="Sign up for the RoadshowCinema">
  <meta name="author" content="aptha_gowda">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <link rel="icon" type="image/png" href="image/CINEMA.png">

</head>
<body background="image/bac5.jpg">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header>
    <div class="container">
      <div class="row">
        <div class="one column">
          <a href="signup.php" id="logo">Roadshow<span>Cinema</span></a>
        </div>
        <div class="eleven columns padding-top"></div>
        <ul>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>
      </div>
  </header>

  <!-- SignUp
  _____________________________________________________ -->
   <div class="container fifty-pad padding3">
    <div class="row">
      <h3 style="font-weight:900"> Sign Up </h3>
    </div>
    <form method="POST" action="signphp.php">
      <div class="column left" style="float:left;" >
        <label for="UserName">User Name<span id="one">*</span>
          <input type="text" name="username" placeholder="&#xf2be; User Name" style="font-family:Arial, FontAwesome" class="u-full-width" title="UserName" autocomplete="off">
      </div>
      <div class="one-half column left" >
        <label for="FirstName">First Name<span id="one">*</span>
          <input type="text" name="firstname" placeholder="&#xf007; first name" style="font-family:Arial, FontAwesome" class="u-full-width" title="FirstName" autocomplete="off">
      </div>
      <div class="one-half column " >
        <label for="LastName">Last Name<span id="one">*</span>
          <input type="text" name="lastname" placeholder="&#xf007; last name" style="font-family:Arial, FontAwesome" class="u-full-width" title="LastName" autocomplete="off" >
      </div>
      <div class="column left" >
        <label for="E-mail">E-mail<span id="one">*</span>
          <input type="email" name="email" placeholder="&#xf0e0; E-mail" style="font-family:Arial, FontAwesome" class="u-full-width" title="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" autocomplete="off">
      </div>
      <div class="column left" >
        <label for="Password">Password<span id="one">*</span>
          <input type="password" name="password" placeholder="&#xf084; Password" style="font-family:Arial, FontAwesome" class="u-full-width" title="Password" pattern=".{6,}" autocomplete="off">
      </div>

      <div class="column left" >
        <label for="CPassword">Confirm Password<span id="one">*</span>
          <input type="password" name="confirmpassword" placeholder="&#xf084; Password" style="font-family:Arial, FontAwesome" class="u-full-width" title="CPassword" pattern=".{6,}" autocomplete="off">
      </div>
      
     
      <div class="column left">
        <button type="submit" name="submit" id="sign_submit">Sign Up</button>
      </div>
    </form>
 
  </div>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

