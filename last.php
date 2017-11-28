<?php

session_start();
include 'db_connection.php';

$conn = OpenCon();
$id =(int)$_GET["id"];
$no = (int)$_SESSION['noofseat'];
$username = $_SESSION['sess_user'];
$cost = $_SESSION['price'];
$mul = $no*$cost;
if(isset($_POST['submit'])){
$pay = $_POST['payment_id'];
$pay = (int)$pay;

$sql = "INSERT INTO booking_tab VALUES (NULL,'$username',$no,$id,$pay,$mul)";
	
			if ($conn->query($sql) === TRUE) {
             $sql1 = "SELECT BOOKING_ID from booking_tab where PAYMENT_ID = $pay";
              $res = $conn->query($sql1) or die($conn->error);
              $bid = $res->fetch_assoc();
              $bid1 = $bid["BOOKING_ID"];
              
			 foreach($_SESSION['prebook_id'] as $val){
			 $sql2 = "UPDATE prebook_tab SET DONE = 1 WHERE PREBOOK_ID = $val"; 
			 $conn->query($sql2) or die($conn->error);
			 $sql3 = "INSERT INTO seat_tab VALUES ($bid1,$val)";
			 if($conn->query($sql3)=== TRUE){
			 
			 	header("Location: mybooking.php");
			 	
			 }

			    }
			  
			}

}
$conn->close();
?>
