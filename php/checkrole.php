<?php
    require("session.php");
    if(empty($_SESSION['role'])){
        header("Location:details.php");
        exit();
    }elseif($_SESSION['role']=="admin"){
        header("Location:../admin/dash.php");
        exit();
    }elseif($_SESSION['role']=="users"){
        header("Location:../user/dash.php");
        exit();
    }elseif($_SESSION['role']=="Devloper"){
        header("Location:../DE/dash.php");
        exit();
    }elseif($_SESSION['role']=="Tester"){
        header("Location:../TE/dash.php");
        exit();
    }elseif($_SESSION['role']=="manger"){
        header("Location:../MA/dash.php");
        exit();
    }
    
?>