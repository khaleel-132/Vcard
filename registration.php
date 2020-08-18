<?php
session_start();
header('location:index.php');
$con = mysqli_connect('	sql113.epizy.com','	epiz_26494096',' 	
SJsnXWcPCF5Q');
mysqli_select_db($con,'epiz_26494096_vcard');

$name = $_POST['username'];
$password = $_POST['password'];

$s = "select * from registration where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if ($num ==1 ){
    echo 'username already taken';
}else{
    $reg = "insert into registration(name, password) values('$name','$password')";
    mysqli_query($con,$reg);
    echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
}

?>
