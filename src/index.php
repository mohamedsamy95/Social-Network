<?php include('conn.php') ?>
<?php include('RegistrationValid.php') ?>


<html lang="en"><head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......">
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page">
		<meta name="robots" content="index, follow">
		<title>Social Network</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--Google Webfont-->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700" rel="stylesheet" type="text/css">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png">
	</head>
	<body>

    <!-- Header
    ================================================= -->
		<header id="header" class="lazy-load">
    </header>
    <!--Header End-->

    <!-- Top Banner
    ================================================= -->
		<section id="banner">
			<div class="container">

        <!-- Sign Up Form
        ================================================= -->
        <div class="sign-up-form">
					<a href="index.html" class="logo"><img src="images/logo.png" alt="Hakona Matata"></a>
					<h2 class="text-white">Find Your Zemexat</h2>
					<div class="line-divider"></div>
					<div class="form-wrapper">
						<p class="signup-text">Signup now and meet awesome people around the world</p>

						<form method="post" 	action="index.php" enctype="multipart/form-data">
							<?php include('error.php') ?>

							<fieldset class="form-group">
								<input class="form-control" name="first-name" placeholder="Enter First Name" type="text">
							</fieldset>

						  <fieldset class="form-group">
								<input class="form-control" name="last-name" placeholder="Enter Last Name" type="text">
							</fieldset>

						  <fieldset class="form-group">
								<input class="form-control" name="nick-name" placeholder="Enter Nickname" type="text">
							</fieldset>

							<fieldset class="form-group">
								<input class="form-control" name="email" placeholder="Enter Email" type="email">
							</fieldset>

							<fieldset class="form-group">
								<input class="form-control" name="password_1" placeholder="Enter New Password" type="password">
							</fieldset>
							<fieldset class="form-group">
								<input class="form-control" name="password_2" placeholder="Comfirm Password" type="password">
							</fieldset>
							<fieldset class="form-group">
								<input class="form-control" name="phone" placeholder="Phone" type="text">
							</fieldset>

							<fieldset class="form-group">
								<input class="form-control" name="home-town" placeholder="Enter Home Town" type="text">
							</fieldset>

							<fieldset class="form-group">
								<input class="form-control" name="year" placeholder="year" type="date">
							</fieldset>

						  <fieldset class="form-group">
													Gender<select name="gender">
	                         <option value="gender">Male</option>
	                         <option value="gender">Female</option>
                        	 </select>
              </fieldset>

				  		<fieldset class="form-group">
									Marital Status<select name="Marital Status">
		                     <option value="status">Married</option>
                    		 <option value="status">single</option>
		                     <option value="status">Swidan</option>
		 										 </select>
		 										 </fieldset>

							<input type="file" name="image" />

												 <p>By signning up you agree to the terms</p>
						 						<button class="btn-secondary" name="signup" >Signup</button>

						</form>
					</div>
					<a href="signin.php">Already have an account?</a>
					<img class="form-shadow" src="images/bottom-shadow.png" alt="">
				</div><!-- Sign Up Form End -->

        <svg class="arrows hidden-xs hidden-sm">
          <path class="a1" d="M0 0 L30 32 L60 0"></path>
          <path class="a2" d="M0 20 L30 52 L60 20"></path>
          <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg>
			</div>
		</section>

		</section><!-- Image Divider
    ================================================= -->
    <div class="img-divider hidden-sm hidden-xs"></div>

    <!--preloader-->
    <div id="spinner-wrapper" style="display: none;">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>

</body></html>
