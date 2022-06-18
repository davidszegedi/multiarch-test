<?php
  $shell_exec_output = shell_exec('lscpu');
  $shell_exec_output_sl = str_replace("\n", "-", $shell_exec_output);
  $shell_exec_output_sl = str_replace("\r", "-", $shell_exec_output_sl);
  $shell_exec_output_sl = str_replace(" ", "-", $shell_exec_output_sl);
  $arch_photo = 'none';
	$find_arch = 'intel';
	if(strpos($shell_exec_output_sl,$find_arch) !== false){
		 $arch_photo = 'images/x86.png';
	 } else {
		 $arch_photo = 'images/arm.png';
	 }
?>
<html lang="en">
	<head>
    <meta charset="utf-8">
		<title>OpenShift multi architecture test page</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="css/templatemo-style.css">

	</head>
	<body>
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		<!-- end preloader -->
		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Red Hat</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
		<!-- start home -->
		<section id="home">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper">Multi-Architecture Container test page</h1>
							<p class="tm-white">Multi-architecture php-apache container (amd64 and arm64) currently running on:</p>
							<img src="<?php echo $arch_photo;?>" class="img-responsive" alt="home img">
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->

		<!-- start feature -->
		<section id="feature">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
						<h2 class="text-uppercase">Cpu Architecture details</h2>
						<p>
							<?php
		    				echo "<pre>$shell_exec_output</pre>";
							?>
						</p>
            <p>
							<?php
		    				echo "$arch_photo";
							?>
						</p>
          </div>
				</div>
			</div>
		</section>
		<!-- end feature -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<p>Red Hat Demo</p>
				</div>
			</div>

		</footer>
		<!-- end footer -->

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
