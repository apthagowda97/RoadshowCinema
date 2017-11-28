<?php

session_start();
include 'db_connection.php';

$conn = OpenCon();
$username = $_SESSION['sess_user'];
$sql1 = "Select BOOKING_ID,USER_NAME,NO_OF_SEATS,MOVIE_ID from booking_tab where USER_NAME='$username'";
$res = $conn->query($sql1) or die($conn->error);
$num = $res->num_rows;
$res1 = $conn->query($sql1);
$res9 = $conn->query($sql1);




$conn->close();
?>
