
<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";
$company_name=$_GET["company_name"];
$person_contacted=$_GET["person_contacted"];
$contact_number=$_GET["contact_number"];
$outcome=$_GET["outcome"];
session_start();
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
$id=rand();

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO inplant_training(COMPANY_NAME,PERSON_CONTACTED,CONTACT_NUMBER,OUTCOME,submit_date,dept,userid,id) VALUES ('$company_name','$person_contacted','$contact_number','$outcome',now(),'$dept','$userid','$id')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
 header('location:INPLANT_TRAINING.html');
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
  ?>

