<?php
session_start();
$user = $_POST["username"];
$pass = $_POST["Password"];
//==============================
$dbuser = "evik";
$dbpass = "12345";
//==============================
if($user == $dbuser && $dbpass == $dbpass){
	echo "<script>alert('Sucess');window.location = ('dashboard.php')</script>";
} else {
	$_SESSION["user"]=$user;
    if(isset($_SESSION["salah"])){
        $_SESSION["salah"]++;
    } else{
        $_SESSION["salah"] = 1;
    }
    echo "<script>alert('Wrong password or username'); window.location = ('index.php')</script>";
}
