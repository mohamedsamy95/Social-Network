<?php
session_start();

?>

<?php

require 'conn.php';
$user_email = $_SESSION['email'];
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
                  <li><a href="Myprofile.php" >Timeline</a></li>
                  <li><a href="friends.php?friend_email='.$user_email.'" class="active">Friends</a></li>
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
                <li><a href="Myprofile.php" class="active">Timeline</a></li>
                <li><a href="friends.php?friend_email='.$user_email.'">Friends</a></li>
              </ul>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
			                            <!-- Friend List
              ================================================= -->
              <div class="friend-list">
                <div class="row">
                  

';
$query = "SELECT myEmail FROM friendrequest WHERE myfriendEmail='$user_email'";
if($query_fetched = mysqli_query($connection,$query))
{
	while($row = mysqli_fetch_assoc($query_fetched))
	{
		$mail = $row['myEmail'];
		$query2 = "SELECT * FROM users where Email='$mail'";
		if($query_fetched2 = mysqli_query($connection,$query2))
		{
			$row = mysqli_fetch_assoc($query_fetched2);
			$name = $row['Nickname'];
			$img = $row['userPic'];
		}
		echo '
                   <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/1.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="data:image;base64,'.$img.'" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="confirmrequest.php?nonfriend_email='.$mail.'" class="pull-right text-green">Confirm Request</a>
                          <h5><a href="nonfriendprofile.php?nonfriend_email='.$mail.'" class="profile-link">'.$name.'</a></h5>
                        </div>
                      </div>
                    </div>
                  </div>
			  ';
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