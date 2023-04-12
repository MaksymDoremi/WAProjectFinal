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
	<script type="text/javascript" src="script.js"></script>
	<title>Log into system</title>
	
</head>
<body>
	<!-- header -->
	<!-- that show some basic info and so on -->


	<!-- GRID VERSION -->
	<!-- <main class="form-signin w-100 m-auto" id="loginCard">
		<div class="card shadow p-4 bg-body" style="border-radius: 18px;">
			<div class="card-body">
				<form>
					<div class="row">
						<div class="col d-flex justify-content-center">
							<h1 class="h3 mb-3 fw-normal"><b>Login</b></h1>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-floating">
								<input type="text" class="form-control" id="usernameInput" placeholder="Username">
								<label for="usernameInput">Username</label>
							</div>						
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-floating">
								<input type="password" class="form-control" id="passwordInput" placeholder="Password">
								<label for="passwordInput">Password</label>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col d-flex justify-content-center">
							<button class="w-45 btn btn-lg btn-dark" type="submit">LOGIN</button>
						</div>
					</div>
					<div class="row">
						<div class="col d-flex justify-content-center">
							<p class="mt-5 mb-3 text-body-secondary">&copy;Maksym Kintor 2023</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main> -->

	<!-- BASIC VERSION -->
	<main class="form-signin w-100 m-auto" id="loginCard">
		<div class="card shadow p-4 bg-body" style="border-radius: 18px;">
			<div class="card-body">
				<form>
					<div class="d-flex justify-content-center">
						<h1 class="h3 mb-3 fw-normal"><b>Login</b></h1>
					</div>
					<div class="form-floating">
						<input type="text" class="form-control" id="usernameInput" placeholder="Username">
						<label for="usernameInput">Username</label>
					</div>
					<div class="form-floating">
						<input type="password" class="form-control" id="passwordInput" placeholder="Password">
						<label for="passwordInput">Password</label>
					</div>		
					<div class="d-flex justify-content-center">	
						<button class="btn w-45 btn-dark myBtn mt-2" id="loginBtn" type="submit">LOGIN</button>
					</div>
					<div class="d-flex justify-content-center">	
						<p class="mt-5 mb-3 text-body-secondary">&copy;Maksym Kintor 2023</p>
					</div>				
				</form>
			</div>
		</div>
	</main> 
	
	<!-- Bootstrap JS and Popper -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


</body>
</html>