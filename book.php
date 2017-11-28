
<?php
include 'connect.php';
$id =$_GET["id"];
if (isset($_GET["id"])) {
    if ($_GET["id"] == "1") {
        $name =  $mn1["MOVIE_NAME"] ;
        $dir = $mn1["DIRECTOR"];
        $img = $mn1["IMAGE_PATH"];
        $story = $mn1["STORY"];
        $time =  $mn1["DURATION"];
        $t1=$st1["SHOW_TIME"];
        $t2=$st11["SHOW_TIME"];
        $t3 = "";
        $vid = $mn1["YOUTUBE_ID"];
       } 
      elseif($_GET["id"]=="2"){
        $name =  $mn2["MOVIE_NAME"] ;
        $dir = $mn2["DIRECTOR"];
        $img = $mn2["IMAGE_PATH"];
        $story = $mn2["STORY"];
        $time =  $mn2["DURATION"];
        $t1=$st2["SHOW_TIME"];
        $t2=$st22["SHOW_TIME"];
        $t3 = "";
        $vid = $mn2["YOUTUBE_ID"];

      }
      elseif($_GET["id"]=="3"){
        $name =  $mn3["MOVIE_NAME"] ;
        $dir = $mn3["DIRECTOR"];
        $img = $mn3["IMAGE_PATH"];
        $story = $mn3["STORY"];
        $time =  $mn3["DURATION"];
        $t1=$st3["SHOW_TIME"];
        $t2=$st33["SHOW_TIME"];
        $t3 = "";
        $vid = $mn3["YOUTUBE_ID"];

      }
      elseif($_GET["id"]=="4"){
        $name =  $mn4["MOVIE_NAME"] ;
        $dir = $mn4["DIRECTOR"];
        $img = $mn4["IMAGE_PATH"];
        $story = $mn4["STORY"];
        $time =  $mn4["DURATION"];
        $t1=$st4["SHOW_TIME"];
        $t2 = "";
        $t3 = "";
        $vid = $mn4["YOUTUBE_ID"];

      }
      elseif($_GET["id"]=="5"){
        $name =  $mn5["MOVIE_NAME"] ;
        $dir = $mn5["DIRECTOR"];
        $img = $mn5["IMAGE_PATH"];
        $story = $mn5["STORY"];
        $time =  $mn5["DURATION"];
        $t1=$st5["SHOW_TIME"];
        $t2 = "";
        $t3 = "";
        $vid = $mn5["YOUTUBE_ID"];

      }
      elseif($_GET["id"]=="6"){
        $name =  $mn6["MOVIE_NAME"] ;
        $dir = $mn6["DIRECTOR"];
        $img = $mn6["IMAGE_PATH"];
        $story = $mn6["STORY"];
        $time =  $mn6["DURATION"];
        $t1=$st6["SHOW_TIME"];
        $t2 = "";
        $t3 = "";
        $vid = $mn6["YOUTUBE_ID"];

      }
     
}
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
  <link rel="stylesheet" href="css/movie.css">
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
  <div class="container padding4 ">
    <div class="row">
      <h3 style="font-weight:900"> Book Ticket </h3>
        <div class="one-half column left ">
            <iframe width=85% height="190"
                   src="https://www.youtube.com/embed/<?php echo $vid ?>?controls=0">
            </iframe>
        </div>
        <div class="one-half column  ">
          <div class="details">
          <h6><span>NAME:</span><?php echo $name ?></h6>
          <h6><span>DIRECTOR:</span><?php echo $dir ?></h6>
          <p><h6><span>STORY:</span></h6><?php echo $story ?>
          </p>
          <h6><span>DURATION:</span> <?php echo $time ?> hrs</h6>
          </div>
        </div>
        <form method="POST" action="confirm.php?id=<?php echo $id ?>">
        <div class="one-half column left padding4 ">
        <div class="one-third column left ">
            <label for="showtime">Show Time<span id="one">*</span> :
          <input type="text" name="showtime" list="time" autocomplete="off" placeholder="&#xf017; Time" style="font-family:Arial, FontAwesome" class="u-full-width">
              <datalist id="time">

                <option value="<?php echo $t1 ?>">
                <option value="<?php echo $t2 ?>">
                <option value="<?php echo $t3 ?>">

              </datalist>
           </label>
        </div>
          <div class="one-third column ">
            <label for="seatclass">Class<span id="one">*</span> :
          <input type="text" name="classtype" list="class" autocomplete="off" placeholder="&#xf00b;Type" style="font-family:Arial, FontAwesome" class="u-full-width">
          <datalist id="class">
                <option value="GOLD">
                <option value="NORMAL">
          </datalist>
            </label>
         </div>
           <div class="one-third column  ">
            <label for="no_of_seat">No Of Seat<span id="one">*</span> :
          <input type="text" name="noofseat" list="seats" autocomplete="off" placeholder="&#xf0c0; Number" style="font-family:Arial, FontAwesome" class="u-full-width">
          <datalist id="seats">
                <option value="1">
                <option value="2">
                <option value="3">
                <option value="4">
                <option value="5">
            </datalist>
           </label>
          </div>

        </div>
        <div class="one-half column padding2 ">
            <button type="submit" value="submit" id="submit" name="submit">BOOK</button>
         </div>
        
       
      
      </form>
    </div>
  </div>
</body>