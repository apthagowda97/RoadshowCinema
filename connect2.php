
<?php
session_start();
include 'db_connection.php';

$conn = OpenCon();




if(isset($_POST['submit'])){
$showtime = mysqli_real_escape_string($conn, $_POST['showtime']);
$classtype = mysqli_real_escape_string($conn, $_POST['classtype']);
$noofseat = mysqli_real_escape_string($conn, $_POST['noofseat']);

$noofseat = (int)$noofseat;
$id = (int)$_GET['id'];
$_SESSION['noofseat']=$noofseat;

$s = "Select PRICE from class_tab where CLASS_TYPE = '$classtype'";
$r = $conn->query($s);
$b = $r->fetch_assoc();
$_SESSION['price'] =  $b["PRICE"];

$search = "Select  PREBOOK_ID , SCREEN_NO , SEAT_NO , DONE from prebook_tab P , screen_tab S where S.SHOW_TIME = '$showtime' and S.MOVIE_ID = $id
and P.ALLOTMENT_ID = S.ALLOTMENT_ID
 and SEAT_NO in (Select SEAT_NO from theater_tab where PRICE = (Select PRICE from class_tab where CLASS_TYPE = '$classtype'))
   ";


//$result = mysqli_query($conn, $search);
 $result = $conn->query($search) or die($conn->error);
 $result1 = $conn->query($search) or die($conn->error);

}

$conn->close();


?>