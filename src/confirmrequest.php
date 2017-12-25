<?php
session_start();
?>
<?php
require 'conn.php';

$email = $_SESSION['email'];
$friend_email = $_GET['nonfriend_email'];

$query1 = "INSERT INTO friend (myEmail,myfriendEmail) VALUES ('$email', '$friend_email')";
$query2 = "INSERT INTO friend (myEmail,myfriendEmail) VALUES ('$friend_email', '$email')";
$query3 = "DELETE FROM friendrequest WHERE myEmail='$friend_email' and myfriendEmail='$email'";
if(mysqli_query($connection,$query1)){
	echo $email;
	echo $friend_email;
	if(mysqli_query($connection,$query2)){
		if(mysqli_query($connection,$query3)){
			echo '<script type="text/javascript"> 
			window.location = "Friendprofile.php?friend_email='.$friend_email.'"
			</script>';
			
		}
	}
}
?>