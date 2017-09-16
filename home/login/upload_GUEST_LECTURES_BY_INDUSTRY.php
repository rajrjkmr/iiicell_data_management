
<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";
$name_of_the_organisation=$_GET["agecny_name"];
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
$sql = "INSERT INTO guest_lectures_by_industry(name_of_the_organisation,PERSON_CONTACTED,CONTACT_NUMBER,OUTCOME,submit_date,dept,userid,id) VALUES ('$name_of_the_organisation','$person_contacted','$contact_number','$outcome',now(),'$dept','$userid','$id')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
 header('location:GUEST_LECTURES_BY_INDUSTRY.html');
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
  ?>

