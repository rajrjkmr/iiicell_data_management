<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";
$company_name=$_GET["company_name"];
$address=$_GET["address"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$attend_by=$_GET["attend_by"];
$date=$_GET["date"];
session_start();
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
$id=rand();
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO industry_visit(company_name,address,email,phone,attend_by,date,submit_date,dept,userid,id) VALUES ('$company_name','$address','$email','$phone','$attend_by','$date',now(),'$dept','$userid','$id')";
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
 header('location:insert_iv.php');
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
  ?>

