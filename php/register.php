<?php
session_start();

  

$con= mysqli_connect('localhost','root', '');

if($con){
	
   echo "<script>alert('Yoy are sucessfully registerd');</script>";
   echo "<script type='text/javascript'> document.location ='../index.html'; </script>";
   
}else{
	
	echo "<script>alert('something went worng');</script>";
}
mysqli_select_db($con,'bug');

 

 $email=$_POST['email'];
 

 $password=$_POST['password'];
 $role='users';
 
 $q = "select *from users where name ='$email' && password ='$password'  ";
 
 $reuslt= mysqli_query($con ,$q); 
 
 $num =mysqli_num_rows($reuslt);
 
 if ($num ==1){
	 
	 echo "duplicate data";
	 
 }else{
	 
	 $qy ="insert into users (name , password , role)values ('$email' , '$password','$role')";
	 
	 mysqli_query ($con, $qy);
	 
 }
 
 ?> 