<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
$mysqli = new mysqli("localhost","gsimplb8_edu1279","AERA*f2K","gsimplb8_edu1279");

$email = mb_strtolower($_POST['email']);
$email = trim($email);
$pass = trim($_POST['pass']);

$result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
$row = $result->fetch_assoc();

if(password_verify($pass, $row['pass'])){
  $_SESSION['name'] = $row['name'];
  $_SESSION['lastname'] = $row['lastname'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['id'] = $row['id'];
	echo "success";
}else{
   echo "error";	
}
?>