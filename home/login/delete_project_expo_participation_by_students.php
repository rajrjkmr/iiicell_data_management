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
$sql="DELETE FROM project_expo_participation_by_students WHERE id='$drop'";
if(mysqli_query($conn, $sql)){  
  header('location:PROJECT_EXPO_PARTICIPATION_BY_STUDENTS.php');
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
?>