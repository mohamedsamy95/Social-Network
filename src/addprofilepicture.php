<?php
session_start();
?>
<?php include('conn.php') ?>
<?php
$email = $_SESSION['email'];
$errors = array();
if (isset($_POST['save'])) {
if(isset($_FILES['image2'])){
		
			$file_name = $_FILES['image2']['name'];
			 $file_size =$_FILES['image2']['size'];
			 $file_tmp =$_FILES['image2']['tmp_name'];
			 $file_type=$_FILES['image2']['type'];
			 $file_ext=strtolower(end(explode('.',$_FILES['image2']['name'])));
			

			 $expensions= array("jpeg","jpg","png");

			 if(in_array($file_ext,$expensions)=== false){
				 array_push($errors, "extension not allowed, please choose a JPEG or PNG file.");
			 }

			 if($file_size > 2097152){
				 array_push($errors, 'File size must be excately 2 MB');
			 }
			 if(count($errors) == 0){
					$image=addslashes($file_tmp);
			$name=addslashes($file_name);
			$image=file_get_contents($image);
			$image=base64_encode($image);
			saveimage($image,$name,$email);
			 }else{
					print_r($errors);
			 }
}
			 

}

function saveimage($image,$name,$email){
$serverName='localhost';
	$userName='root';
	$password='';
	$databaseName='SocialNetWork';
	$connection = mysqli_connect($serverName,$userName,$password,$databaseName);
$query="UPDATE `users` SET `userPic`=('$image'),`imgname`=('$name') WHERE Email='$email'";
$re=mysqli_query($connection, $query);

$text=$_SESSION['Nickname']." has changed his profile picture";
 $query="INSERT INTO `post`(`statpost`, `Email`, `img`, `imgname`, `ispublic`) VALUES ('$text','$email','$image','$name', 'f')";
  $re=mysqli_query($connection, $query);
  header('location: myprofile.php');
}
?>