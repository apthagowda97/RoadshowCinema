<?php 
session_start();
include 'db_connection.php';

$conn = OpenCon();




$sql1 = 'Select MOVIE_NAME,IMAGE_PATH,DIRECTOR,STORY,DURATION,YOUTUBE_ID from movie_tab where MOVIE_ID =1';
$sql2 = 'Select MOVIE_NAME,IMAGE_PATH,DIRECTOR,STORY,DURATION,YOUTUBE_ID from movie_tab where MOVIE_ID =2';
$sql3 = 'Select MOVIE_NAME,IMAGE_PATH,DIRECTOR,STORY,DURATION,YOUTUBE_ID from movie_tab where MOVIE_ID =3';
$sql4 = 'Select MOVIE_NAME,IMAGE_PATH,DIRECTOR,STORY,DURATION,YOUTUBE_ID from movie_tab where MOVIE_ID =4';
$sql5 = 'Select MOVIE_NAME,IMAGE_PATH,DIRECTOR,STORY,DURATION,YOUTUBE_ID from movie_tab where MOVIE_ID =5';
$sql6 = 'Select MOVIE_NAME,IMAGE_PATH,DIRECTOR,STORY,DURATION,YOUTUBE_ID from movie_tab where MOVIE_ID =6';

$res1 = mysqli_query($conn,$sql1);
$res2 = $conn->query($sql2) or die($conn->error);
$res3 = $conn->query($sql3) or die($conn->error);
$res4 = $conn->query($sql4) or die($conn->error);
$res5 = $conn->query($sql5) or die($conn->error);
$res6 = $conn->query($sql6) or die($conn->error);

$mn1 = $res1->fetch_assoc();
$mn2 = $res2->fetch_assoc();
$mn3 = $res3->fetch_assoc();
$mn4 = $res4->fetch_assoc();
$mn5 = $res5->fetch_assoc();
$mn6 = $res6->fetch_assoc();


$sqlt1 = "Select distinct(SHOW_TIME) from screen_tab where MOVIE_ID = 1";
$sqlt2 = "Select distinct(SHOW_TIME) from screen_tab where MOVIE_ID = 2";
$sqlt3 = "Select distinct(SHOW_TIME) from screen_tab where MOVIE_ID = 3";
$sqlt4 = "Select distinct(SHOW_TIME) from screen_tab where MOVIE_ID = 4";
$sqlt5 = "Select distinct(SHOW_TIME) from screen_tab where MOVIE_ID = 5";
$sqlt6 = "Select distinct(SHOW_TIME) from screen_tab where MOVIE_ID = 6";



$rest1 = $conn->query($sqlt1)or die($conn->error);
$rest2 = $conn->query($sqlt2)or die($conn->error);
$rest3 = $conn->query($sqlt3)or die($conn->error);
$rest4 = $conn->query($sqlt4)or die($conn->error);
$rest5 = $conn->query($sqlt5)or die($conn->error);
$rest6 = $conn->query($sqlt6)or die($conn->error);

$st1 = $rest1->fetch_assoc();
$st11 = $rest1->fetch_assoc();
$st2 = $rest2->fetch_assoc();
$st22 = $rest2->fetch_assoc();
$st3 = $rest3->fetch_assoc();
$st33 = $rest3->fetch_assoc();
$st4 = $rest4->fetch_assoc();
$st5 = $rest5->fetch_assoc();
$st6 = $rest6->fetch_assoc();







$conn->close();


 ?>