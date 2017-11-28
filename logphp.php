<?php  
session_start();
include 'db_connection.php';

$conn = OpenCon();

if(isset($_POST["submit"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $uname=$_POST['username'];  
    $pass=$_POST['password'];  
  
    
  
    $query1="SELECT * FROM user_tab WHERE USER_NAME='$uname' AND PASSWORD='$pass'"; 
    $result = $conn->query($query1) or die($conn->error); 
    $result1 = $conn->query($query1) or die($conn->error); 
    $num = $result->fetch_row();
    if($num!=0)
    {
    while($row=$result1->fetch_assoc())  
    {  
    $dbusername=$row['USER_NAME'];  
    $dbpassword=$row['PASSWORD'];  
    }  
  
    if($uname== $dbusername && $pass == $dbpassword)  
    {  
      
    $_SESSION['sess_user']=$uname;  
  
    /* Redirect browser */  
    header("Location: main.php");  
    } 

     
    }
    else {  
    echo "<script>alert ('INVALID USER NAME OR PASSWORD')</script>";
    echo "<script>window.open('login.php','_self')</script>";
    exit();
    }
    } 
else {  
    echo "<script>alert ('ALL FIELDS ARE REQUIRED')</script>";
    echo "<script>window.open('login.php','_self')</script>";
    exit();
     }  
} 

$conn->close();

?> 