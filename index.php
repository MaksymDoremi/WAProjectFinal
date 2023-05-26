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
	// Store the current URL in a session variable
	$_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];

	// Redirect the user to the login page
	header("Location: login.php");
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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Own JS -->
	<script type="text/javascript" src="script.js"></script>
	<!-- Google Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- charts -->
	<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script> 

	<title>Home</title>
	
</head>
<body style="min-width: 450px; " class="d-flex flex-column min-vh-100">
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-md bg-body-tertiar" style="margin:0px; padding:0px;">
		<div class="container-fluid" style="background-color: rgb(192, 192, 192);">
			<span class="navbar-brand mb-0 h1">
				<a href="main.php"><img src="ezgif.com-gif-maker (1).png" style="width: 190px;"></a>
			</span>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navigation">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item d-flex justify-content-center">
						<a class="nav-link active" aria-current="page" href="#" style="display: inline-block;">Dashboard</a>
					</li>
					<li class="nav-item d-flex justify-content-center">
						<a class="nav-link" href="dashboard/myAccount.php" style="display: inline-block;">My Account</a>
					</li>
					<li class="nav-item d-flex justify-content-center">
						<a class="nav-link" href="dashboard/contactUs.php" style="display: inline-block;">Contact Us</a>
					</li>
					<li class="nav-item d-flex justify-content-center">
						<a class="nav-link" href="logout.php" style="display: inline-block;"><b>LOG OUT</b></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<<<<<<< HEAD
	<!--
	<div class="container flex-column" style="display: flex; align-items: center;">
		<h1>Welcome <?php echo $user->fetchColumn(1); ?> it's index</h1>

		<a href="logout.php">Logout</a>
=======

	
	<div class="container mt-2">
		<div class="row g-2" id="currencyPlace">
			<!--  
			<div class="col-xl-4 col-md-6 col-sm-12" >
				<div class="card shadow bg-body" style="border-radius: 13px;">
					<div class="d-flex justify-content-between">
						<h5 class="card-title ps-3 pt-3">Ethereum</h5>
						<h7 class="card-title pe-3 pt-3 text-danger">-0.0123%</h7>
					</div>
					<div class="card-body">
						<div class="d-flex flex-row">
							<div class="box-icon mx-2">
								<img style="border:solid grey 1px; border-radius: 50%;" src="https://assets.coingecko.com/coins/images/279/small/ethereum.png?1595348880">
							</div>
							<div class="text-left">
								<div>
									<b>BTC</b>/USDT
								</div>
								<div >27387.23
									<span style="font-size: x-small; font-weight: 700; padding-left: 3px;">USDT</span>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div id="chartContainer" style="height: 100px; width:100%;"></div>
					</div>
				</div>
			</div>
		-->
		</div>
>>>>>>> slave
	</div>
-->

<div class="container mt-3">
	<div class="row">
		<div class="col-xl-4 col-md-6 col-sm-12 p-2">
			<div class="card shadow bg-body">
				<div class="card-body">
					hell nahh
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-6 col-sm-12 p-2">
			<div class="card shadow bg-body">
				<div class="card-body">
					hell nahh
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-6 col-sm-12 p-2">
			<div class="card shadow bg-body">
				<div class="card-body">
					hell nahh
				</div>
			</div>
		</div>
	</div>
<<<<<<< HEAD
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
=======
	<!-- Bootstrap JS and Popper -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="C:\Users\kinto\node_modules\chart.js\dist\chart.umd.js"></script>
	<script src="text/javascript"></script>
	
	<script type="text/javascript">
		/*
		window.onload = function () {

			var dps = [];
			var chart = new CanvasJS.Chart("chartContainer", {
				exportEnabled: true,
				title :{
					text: ""
				},
				data: [{
					type: "spline",
					markerSize: 0,
					dataPoints: dps 
				}]
			});

			var xVal = 0;
			var yVal = 100;
			var updateInterval = 100;
			var dataLength = 50; // number of dataPoints visible at any point

			var updateChart = function (count) {
				count = count || 1;
				// count is number of times loop runs to generate random dataPoints.
				for (var j = 0; j < count; j++) {	
					

					yVal = yVal + Math.round(5 + Math.random() *(-5-5));
					
					dps.push({
						x: xVal,
						y: yVal
					});
					xVal++;
				}
				if (dps.length > dataLength) {
					dps.shift();
				}	
				chart.render();
			};	

			updateChart(dataLength); 
			setInterval(function(){ updateChart() }, updateInterval); 

		}
		*/
	</script>


>>>>>>> slave
</body>
</html>