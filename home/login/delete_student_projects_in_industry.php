<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  
$drop= $_GET["id"];
$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql="DELETE FROM student_projects_in_industry WHERE id='$drop'";
if(mysqli_query($conn, $sql)){  
  header('location:STUDENT_PROJECTS_IN_INDUSTRY.php');
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
?>