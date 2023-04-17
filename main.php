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
	<title>Main</title>
	
</head>
<body style="min-width: 450px;">
	<!-- NAVBAR -->
	<nav class="navbar bg-body-tertiary d-flex justify-content-center" style="background-color: rgb(192, 192, 192); height: 100px;">
		<div style="position: relative; top: -2px; z-index: 1;">
			<span class="navbar-brand mb-0 h1">
				<a href="main.php"><img src="ezgif.com-gif-maker (1).png" style="width: 190px;"></a>
			</span>
		</div>
	</nav>

	<!-- INTRO CARD -->
	<div class="container mt-3" id="introCard">
		<div class="card shadow">
			<div class="card-body p-4">
				<h1 class="card-title">We Are</h1>
				<h2 class="card-title">The Biggest Crypto Supplier and Analyzer</h1>
					<p class="card-text fs-4">We can provide you with the current information about crypto market.<br>For the affrodable price we can offer you hige stock of currencies and access to every private information.</p>
					<p class="card-text fs-4"> </p>
					<div class="d-flex justify-content-center ">
						
					</div>
					<div class="d-flex justify-content-center">
						<div class="card m-3 shadow hover-scale"  style="width: 200px;">
							<div class="card-body text-center m-3">
								<p class="card-text">If You don't have an account</p>
								<a href="registration.php"><button class="btn w-45 btn-dark myBtn mt-2" id="registerBtn" type="submit">REGISTER</button></a>
							</div>
						</div>
						<div class="card m-3 shadow"  style="max-width: 200px;">
							<div class="card-body text-center m-3">
								<p class="card-text">If You have an account</p>
								<a href="login.php"><button class="btn w-45 btn-dark myBtn mt-2" id="registerBtn" type="submit">LOGIN</button></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>




		<!-- Bootstrap JS and Popper -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('#introCard').hide().slideDown(800);
			})
		</script>
	</body>
	</html>