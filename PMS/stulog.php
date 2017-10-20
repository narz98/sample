<?php

	$connect =mysqli_connect()("localhost","root","","login");
	if(!$connect){
	die("connection error".mysqli_connect_error());
	}else
	echo "$connection successful";

	$Username= $_POST['username'];
	$Password= $_POST['password'];

	echo $username;
?>
