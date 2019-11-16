<!--check user data and password--->
<?php

session_start();



$con= mysqli_connect('localhost','root','');

if($con){
	
   echo "connection successful";
   
}else{
	
	echo "no connection";
}
mysqli_select_db($con,'bug'); 

 $name =$_POST['email'];
 
 $pass = $_POST['password'];
 
 
 $q= "select * from users where name ='$name' && password ='$pass' ";
 
 $reuslt= mysqli_query($con , $q);
 
 $num= mysqli_num_rows($reuslt);
 
 if ($num ==1){
	
	$_SESSION['username']=$name;
	
	require("checkrole.php");
	
	
	
	
 }else{
	 
	 header ('location :../index.html');
 }
 
 ?>