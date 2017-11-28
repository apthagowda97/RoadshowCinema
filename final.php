<?php
session_start();
include 'db_connection.php';

$conn = OpenCon();
$id =(int)$_GET["id"];
$no = (int)$_SESSION['noofseat'];
$username = $_SESSION['sess_user'];
$i =0 ;
$arr1 =array();
if(isset($_POST['submit'])){


foreach($_POST['checkboxname'] as  $value){
	$i++;
	$arr1[$i]=$value;
}
$_SESSION['prebook_id']=$arr1;
if($i!=$no){
	 header("Location: book.php?id=$id");
    
    exit();
}
else{
	 header("Location: finalplus.php?id=$id");
}
}



$conn->close();


?>
