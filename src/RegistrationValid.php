<!-- <?php include('conn.php') ?> -->
<?php
session_start();
// variable declaration
// $serverName='localhost';
// $userName='root';
// $password='';
// $databaseName='SocialNetWork';
// $connection = mysqli_connect($serverName,$userName,$password,$databaseName);

$errors = array();

if (isset($_POST['signup'])) {
	// receive all input values from the form
	$firstname = mysqli_real_escape_string($connection, $_POST["first-name"]);
  $lastname = mysqli_real_escape_string($connection, $_POST["last-name"]);
  $nickname = mysqli_real_escape_string($connection, $_POST["nick-name"]);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password_1 = mysqli_real_escape_string($connection, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($connection, $_POST['password_2']);
  $phone = mysqli_real_escape_string($connection, $_POST['phone']);
  $home_town = mysqli_real_escape_string($connection, $_POST['home-town']);

	// form validation: ensure that the form is correctly filled
	if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($lastname)) { array_push($errors, "Lastname is required"); }
  if (empty($nickname)) { array_push($errors, "Nickname is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($phone)) { array_push($errors, "phone is required"); }
  if (empty($home_town)) { array_push($errors, "Home town is required"); }

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}
  if (count($errors) == 0) {

		    $mob="mobile";
		  		$password = md5($password_1);
		  		$query = "INSERT INTO users (First_name,Last_name,Nickname,email,password,hometown)
		  				  VALUES('$firstname', '$lastname', '$nickname', '$email', '$password', '$home_town')";
		  	$results=	mysqli_query($connection, $query);
		// *****************************************
		if(isset($_FILES['image'])){
			 $file_name = $_FILES['image']['name'];
			 $file_size =$_FILES['image']['size'];
			 $file_tmp =$_FILES['image']['tmp_name'];
			 $file_type=$_FILES['image']['type'];
			 $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

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
			echo "sucess";
			 }else{
					print_r($errors);
			 }


		}
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now logged in";
    header('location: newsfeed.php');
     }


}
// ************************
function saveimage($image,$name,$email){
	$serverName='localhost';
	$userName='root';
	$password='';
	$databaseName='SocialNetWork';
	$connection = mysqli_connect($serverName,$userName,$password,$databaseName);
$query="UPDATE `users` SET `userPic`=('$image'),`imgname`=('$name') WHERE Email='$email'";
$qr="insert into try (name,img) values('$name','$image')";
$re=mysqli_query($connection, $query);
}

 ?>
