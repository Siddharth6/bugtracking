

<?php
// fetch data to data base
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bug";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<?php

$user = $_SESSION['username'];
$qury = mysqli_query($conn ,"select * from users where name = '$user'");
$row = mysqli_fetch_array($qury);
$id =$row["name"];
//print_r($id);



?>
<?php
$sql = "SELECT * FROM `report` where author_name = '$id'";
$result = $conn->query($sql);
?>








 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" type="text/css" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
<!-- fetch all file path to  docments tables -->

<div class=" container doc" style="margin-top: 20px;">
<!-- <a href="dash.php" class="btn"> Dashbord </a> -->

<div class=" card-panel">
<!-- print file  data -->
<?php

if ($result->num_rows > 0) {
    echo "<table>
    <tr><th>Bug id </th><th>Name of bug </th><th>author_name</th><th>description</th><th>reporting time </th><th>summary </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
        "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["bug_name"]."</td>
        <td>".$row["author_name"]."</td>
        <td>".$row["description"]."</td>
        
        <td> ".$row["register"]."</td> 


        <td> <a href= ../php/" . $row["filepath"] . " target='_blank'>view / download</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "<p class ='red-text center'>sorry  there is no docment found</p> ";
}
$conn->close();


?>





</div>
<a href="dash.php" class="btn"> Dashbord </a>
</div>



<!--  end  -->
























<!-- add -->
  





      <!--JavaScript at end of body for optimized loading-->

      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    </body>
  </html>