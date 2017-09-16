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
$sql="DELETE FROM industrial_visit_during_vacation WHERE id='$drop'";
if(mysqli_query($conn, $sql)){  
  header('location:INDUSTRIAL_VISIT_DURING_VACATION.php');
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
?>