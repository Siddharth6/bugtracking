<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `report` WHERE CONCAT( `id`, `bug_name`, `author_name`,`register`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `report`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "bug");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--online css--->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
   <!--offline css--->
  
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  </style>
</head>
<body>

<h2 class ="text-center text-info"> <u> WELCOME : <?php echo $_SESSION['username'];?>.</u></h2>
	  
<div class="container">
<a  class="btn btn-primary" href="dash.php" role="button">Dashbord</a>



<br/> <br>
<!--fliter -->
        
        
            <table class="table table-bordered">
           <thead>
           <tr>
              <th>ID</th>
              <th>Name of Bug </th>
              <th>author_name</th>
               <th>Description</th>
               <th>filename</th>
              
   
                <th>filepath</th> 
                <th>Reporting Time</th> 
   <!-- <th class=" text-center"colspan="2">Action</th> -->
                </tr></thead>
   <tbody>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['bug_name'];?></td>
                    <td><?php echo $row['author_name'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['filename'];?></td>
                    <td><a href ="../php/<?php echo $row['filepath'];?>">Show Report</a></td>
                    <td><?php echo $row['register'];?></td>
                  
                    
                    
					
                <?php endwhile;?>
            </tbody>
</table>
        </form>
        </div>  
    </body>
</html>