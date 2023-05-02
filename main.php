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
    <title>Main</title>
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
    <!-- INTRO CARD -->
    <div class="container mt-3" id="introCard">
        <div class="card shadow">
            <div class="card-body p-4">
                <h1 class="card-title">We Are</h1>
                <h2 class="card-title">The Biggest Crypto Supplier and Analyzer</h2>
                <p class="card-text fs-4">We can provide you with the current information about crypto market.<br>For the affrodable price we can offer you huge stock of currencies and access to every private information.</p>
                <p class="card-text fs-4"> </p>
                <div class="d-flex justify-content-center ">
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="d-flex justify-content-center col-lg-4 col-12">
                            <div class="myCard card m-3 shadow" style="width: 200px;">
                                <div class="card-body text-center m-3">
                                    <p class="card-text">New here? &#128533;</p>
                                    <a href="registration.php"><button class="btn w-45 btn-dark myBtn mt-2" id="registerBtn" type="submit">REGISTER</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center col-lg-4 col-12">
                            <div class="myCard card m-3 shadow" style="width: 200px;">
                                <div class="card-body text-center m-3">
                                    <p class="card-text">Already in &#128526;</p>
                                    <a href="login.php"><button class="btn w-45 btn-dark myBtn mt-2" id="registerBtn" type="submit">LOGIN</button></a>
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
    <script type="text/javascript">
    $(document).ready(function() {
        $('#introCard').hide().slideDown(600);
    });
    </script>
</body>

</html>