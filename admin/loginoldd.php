<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:main.php");

	}else{
		header("location:index.php");
	}

?>
