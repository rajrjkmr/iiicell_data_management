
<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";
$company_name=$_GET["company_name"];
$project_name=$_GET['project_name'];
$address=$_GET["address"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$attend_by=$_GET["attended_by"];
$form_date=$_GET["from_date"];
$to_date=$_GET["to_date"];
$message=$_GET["message"];
session_start();
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
$id=rand();





// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO indernship(company_name,project_name,address,email,phone,attend_by,form_date,to_date,sumbit_date,message,dept,userid,id) VALUES ('$company_name','$project_name','$address','$email','$phone','$attend_by','$form_date','$to_date',now(),'$message','$dept','$userid','$id')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
 header('location:insert_is.php');
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
  ?>

