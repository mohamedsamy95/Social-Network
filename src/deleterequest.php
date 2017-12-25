<?php
session_start();
?>
<?php
require 'conn.php';

$email = $_SESSION['email'];
$friend_email = $_GET['nonfriend_email'];
$query = "DELETE FROM friendrequest WHERE myEmail='$email' and myfriendEmail='$friend_email'";
if(mysqli_query($connection,$query))
	{
			echo '<script type="text/javascript"> 
           window.location = "nonfriendprofile.php?nonfriend_email='.$friend_email.'"
      </script>';
	}
?>