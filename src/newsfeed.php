<?php 
include('insection.php') 
?>

<?php
require 'conn.php';
$email = $_SESSION['email'];
$query = "SELECT * FROM users WHERE email = '$email'";
if($query_fetched = mysqli_query($connection,$query))
{
   $row = mysqli_fetch_assoc($query_fetched);
   $Firstname = $row['First_name'];
   $Lastname = $row['Last_name'];
   $Nickname = $row ['Nickname'];
   $_SESSION['Nickname'] = $Nickname;
   $User_image = $row['userPic'];
}

?>




<html lang="en"><head><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}
</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}
</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}
</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}
</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......">
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page">
    <meta name="robots" content="index, follow">
    <title>News Feed | Check what your friends are doing</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/emoji.css" rel="stylesheet">
    <!--Google Webfont-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700" rel="stylesheet" type="text/css">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png">
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/map.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/marker.js"></script><style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/onion.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/controls.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/map.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/marker.js"></script><style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/onion.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/controls.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/map.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/marker.js"></script><style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/onion.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/controls.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/map.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/marker.js"></script><style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/onion.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/controls.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/3/stats.js"></script></head>
  <body>
  </body></html>
<?php

echo'
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
                  <li><a href="friends.php?friend_email='.$email.'">My friends</a></li>
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

    <div id="page-contents">
      <div class="container">
        <div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
          <div class="col-md-3 static">
            <div class="profile-card">
              <img href="myprofile.php" src="data:image;base64,'.$User_image.'" alt="user" class="profile-photo">
               <a href="myprofile.php" class="text-white">'.$Nickname.'</a>
              <!--<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>-->
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-people-outline"></i><div><a href="friendrequests.php">Friend Requests</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="friends.php?friend_email='.$email.'">Friends</a></div></li>



            </ul><!--news-feed links ends-->
            <!--chat block ends-->
          </div>
          <div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <form method="post"   action="post.php" enctype="multipart/form-data">
            <div class="create-post">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="data:image;base64,'.$User_image.'" alt="" class="profile-photo-md">
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                  <input type="file" name="image1" />
                </div>
                <div class="col-md-5 col-sm-5">
                    <button class="btn btn-primary pull-right" style="padding-left: 20px;margin-left: 0px;left: -70px;" name="Publish">Publish</button>
          </div>
          <div class="col-md-5 col-sm-5">
          <input type="radio" name="posttype" value="public">public
          <input type="radio" name="posttype" value="private">private
          
          
                  </div>
                </div>
              </div>
            <!-- Post Create Box End-->
</form>';
$query ="SELECT * FROM post WHERE post.Email in(SELECT DISTINCT friend.myfriendEmail from friend,users where (friend.myfriendEmail=users.Email or friend.myEmail=users.Email) AND users.Email='$email') ORDER BY postedtime DESC";
if($query_fetched = mysqli_query($connection,$query))
{
  while($row = mysqli_fetch_assoc($query_fetched))
  {
    $post = $row['statpost'];
    $date = $row['postedtime'];
    $time = $row['postedtime'];
    $nmail = $row['Email'];
    $q = "SELECT * FROM users where Email='$nmail'";
    if($r=mysqli_query($connection,$q))
    {
      $r = mysqli_fetch_assoc($r);
      $nname = $r['Nickname'];
      $uimg = $r['userPic'];
    }
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
                  <h5>' .$nname .'</h5>
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
                  <img src="data:image;base64,'.$uimg.'" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="Myprofile.php" class="profile-link">' .$nname .'</a></h5>
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
echo'
</div>
          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
          <div class="col-md-2 static">

          </div>
        </div>
      </div>
    </div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="copyright">
        <p>Taw2am Team © 2017. All rights reserved ya klab</p>
      </div>
    </footer>

    <!--preloader-->
    <div id="spinner-wrapper" style="display: none;">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>


</body></html>
'?>