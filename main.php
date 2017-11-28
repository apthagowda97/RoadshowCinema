<?php
include 'connect.php';

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
  <div class="container padding3">
    <div class="row">
      <h3 style="font-weight:900"> Now Showing  </h3>
      <form>
        <div class ="one-third column left ">
            <a href="book.php?id=1">
              <img src="<?php echo $mn1["IMAGE_PATH"] ?>" alt="">
              <h5 id="movie_name"><?php echo $mn1["MOVIE_NAME"] ?></h5>
            </a>
            
       </div>
       <div class ="one-third column ">
            <a href="book.php?id=2">
              <img src="<?php echo $mn2["IMAGE_PATH"] ?>" alt="">
              <h5 id="movie_name"><?php echo $mn2["MOVIE_NAME"] ?></h5>
            </a>
           
       </div>
       <div class ="one-third column ">
            <a href="book.php?id=3">
              <img src="<?php echo $mn3["IMAGE_PATH"] ?>" alt="">
              <h5 id="movie_name" ><?php echo $mn3["MOVIE_NAME"] ?></h5>
            </a>
            
       </div>
       <div class ="one-third column left padding4">
            <a href="book.php?id=4">
              <img src="<?php echo $mn4["IMAGE_PATH"] ?>" alt="">
              <h5 id="movie_name"><?php echo $mn4["MOVIE_NAME"] ?></h5>
            </a>
            
       </div>
       <div class ="one-third column padding4">
            <a href="book.php?id=5">
              <img src="<?php echo $mn5["IMAGE_PATH"] ?>" alt="">
              <h5 id="movie_name"><?php echo $mn5["MOVIE_NAME"] ?></h5>
            </a>
            
       </div>
       <div class ="one-third column padding4">
            <a href="book.php?id=6">
              <img src="<?php echo $mn6["IMAGE_PATH"] ?>" alt="">
              <h5 id="movie_name"><?php echo $mn6["MOVIE_NAME"] ?></h5>
            </a>
            
       </div>
        
        
      </form>
</div>
</div>
</body>