<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['username'])){
    header('location:../login.html?error= login');
}
// $name = $_SESSION['username'];
// echo $name;
// img 
$link = mysqli_connect('localhost','root','','bug') or die("Error ".mysqli_error($link));

$filename=$_FILES["Filename"]["name"];
$tmpname= $_FILES["Filename"]["tmp_name"]; 
$folder ="project/".$filename;
$result=move_uploaded_file($tmpname ,$folder);
// productname  and fileDescription
$productname = $_POST['proname'];
$fileDescription = $_POST['Description'];
// $bugtype = $_POST['bugtype'];

//  echo"<img src='$folder' />";

 if($result) { 
    echo "Your file <html><b><i>".$folder."</i></b></html> has been successfully uploaded";       
    $query = "INSERT INTO project (filepath,filename,description,project_name) VALUES ('$folder','$filename','$fileDescription','$productname')";
    $link->query($query) or die("Error : ".mysqli_error($link));
    // header('location:../admin/dashboard.php?sucess=file uploading');
    echo"<script type='text/javascript'>alert('upload sucessfully .'); document.location ='../user/dash.php?sucess=login'; </script>";
                
}
else {          
    echo "<script>alert('Sorry !!! There was an error in uploading your file');</script>";         
}
mysqli_close($link);

?>
