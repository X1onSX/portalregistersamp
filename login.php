<?php
session_start();
include "config/config.php";

$user = $_POST['username'];
$pass2 = $_POST['password'];
$ucp = mysqli_query($con,"select * from playerucp where ucp='$user'");
$rku = mysqli_fetch_array($ucp);

$hash1 = hash("sha256", $pass2 . $rku['salt']);

$login = mysqli_query($con,"select * from playerucp where ucp='$user' and password='$hash1'");
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

if ($ketemu > 0) {


	$_SESSION['ucp'] = $r['ucp'];
	$_SESSION['password'] = $r['password'];
	$_SESSION['email'] = $r['email'];


	header("location: index.php?page=main");
} else {
	header("location: index.php?page=login");
}
?>