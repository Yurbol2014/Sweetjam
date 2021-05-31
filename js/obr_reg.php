<?php
header('Content-Type: text/html; charset=utf-8');
$mysqli = new mysqli("localhost","gsimplb8_edu1279","AERA*f2K","gsimplb8_edu1279");

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = mb_strtolower($_POST['email']);
$email = trim($email);
$pass = trim($_POST['pass']);
$pass = password_hash($pass, PASSWORD_DEFAULT);

$result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
if($result->num_rows){
	$user = $result->fetch_assoc();
	$userName = $user['name'];
	echo "exist";
}else{
   $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name','$lastname','$email','$pass')");
   echo "success";
}
?>