<?php
session_start();

?>

<?php

require 'conn.php';
$user_email = $_SESSION['email'];
$friend_email = $_GET['friend_email'];
$query = "SELECT * FROM users WHERE email = '$user_email'";
if($query_fetched = mysqli_query($connection,$query))
{
   $row = mysqli_fetch_assoc($query_fetched);
   $Firstname = $row['First_name'];
   $Lastname = $row['Last_name'];
   $Nickname = $row ['Nickname'];
   $User_image = $row['userPic'];
}



echo '

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Timeline</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
    <!--Google Webfont-->
		<link href= \'https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700\' rel=\'stylesheet\' type=\'text/css\'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="newsfeed.php"><img src="images/logo.png" alt="logo"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="newsfeed.php">Home</a></li>
              <li class="dropdown"><a href="myprofile.php">Timeline</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt=""></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="newsfeed.php">Newsfeed</a></li>
                  <li><a href="table.php">Friend Requests</a></li>
                  <li><a href="table2.php">My friends</a></li>
                  <li><a href="myprofile.php">Timeline</a></li>



                  <li><a href="index.php">Log Out</a></li>
                </ul>
              </li>
            </ul>
             <form class="navbar-form navbar-right hidden-sm" action="search.php" method="post">
              <div class="form-group">
				  <input type="radio" name="searchtype" value="email"> Full Email
				  <input type="radio" name="searchtype" value="name"> Name
				  <input type="radio" name="searchtype" value="hometown"> Hometown
				  <input type="radio" name="searchtype" value="caption"> Post Caption
                <input class="form-control" id="myInput" name="textinput" onkeyup="myFunction()" placeholder="Search friends, posts, photos" type="text">
				<button name="search">Search</button>
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
			';
			
			$searchtype = $_POST['searchtype'];
			if($searchtype== "caption")
			{
				$caption = $_POST['textinput'];
				$q = "SELECT * FROM post WHERE Email='$user_email' AND statpost LIKE '%$caption%'";
				
				if($fetched = mysqli_query($connection,$q))
				{
					while($row = mysqli_fetch_assoc($fetched))
					{
						$post = $row['statpost'];
						$date = $row['postedtime'];
						$time = $row['postedtime'];
						$imag_exists = FALSE;
						if($row['img'] !=NULL)
						{
						$image = $row['img'];
						$imag_exists = TRUE;
						}
						echo '
						
							  <!-- Post Content
							  ================================================= -->
							  <div class="post-content">

								<!--Post Date-->
								<div class="post-date hidden-xs hidden-sm">
								  <h5>' .$Nickname .'</h5>
								  <p class="text-grey">' .$date .'</p>
								</div><!--Post Date End-->';
								if($imag_exists == TRUE)
								{
									
								  echo'
								<img src="data:image;base64,'.$image.'" alt="post-image" class="img-responsive post-image" />

								  ';
								}
								echo'
								  <div class="post-container">
								  <img src="data:image;base64,'.$User_image.'" alt="user" class="profile-photo-md pull-left" />
								  <div class="post-detail">
									<div class="user-info">
									  <h5><a href="Myprofile.php" class="profile-link">' .$Nickname .'</a></h5>
									  <p class="text-muted">Posted ' .$time .'</p>
									</div>
									<div class="reaction">
									  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
									</div>
									<div class="line-divider"></div>
									<div class="post-text">
									  <p>' .$post. ' </p>
									</div>
									<div class="line-divider"></div>
								  </div>
								</div>
							  </div>
							  ';
					}
				}
			}
			
			else{
				if($searchtype== "name"){
					$name = $_POST['textinput'];
					$query = "SELECT * FROM users WHERE First_name LIKE '%$name%' OR Last_name LIKE '%$name%'"; 
				}
				else if($searchtype=="email"){
					$email = $_POST['textinput'];
					$query = "SELECT * FROM users WHERE Email='$email'"; 
				}
				else if($searchtype=="hometown"){
					$hometown = $_POST['textinput'];
					$query = "SELECT * FROM users WHERE hometown='$hometown'"; 
				}
				
				echo'
			                            <!-- Friend List
              ================================================= -->
              <div class="friend-list">
                <div class="row">
                  

				';

				if($query_fetched = mysqli_query($connection,$query))
				{

					while($row = mysqli_fetch_assoc($query_fetched))
					{
						
						$nname = $row['Nickname'];
						$img   = $row['userPic'];
						$mail  = $row['Email'];
						
						echo '
						
								   <div class="col-md-6 col-sm-6">
									<div class="friend-card">
									  <img src="images/covers/1.jpg" alt="profile-cover" class="img-responsive cover" />
									  <div class="card-info">
										<img src="data:image;base64,'.$img.'" alt="user" class="profile-photo-lg" />
										<div class="friend-info">
										  
							  ';
							  if($mail!=$user_email)
							  {
								  
								  $q = "SELECT myfriendEmail FROM friend where myEmail='$user_email' AND myfriendEmail='$mail'";
								  if($qf=mysqli_query($connection,$q)){
									  if($count=mysqli_num_rows($qf) !=0)
									  {
										  
										  echo'
												 <a href="#" class="pull-right text-green">My Friend</a>
												  <h5><a href="Friendprofile.php?friend_email='.$mail.'" class="profile-link">'.$nname.'</a></h5>
										  ';
										}
									  else{
										  echo'
											 <a href="#" class="pull-right text-green">Not a friend</a>
											  <h5><a href="nonfriendprofile.php?friend_email='.$mail.'" class="profile-link">'.$nname.'</a></h5>
										';
									  }
									  mysqli_free_result($qf);
									}
									  
								}
							 else 
								  echo'
							             <a href="#" class="pull-right text-green">Me</a>
							             <h5><a href="Myprofile.php" class="profile-link">'.$nname.'</a></h5>
										  ';
						echo '
							  
									  
										</div>
									  </div>
									</div>
								  </div>
							  ';
					}
				}
			}
							
echo '
</div></div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="copyright">
        <p>Database Team © 2017. All rights reserved</p>
      </div>
		</footer>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>
';
?>