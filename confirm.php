<?php

include 'connect2.php';
$id =$_GET["id"];
$arr = array();
$preid = array();
for($y = 1;$y<=40;$y++){
  $arr[$y]="disabled";
  $preid[$y] = 0;
}


$bow = $result->fetch_assoc();


if($bow["SEAT_NO"]==1){
for ($x = 1; $x <= 30; $x++) {
    $row = $result1->fetch_assoc();
    $preid[$x] = $row["PREBOOK_ID"];
    if(($row["DONE"]) == 0){
      $arr[$x] = "";
    }
    else{
      
      $arr[$x] = "disabled";
    }
} 
}
elseif ($bow["SEAT_NO"]==31) {
  for ($x = 31; $x <= 40; $x++) {
    $row = $result1->fetch_assoc();
    $preid[$x] = $row["PREBOOK_ID"];
    if($row["DONE"] == 0){
      $arr[$x] = "";
    }
    else{
      
      $arr[$x] = "disabled";
    }
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
  <link rel="stylesheet" href="css/confirm.css">
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
<div class="container  padding3  ">

 <div class="row ">
  <h3 style="font-weight:900"> Allotment  </h3>
  <form method="post" action="final.php?id=<?php echo $id ?>">
   <div class=" column padding5 ">
    <li class="row row--1">
      <h6>NORMAL:</h6>
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" <?php echo $arr[1] ?> value="<?php echo $preid[1] ?>" name="checkboxname[]" id="1A" />
          <label for="1A">1</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[2] ?> value="<?php echo $preid[2] ?>" name="checkboxname[]" id="2A" />
          <label for="2A">2</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[3] ?> value="<?php echo $preid[3] ?>" name="checkboxname[]" id="3A" />
          <label for="3A">3</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[4] ?> value="<?php echo $preid[4] ?>" name="checkboxname[]" id="4A" />
          <label for="4A">4</label>
        </li>
        <li class="seat padding6">
          <input type="checkbox" <?php echo $arr[5] ?> value="<?php echo $preid[5] ?>" name="checkboxname[]" id="5A" />
          <label for="5A">5</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[6] ?> value="<?php echo $preid[6] ?>" name="checkboxname[]" id="6A" />
          <label for="6A">6</label>
        </li>
         <li class="seat">
          <input type="checkbox" <?php echo $arr[7] ?> value="<?php echo $preid[7] ?>" name="checkboxname[]" id="7A" />
          <label for="7A">7</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[8] ?> value="<?php echo $preid[8] ?>" name="checkboxname[]" id="8A" />
          <label for="8A">8</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[9] ?> value="<?php echo $preid[9] ?>" name="checkboxname[]" id="9A" />
          <label for="9A">9</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[10] ?> value="<?php echo $preid[10] ?>" name="checkboxname[]" id="10A" />
          <label for="10A">10</label>
        </li>
      </ol>

    </li>

    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" <?php echo $arr[11] ?> value="<?php echo $preid[11] ?>" name="checkboxname[]" id="11B" />
          <label for="11B">11</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[12] ?> value="<?php echo $preid[12] ?>" name="checkboxname[]" id="12B" />
          <label for="12B">12</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[13] ?> value="<?php echo $preid[13] ?>"  name="checkboxname[]" id="13B" />
          <label for="13B">13</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[14] ?> value="<?php echo $preid[14] ?>" name="checkboxname[]"  id="14B" />
          <label for="14B">14</label>
        </li>
        <li class="seat padding6">
          <input type="checkbox" <?php echo $arr[15] ?> value="<?php echo $preid[15] ?>" name="checkboxname[]" id="15B" />
          <label for="15B">15</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[16] ?> value="<?php echo $preid[16] ?>" name="checkboxname[]" id="16B" />
          <label for="16B">16</label>
        </li>
         <li class="seat">
          <input type="checkbox" <?php echo $arr[17] ?> value="<?php echo $preid[17] ?>" name="checkboxname[]" id="17B" />
          <label for="17B">17</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[18] ?> value="<?php echo $preid[18] ?>" name="checkboxname[]" id="18B" />
          <label for="18B">18</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[19] ?> value="<?php echo $preid[19] ?>" name="checkboxname[]" id="19B" />
          <label for="19B">19</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[20] ?> value="<?php echo $preid[20] ?>" name="checkboxname[]" id="20B" />
          <label for="20B">20</label>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" <?php echo $arr[21] ?> value="<?php echo $preid[21] ?>" name="checkboxname[]" id="21C" />
          <label for="21C">21</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[22] ?> value="<?php echo $preid[22] ?>" name="checkboxname[]" id="22C" />
          <label for="22C">22</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[23] ?> value="<?php echo $preid[23] ?>" name="checkboxname[]" id="23C" />
          <label for="23C">23</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[24] ?> value="<?php echo $preid[24] ?>" name="checkboxname[]" id="24C" />
          <label for="24C">24</label>
        </li>
        <li class="seat padding6">
          <input type="checkbox" <?php echo $arr[25] ?> value="<?php echo $preid[25] ?>" name="checkboxname[]" id="25C" />
          <label for="25C">25</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[26] ?> value="<?php echo $preid[26] ?>" name="checkboxname[]" id="26C" />
          <label for="26C">26</label>
        </li>
         <li class="seat">
          <input type="checkbox" <?php echo $arr[27] ?> value="<?php echo $preid[27] ?>" name="checkboxname[]" id="27C" />
          <label for="27C">27</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[28] ?> value="<?php echo $preid[28] ?>" name="checkboxname[]" id="28C" />
          <label for="28C">28</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[29] ?> value="<?php echo $preid[29] ?>" name="checkboxname[]" id="29C" />
          <label for="29C">29</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[30] ?> value="<?php echo $preid[30] ?>" name="checkboxname[]" id="30C" />
          <label for="30C">30</label>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <h6>GOLD:</h6>
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" <?php echo $arr[31] ?> value="<?php echo $preid[31] ?>" name="checkboxname[]" id="31D" />
          <label for="31D">31</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[32] ?> value="<?php echo $preid[32] ?>" name="checkboxname[]" id="32D" />
          <label for="32D">32</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[33] ?> value="<?php echo $preid[33] ?>" name="checkboxname[]" id="33D" />
          <label for="33D">33</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[34] ?> value="<?php echo $preid[34] ?>" name="checkboxname[]" id="34D" />
          <label for="34D">34</label>
        </li>
        <li class="seat padding6">
          <input type="checkbox" <?php echo $arr[35] ?> value="<?php echo $preid[35] ?>" name="checkboxname[]" id="35D" />
          <label for="35D">35</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[36] ?>  value="<?php echo $preid[36] ?>" name="checkboxname[]" id="36D" />
          <label for="36D">36</label>
        </li>
         <li class="seat">
          <input type="checkbox" <?php echo $arr[37] ?> value="<?php echo $preid[37] ?>" name="checkboxname[]" id="37D" />
          <label for="37D">37</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[38] ?> value="<?php echo $preid[38] ?>"  name="checkboxname[]" id="38D" />
          <label for="38D">38</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[39] ?> value="<?php echo $preid[39] ?>"  name="checkboxname[]" id="39D" />
          <label for="39D">39</label>
        </li>
        <li class="seat">
          <input type="checkbox" <?php echo $arr[40] ?> value="<?php echo $preid[40] ?>" name="checkboxname[]" id="40D" />
          <label for="40D">40</label>
        </li>
      </ol>
    </li>
  </div>
  <divh class=" column padding3 left">
  <button type="submit" value="submit" id="submit" name="submit">PAYMENT</button>
  </div>
</form>
  </div>
  </div>
</body>
  