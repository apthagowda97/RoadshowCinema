<?php

include 'detail.php';

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
      <h5 style="font-weight:900">MY BOOKING</h5>
    </div>
        <table style="width:100%">
  <tr>
    <th>BOOKING ID</th>
    <th>MOVIE NAME</th> 
    <th>NO OF SEAT</th>
    <th>CLASS</th>
    <th>SEAT NO</th> 
    <th>TOTAL PRICE</th>
  </tr>
  <?php

  
  $conn = OpenCon();
  
  
  for($i=1;$i<=$num;$i++){
     $cnt = 0;
     $ar = array();

    $clm1 = $res1->fetch_assoc();
    $sql2 = "SELECT MOVIE_NAME from movie_tab where MOVIE_ID = ".$clm1["MOVIE_ID"];
    $res2 = $conn->query($sql2);
    $clm2 = $res2->fetch_assoc();
    $sql4 = "SELECT PREBOOK_ID from seat_tab where BOOKING_ID = ".$clm1["BOOKING_ID"];
    $res4 = $conn->query($sql4);
    
  

    for($count=1; $row = $res4->fetch_assoc(); $count++) 
 {
      $sql41 = "SELECT SEAT_NO from prebook_tab where PREBOOK_ID =".$row["PREBOOK_ID"];
      $res41 = $conn->query($sql41);
      $clm41 = $res41->fetch_assoc();
      $ar[$count] =$clm41["SEAT_NO"];
      $cnt = $cnt + 1;
      $sql5 = "SELECT PRICE from theater_tab where SEAT_NO = ".$clm41["SEAT_NO"];
    }
    $res5 = $conn->query($sql5);
    $clm5 = $res5->fetch_assoc();

  echo "<tr>
    <td>".$clm1["BOOKING_ID"]."</td>
    <td>".$clm2["MOVIE_NAME"]."</td> 
    <td>".$clm1["NO_OF_SEATS"]."</td>
    <td>";
    if($clm5["PRICE"]==250){
      echo "NORMAL";
    }
    else{
      echo "GOLD";
    }
    echo "</td>
    <td>";
    for($count=1;$count<$cnt ; $count++){
      echo $ar[$count].",";
    }echo $ar[$count];
    echo "</td> 
    <td>Rs.";
    echo $clm5["PRICE"]*$cnt;
    echo "/-</td>
  </tr>";



}
$user = $_SESSION['sess_user'];
$s = "Select TOTAL_COST from trig where USER_NAME ='$user'";
$r = $conn->query($s) or die($conn->error);
$c = $r->fetch_assoc();
$pr = "call proc('$user')";
$pr1 = $conn->query($pr) or die($conn->error);
$pr2  = $pr1->fetch_assoc();
  echo "<tr>
  
  
  
  <td><B>COUNT = "; echo "<B>".$pr2["CT"];
  echo "</td>
  <td></td>
  <td></td>
  <td></td>
  <td><B>TOTAL_COST</td>
  
  <td><B>Rs.";
  echo "<B>".$c["TOTAL_COST"];
  echo "<B>/- </td>
  </tr>";




$conn->close();
  ?>
</table>

     </div>
</body>
</html>  