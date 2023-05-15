<?php
session_start();
require "../config.php";

// dd($_SERVER);
// function dd($message){
// 	echo "<pre>";
// 	var_dump($message);
// 	die();
// }

//check if user is logged in, else throw him away
if(!empty($_SESSION["id"])){
	//logout condition
	if((time() - $_SESSION['last_login_timestamp']) > 600){ //60 * 10 = 600 seconds
		//$_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
		header('Location: ../logout.php');
	}else{
		$_SESSION['last_login_timestamp'] = time();
		$id = $_SESSION["id"];
		$user = $conn->prepare("select * from `User` where ID = :id");
		$user->execute([':id' => $id]);

		$myUser = $user->fetchAll();
	}

}
else{
	// Store the current URL in a session variable
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
    
    // Redirect the user to the login page
    header("Location: ../login.php");
    exit;
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
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- Own JS -->
	<script type="text/javascript" src="../script.js"></script>
	<!-- Google Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>My Account</title>

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
						<a class="nav-link active" aria-current="page" href="#" style="display: inline-block;">My Account</a>
					</li>
					<li class="nav-item d-flex justify-content-center">
						<a class="nav-link" href="contactUs.php" style="display: inline-block;">Contact Us</a>
					</li>
					<li class="nav-item d-flex justify-content-center">
						<a class="nav-link" href="../logout.php" style="display: inline-block;"><b>LOG OUT</b></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- MAIN -->
	<div class="container mt-3" id="mainCard">
		<div class="card shadow">
			<div class="card-body p-4">
				<h2 class="card-title">Your Account</h2>
				<hr>
				<div class="container" style="width:300px;">
					<div class="row d-flex justify-content-between">
						<div class="col">Username: </div>
						<div class="col text-end"><b><?php echo $myUser[0]['Username'];?></b></div>
					</div>
					<br>
					<div class="row d-flex justify-content-between">
						<div class="col">Email: </div>
						<div class="col text-end"><b><?php echo $myUser[0]['Email'];?></b></div>
					</div>
					<br>
					<div class="d-flex justify-content-center">
						<!-- MODAL CHANGE PASSWORD -->
						<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Change password
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="min-width: 450px;">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title fs-5" id="exampleModalLabel">Change password</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<main class="form-signin w-100 m-auto" id="loginCard">
										<div class="card shadow p-4 bg-body" style="border-radius: 18px;">
											<div class="card-body">
												<div class="modal-body">
													<form action="changePassword.php" method="post" id="changePasswordForm">
														<div class="form-floating">
															<input type="password" class="form-control" name="oldPasswordInput" id="oldPasswordInput" placeholder="Old Password" style=" margin-bottom: -1px;
															border-bottom-right-radius: 0;
															border-bottom-left-radius: 0;" required autocomplete="new-password">
															<label for="oldPasswordInput">Old Password</label>
															<i class="material-icons eye" id="oldPasswordEye">visibility_off</i>
														</div>
														<div class="form-floating">
															<input type="password" class="form-control" name="newPasswordInput" id="newPasswordInput" placeholder="New Password" style="border-radius: 0; margin-bottom:-1px;" required autocomplete="new-password">
															<label for="newPasswordInput">New Password</label>
															<i class="material-icons eye" id="newPasswordEye">visibility_off</i>
														</div>
														<div class="form-floating">
															<input type="password" class="form-control" name="confirmNewPasswordInput" id="confirmNewPasswordInput" placeholder="Confirm New Password" style="margin-bottom: 10px;
															border-top-left-radius: 0;
															border-top-right-radius: 0;" required required autocomplete="new-password">
															<label for="confirmNewPasswordInput">Confirm New Password</label>
															<i class="material-icons eye" id="confirmNewPasswordEye">visibility_off</i>
														</div>
													</form>
												</div>
												<div class="modal-footer d-flex justify-content-center">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="closeModalBtn">Close</button>
													<button type="submit" class="btn btn-primary" name="submit" form="changePasswordForm">Confirm</button>
												</div>
											</div>
										</div>
									</main>
								</div>
							</div>
						</div>
					</div>
				</div>
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
	<script type="text/javascript">
		$(document).ready(function() {
			$('#closeModalBtn').click(function(){
				$('#changePasswordForm')[0].reset();
			});

			$("#mainCard").hide().slideDown(400);
		});

	</script>
	<!-- Bootstrap JS and Popper -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>