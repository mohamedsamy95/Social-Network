<html>

<body >
  <form method="post" enctype="multipart/form-data">

<input type="file" name="img"/>
<br/><br/>
<input type="submit" value="uplode" name="sum"/>

</form>
<?php
if(isset($_POST['sum'])){

// $file=$_FILES['file'];
// $filename=$_FILES['file']['name'];
// $filetempname=$_FILES['file']["temp_name"];
// echo $_FILES['file']['size'];
// $fileExt=explode(".",$filename);
// $fileAct=strtolower(end(fileExt));
// $allowe = array('jpg');
// if(interfacearray($fileAct,$allowe)){

// }

  if($_FILES['file']['size']== FALSE){
    echo "select";
  }
  else {
   $image=addslashes($_FILES['file']['tmp_name']);
   $name=addslashes($_FILES['file']['name']);
   $image=file_get_contents($image);
   $image=base64_encode($image);
   saveimage($name,$image);
 }*/
}

function saveimage($name,$image){
  $serverName='localhost';
  $userName='root';
  $password='';
  $databaseName='trial';
  $connection = mysqli_connect($serverName,$userName,$password,$databaseName);
  $qr="insert into me (name,img) values('$name','$image')";
  $results=	mysqli_query($connection, $qr);
  if($results){
    echo"uploades";
  }else{
    echo"asaasuploades";

  }

}
?>

</body>
</html>
