<?php
session_start();

?>

<?php

require 'conn.php';
$user_email = $_SESSION['email'];
$friend_email = $_GET['friend_email'];
$query = "SELECT * FROM users WHERE email = '$friend_email'";
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
                  <li><a href="friendrequests.php">Friend Requests</a></li>
                  <li><a href="friends.php?friend_email='.$user_email.'">My friends</a></li>
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
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="data:image;base64,'.$User_image.'" alt="" class="img-responsive profile-photo" />
                  <h3>'.$Nickname.'</h3>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                <li><a href="Friendprofile.php?friend_email='.$friend_email.'" class="active">Timeline</a></li>
                <li><a href="Friends.php?friend_email='.$friend_email.'">Friends</a></li>
				</ul>
                 <ul class="follow-me list-inline">
				<li><a href="Unfriend.php?friend_email='.$friend_email.'"
			 <button class="btn-primary">Unfriend</button>
			 </a></li>
			 </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->
		  
          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="data:image;base64,'.$User_image.'" alt="" class="img-responsive profile-photo" />
              <h4>'.$Nickname.'</h4>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="Friendprofile.php?friend_email='.$friend_email.'" class="active">Timeline</a></li>
                <li><a href="Friends.php?friend_email='.$friend_email.'">Friends</a></li>
              </ul>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
			              <!-- Post Create Box
              ================================================= -->
              <div class="create-post">
                <div class="row">
                </div>
              </div><!-- Post Create Box End-->
';
$query = "SELECT * FROM post WHERE email='$friend_email' ORDER BY postedtime DESC";
if($query_fetched = mysqli_query($connection,$query))
{
	while($row = mysqli_fetch_assoc($query_fetched))
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
                      <h5><a href="Friendprofile.php?friend_email='.$friend_email.'" class="profile-link">' .$Nickname .'</a></h5>
                      <p class="text-muted">Posted ' .$time .'</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 2</a>
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
echo '
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