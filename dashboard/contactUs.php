<?php
session_start();

//check if user is logged in, else throw him away
if(!empty($_SESSION["id"])){
	//logout condition
	if((time() - $_SESSION['last_login_timestamp']) > 600){ //60 * 10 = 600 seconds
		header('Location: logout.php');
	}else{
		$_SESSION['last_login_timestamp'] = time();
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
	<title>Contact Us</title>
	
</head>
<body style="min-width: 450px; " class="d-flex flex-column min-vh-100">
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-md bg-body-tertiar" style="margin:0px; padding:0px;">
		<div class="container-fluid" style="background-color: rgb(192, 192, 192);">
			<span class="navbar-brand mb-0 h1">
				<a href="..\main.php"><img src="..\ezgif.com-gif-maker (1).png" style="width: 190px;"></a>
			</span>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navigation">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item d-flex justify-content-center">
						<a class="nav-link" href="..\index.php" style="display: inline-block;">Dashboard</a>
					</li>
					<li class="nav-item d-flex justify-content-center">
						<a class="nav-link" href="myAccount.php" style="display: inline-block;">My Account</a>
					</li>
					<li class="nav-item d-flex justify-content-center">
						<a class="nav-link active" aria-current="page" href="#" style="display: inline-block;">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container mt-3" id="">
		<div class="card shadow">
			<div class="card-body p-4">
				<h3 class="card-title">In case of issues - fill the form below</h3>
				<form method="post" action="sendEmail.php">
					<div class="mb-3">
						<label for="userIssueEmailInput" class="form-label">Your email address</label>
						<input type="email" class="form-control" id="userIssueEmailInput" name="userIssueEmailInput" placeholder="name@example.com">
					</div>
					<div class="mb-3">
						<label for="userIssueMessageInput" class="form-label">Your issue</label>
						<textarea class="form-control" id="userIssueMessageInput" name="userIssueMessageInput" rows="3"></textarea>
					</div>
					<div class="d-flex justify-content-center">
						<button class="btn w-45 btn-secondary myBtn mt-2" id="sendMessageBtn" name="submit" type="submit">SEND</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- FOOTER -->
	<div class="container mt-auto" style=" bottom: 0; ">
		<footer class="d-flex flex-wrap justify-content-center justify-content-md-between align-items-center py-3 my-4 border-top">
			<div class="col-md-4 d-flex align-items-center">
				<a href="main.php"><img src="../ezgif.com-gif-maker (1).png" style="width: 190px;"></a>
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