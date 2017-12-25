<?php
session_start();
?>
<?php
require 'conn.php';

$email = $_SESSION['email'];
$friend_email = $_GET['friend_email'];
$query1 = "DELETE FROM friend WHERE myEmail = '$email' AND myfriendEmail = '$friend_email' ";
$query2 = "DELETE FROM friend WHERE myEmail = '$friend_email' AND myfriendEmail = '$email' ";
if(mysqli_query($connection,$query1)){
	if(mysqli_query($connection,$query2)){
			    echo '<script type="text/javascript">
           window.location = "nonfriendprofile.php?nonfriend_email='.$friend_email.'"
		</script>';
	}
}
?>