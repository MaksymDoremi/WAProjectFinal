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
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<title>Registration</title>
</head>

<body style="min-width: 450px;">
	<!-- NAVBAR -->
	<!-- As a heading -->
	
	<nav class="navbar bg-body-tertiary d-flex justify-content-center" style="background-color: rgb(192, 192, 192); height: 100px;">
		<div style="position: relative; top: -2px; z-index: 1;">
			<span class="navbar-brand mb-0 h1">
				<a href="main.php"><img src="ezgif.com-gif-maker (1).png" style="width: 190px;"></a>
			</span>
		</div>
	</nav>




	<!-- REGISTER CARD -->
	<div class="container" style="display: flex; align-items: center; padding-top: 40px; padding-bottom: 40px;">
		<main class="form-signin w-100 m-auto" id="loginCard">
			<div class="card shadow p-4 bg-body" style="border-radius: 18px;">
				<div class="card-body">
					<form>
						<div class="d-flex justify-content-center">
							<h1 class="h3 mb-3 fw-normal"><b>Registration</b></h1>
						</div>
						<div class="form-floating">
							<input type="text" class="form-control" id="usernameInput" placeholder="Username" style=" margin-bottom: -1px;
							border-bottom-right-radius: 0;
							border-bottom-left-radius: 0;" required autocomplete="given-name">
							<label for="usernameInput">Username</label>
						</div>
						<div class="form-floating">
							<input type="email" class="form-control" id="emailInput" placeholder="Email" style="border-radius: 0; margin-bottom:-1px;" required autocomplete="email">
							<label for="usernameInput">Email</label>
						</div>
						<div class="form-floating">
							<input type="password" class="form-control" id="passwordInput" placeholder="Password" style="border-radius: 0; margin-bottom:-1px;" required autocomplete="new-password">
							<label for="passwordInput">Password</label>
							<i class="material-icons eye" id="passwordEye">visibility_off</i>
						</div>
						<div class="form-floating">
							<input type="password" class="form-control" id="confirmPasswordInput" placeholder="confirm Password" style="margin-bottom: 10px;
							border-top-left-radius: 0;
							border-top-right-radius: 0;" required required autocomplete="new-password">
							<label for="confirmPasswordInput">Confirm Password</label>
							<i class="material-icons eye" id="confirmPasswordEye">visibility_off</i>
						</div>
						<div class="d-flex justify-content-center">
							<button class="btn w-45 btn-dark myBtn mt-2" id="registerBtn" type="submit">REGISTER</button>
						</div>
						<div class="d-flex justify-content-center mt-3">
							Already Have an Account?
							<a href="login.php">&nbsp;Login</a>
						</div>
						<div class="d-flex justify-content-center">
							<p class="mt-3 mb-3 text-body-secondary">&copy;Maksym Kintor 2023</p>
						</div>
					</form>
				</div>
			</div>
		</main>

	</div>

	<!-- Bootstrap JS and Popper -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function() {

			$("#passwordEye").click(function() {
				if ($("#passwordEye").html() == "visibility_off") {
					$("#passwordEye").html("visibility");
					$("#passwordInput").attr('type', 'text');
				} else {
					$("#passwordEye").html("visibility_off");
					$("#passwordInput").attr('type', 'password');
				}

			});

			$("#confirmPasswordEye").click(function() {
				if ($("#confirmPasswordEye").html() == "visibility_off") {
					$("#confirmPasswordEye").html("visibility");
					$("#confirmPasswordInput").attr('type', 'text');
				} else {
					$("#confirmPasswordEye").html("visibility_off");
					$("#confirmPasswordInput").attr('type', 'password');
				}

			});


		});
	</script>
</body>

</html>