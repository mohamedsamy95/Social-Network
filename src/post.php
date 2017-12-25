<?php include('conn.php') ?>
<?php include('insection.php') ?>
<?php
$errors = array();

if (isset($_POST['Publish'])) {

$email =$_SESSION['email'];

$text=$_POST['texts'];
echo isset($_FILES['image1']) ;
if(isset($_FILES['image1'])){
   $file_name = $_FILES['image1']['name'];
   $file_size =$_FILES['image1']['size'];
   $file_tmp =$_FILES['image1']['tmp_name'];
   $file_type=$_FILES['image1']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));

   $expensions= array("jpeg","jpg","png");

   if(in_array($file_ext,$expensions)=== false){
     array_push($errors, "extension not allowed, please choose a JPEG or PNG file.");
   }

   if($file_size > 2097152){
     array_push($errors, 'File size must be excately 2 MB');
   }
   if(count($errors) == 0){
     $posttype = $_POST['posttype'];
     if(strcmp($posttype,"private") !=0) $ispublic='t';
     else $ispublic ='f';

      $image=addslashes($file_tmp);
  $name=addslashes($file_name);
  $image=file_get_contents($image);
  $image=base64_encode($image);
  $query="INSERT INTO `post`(`statpost`,ispublic, `Email`, `img`, `imgname`) VALUES ('$text','$ispublic','$email','$image','$name')";
  $re=mysqli_query($connection, $query);
  header('location:newsfeed.php');  
   }
   }else{
    // if($text!=n){
       // $query="INSERT INTO `post`(`statpost`, `Email`) VALUES ('$text','$email')";
       // $re=mysqli_query($connection, $query);
// }
     }



}

?>
