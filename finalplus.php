<?php
include 'last.php';
 $id =$_GET["id"];
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Book</title>
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
  <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="image/CINEMA.png">

</head>
<body background="image/bac5.jpg"> 
    <header>
    <div class="container">
      <div class="row">
        <div class="one column">
          <a href="main.php" id="logo">Roadshow<span>Cinema</span></a>
        </div>
        <div class="eleven columns padding-top"></div>
        <ul>
          <li><a href="mybooking.php" >MyBooking</a></li>
          <li><a href="contactus.php" >ContactUs</a></li>
          <li><a href="logout.php" >Logout</a></li>
        </ul>
      </div>
    </div>
  </header>
<div class="container fifty-pad padding3">
    <div class="row">
      <h3 style="font-weight:900"> PAYMENT </h3>
    </div>
    <form method="POST" action="last.php?id=<?php echo $id ?>">
      <div class="one-half column left padding8" style="float:left;" >
        <label for="payment">Payment ID<span id="one">*</span>
          <input type="text" name="payment_id" placeholder="&#xf2be; Number" style="font-family:Arial, FontAwesome" class="u-full-width" title="payment" autocomplete="off">
      </div>
      <div class="one-half column  padding7">
            <button type="submit" value="submit" id="submit" name="submit">DONE</button>
         </div>
       </form>
  </div>
</body>
</html>  