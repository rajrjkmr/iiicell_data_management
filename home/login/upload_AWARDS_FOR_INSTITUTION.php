
<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";
$agecny_name=$_GET["agecny_name"];
$person_contacted=$_GET["person_contacted"];
$contact_number=$_GET["contact_number"];
$current_status=$_GET["current_status"];
session_start();
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
$id=rand();

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO awards_for_institution(AGECNY_NAME,PERSON_CONTACTED,CONTACT_NUMBER,CURRENT_STATUS,submit_date,dept,userid,id) VALUES ('$agecny_name','$person_contacted','$contact_number','$current_status',now(),'$dept','$userid','$id')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
 header('location:AWARDS_FOR_INSTITUTION.html');
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
  ?>

     