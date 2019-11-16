<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
	header('location:../index.html');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bug Tracking System</title>
          
        <!-- Our Custom CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/dash.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    </head>
    <body>
        
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 style="font-size: 20px;"><?php echo $_SESSION['username']; ?> </h3>
                </div>

                <ul class="list-unstyled components">
                    
                    <li class="active">
                        <a href="">Home</a>
                        
                    </li>
                    <li>
                        <a href="#"id="Product">Add project</a>
                        
                        
                    </li>
                    <li>
                        <a href="add.html">Add user</a>
                    </li>
                    <li>
                        <a href="show.php">Show reported Bug</a>
                    </li>
                    <li>
                        <a href="#">Message</a>
                    </li>
                    
                    
                    
                </ul>

                
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <!-- <i class="glyphicon glyphicon-align-left"></i> -->
                                <i class="fa fa-align-left"></i>
                                <span><?php echo $_SESSION['username']; ?></span>
                            </button>
                        </div>
                        <div class="navbar-header">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href=""></a></li>
                            </ul>
                        </div> -->
                    </div>
                </nav>
                <!-- bug report session -->
                <div class=" card Product" style="display: none;">
                	<div class=" card-body">
                	   <form method="post" action="../php/project.php" enctype="multipart/form-data">
                       <input type="text" class="form-control "name="proname" placeholder="NAME OF project" required/> <br/>
					    <textarea rows="10" cols="40"  class="form-control"name="Description" placeholder="Enter Description" placeholder="type any Description"></textarea>
                        
                        <p>Upload a  Document </p>
                        <input type="file" class="form-control "name="Filename"><br/> 
					    <input TYPE="submit" class="btn btn-outline-success"name="upload" value="Add Project"/>
					</form>
                </div>
            </div>
        </div>

     
        <!-- all product-->
        
		
		
	

        



        <?php if(empty($_SESSION['role']) || empty($_SESSION['login_user'])){ ?>
            <!-- <script type='text/javascript'>
                $(document).ready(function(){
                    $('#test').show();  
                    // $('.wrapper').hide();
                    // $(".wrapper *").prop('disabled',true);
                });
            </script> -->
        <?php } ?>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
               

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });

                $('#Product').on('click' ,function(){
                	$('.Product').toggle();

                });

                $('#Respond').on('click' ,function(){
                	$('.Respond').toggle();

                });
            });
        </script>
    </body>
</html>



