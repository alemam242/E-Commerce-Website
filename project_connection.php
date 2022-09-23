<?php
$username = "root";
$password = "";
$server = "localhost";
$db = "web_project3";

$con = mysqli_connect($server,$username,$password,$db);

if($con)
{
   ?>
   <script>
   //alert('connection successful');
   </script>
   <?php
}
else
{
   die("Connection failed". mysqli_connect_error());
}
?>