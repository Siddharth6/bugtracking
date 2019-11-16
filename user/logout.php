<?php
session_start();
session_destroy();
echo" Please Wait...";
header('location:../index.html');
?>