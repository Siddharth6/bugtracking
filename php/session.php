<?php
   include('connect.php');
   if(!isset($_SESSION)){
      session_start();
   }
   
   $userid = $_SESSION['username'];
   
   $ses_sql = "SELECT * FROM users WHERE name = '$userid'";
   
   $result = mysqli_query($conn, $ses_sql);
   while($row = mysqli_fetch_assoc($result)){
      $_SESSION['role'] = $row['role'];
      // echo $_SESSION['role'];
    //   $_SESSION['email'] = $row['email'];
    //   $_SESSION['mobile'] = $row['mobile'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['ID'] = $row['id'];
   }   
   if(!isset($_SESSION['username'])){
      header("location:../index.php?res=r5");
      die();
   }
?>