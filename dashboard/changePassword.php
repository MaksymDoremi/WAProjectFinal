<?php
require '../config.php';
session_start();
if(isset($_POST['submit'])){
	$oldPassword = $_POST['oldPasswordInput'];
	$newPasswordInput = $_POST['newPasswordInput'];
	$confirmNewPasswordInput = $_POST['confirmNewPasswordInput'];


	$oldPasswordQuery = $conn->prepare("select * from `User` where Password = :oldPassword and ID = :id");
	$oldPasswordQuery->execute([':oldPassword' => GenerateHashPassword($oldPassword), ':id'=>$_SESSION["id"]]);

	if($oldPasswordQuery->rowCount() == 0){
		echo "<script> alert('Old Password Is Incorrect');</script>";
		echo "<script>setTimeout(function(){ window.location.href = 'myAccount.php'; }, 0);</script>";
		exit();
	}

	if($newPasswordInput != $confirmNewPasswordInput){
		echo "<script> alert('Incorrect confirmed password');</script>";
		echo "<script>setTimeout(function(){ window.location.href = 'myAccount.php'; }, 0);</script>";
		exit();
	}

	$changePasswordQuery = $conn->prepare("update `User` set Password = :newPassword where ID = :id");
	$changePasswordQuery->execute([':newPassword'=>GenerateHashPassword($newPasswordInput), ':id'=>$_SESSION["id"]]);
	echo "<script> alert('Password Changed Successfully');</script>";
	echo "<script>setTimeout(function(){ window.location.href = 'myAccount.php'; }, 0);</script>";
	exit();
}

?>