<?php
session_start();

include 'db_connection.php';



$conn = OpenCon();
if(isset($_POST['submit'])){
$uname = isset($_POST['username']) ? $_POST['username'] : '';
$fname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$mail = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['password']) ? $_POST['password'] : '';
$Cpass = isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : '';




if (empty($uname)) {
	echo "<script>alert ('username can no be blank')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
	exit();
	
}

if (empty($fname)) {
	echo "<script>alert ('firstname can no be blank')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
	exit();
}


if (empty($lname)) {
	echo "<script>alert ('lastname can no be blank')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
	exit();
}


if (empty($mail)) {
	echo "<script>alert ('email can no be blank')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
	exit();
}
	


if (empty($pass)) {
	echo "<script>alert ('password can no be blank')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
	exit();

}
if ((int)$pass !=  (int)$Cpass) {
	echo "<script>alert ('password are not matching')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
	exit();

}

$sql= "INSERT INTO user_tab VALUES 
       ('$uname','$mail','$fname','$lname','$pass')";
       

if ($conn->query($sql) === TRUE) {
 
   	 
    $_SESSION['sess_user']=$uname;
    header("Location: main.php");  
  
}
else{
	  echo "<script>alert (' USER NAME ALREDY EXIST ')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
	exit();
}

}


$conn->close();


?>
