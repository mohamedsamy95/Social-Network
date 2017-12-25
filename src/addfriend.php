<?php
session_start();
?>
<?php
require 'conn.php';

$email = $_SESSION['email'];
$friend_email = $_GET['nonfriend_email'];
$query = "INSERT INTO friendrequest (myEmail,myfriendEmail,friendDate) VALUES ('$email', '$friend_email', NULL)";
if(mysqli_query($connection,$query))
	{
		
			echo '<script type="text/javascript"> 
           window.location = "nonfriendprofile.php?nonfriend_email='.$friend_email.'"
      </script>';
	}
?>