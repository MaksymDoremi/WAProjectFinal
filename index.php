<?php
session_start();
require "config.php";

//check if user is logged in, else throw him away
if(!empty($_SESSION["id"])){
	//logout condition
	if((time() - $_SESSION['last_login_timestamp']) > 600){ //60 * 10 = 600 seconds
		header('Location: logout.php');
	}else{
		$_SESSION['last_login_timestamp'] = time();
		$id = $_SESSION["id"];
		$user = $conn->prepare("select * from `User` where ID = :id");
		$user->execute([':id' => $id]);
	}
	
}
else{
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Own JS -->
	<script type="text/javascript" src="script.js"></script>
	<!-- Google Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Home</title>
	
</head>
<body style="min-width: 450px; " class="d-flex flex-column min-vh-100">
	<!-- NAVBAR -->
	<nav class="navbar bg-body-tertiary d-flex justify-content-center" style="background-color: rgb(192, 192, 192); height: 100px;">
		<div style="position: relative; top: -2px; z-index: 1;">
			<span class="navbar-brand mb-0 h1">
				<a href="main.php"><img src="ezgif.com-gif-maker (1).png" style="width: 190px;"></a>
			</span>
		</div>
	</nav>
	<div class="container flex-column" style="display: flex; align-items: center; padding-top: 40px; padding-bottom: 40px;">


		<h1>Welcome <?php echo $user->fetchColumn(1); ?> it's index</h1>

		<a href="logout.php">Logout</a>
	</div>
	<!-- FOOTER -->
	<div class="container mt-auto" style=" bottom: 0; ">
		<footer class="d-flex flex-wrap justify-content-center justify-content-md-between align-items-center py-3 my-4 border-top">
			<div class="col-md-4 d-flex align-items-center">
				<a href="main.php"><img src="ezgif.com-gif-maker (1).png" style="width: 190px;"></a>
				<span class="m-3 text-muted">© 2023 Crypto Heaven Inc</span>
				<span class="m-3 text-muted">© Maksym Kintor</span>
			</div>
			<ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
				<li class="ms-3"><a class="text-muted" href="https://github.com/MaksymDoremi/WAProjectFinal" target="_blank"><i class="fa-brands fa-github" style="scale: 1.8;"></i></a></li>
			</ul>
		</footer>
	</div>
	<!-- Bootstrap JS and Popper -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>