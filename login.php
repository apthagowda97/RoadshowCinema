<?php  

include('logphp.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="description" content="Login to the RoadshowCinema account">
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
          <a href="login.php" id="logo">Roadshow<span>Cinema</span></a>
        </div>
        <div class="eleven columns padding-top"></div>
        <ul>
          <li><a href="signup.php">Sign Up</a></li>
        </ul>
      </div>
      </div>
  </header>

  <div class="container fifty-pad padding4">
    <div class="row">
      <h3 style="font-weight:900"> Login </h3>
    </div>
    <form method="POST" action="logphp.php" >
      <div class="column left" style="float:left;">
        <label for="UserName">User Name<span id="one">*</span>
          <input type="text" name="username" placeholder="&#xf2be; User Name" style="font-family:Arial, FontAwesome" class="u-full-width">
      </div>
      <div class="column left" >
        <label for="Password">Password<span id="one">*</span>
          <input type="password" name="password" placeholder="&#xf084; Password" style="font-family:Arial, FontAwesome" class="u-full-width">
      </div>

      <div class="column left">
        <button type="submit" value="submit" name="submit" id="sign_submit">Login</button>
      </div>
    </form>
  </div>
  <div class="container fifty-pad ">
    <div class="row">
      <a href="#reset_password link">Forgot Password?</a>
    </div>
  </div>
  
 
</body>
</html>
