
<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";
$name_of_the_organisation=$_GET["name_of_the_organisation"];
$person_contacted=$_GET["person_contacted"];
$contact_number=$_GET["contact_number"];
$status=$_GET["status"];
session_start();
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
$id=rand();

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO mov(NAME_OF_THE_ORGANISATION,PERSON_CONTACTED,CONTACT_NUMBER,STATUS,submit_date,dept,userid,id) VALUES ('$name_of_the_organisation','$person_contacted','$contact_number','$status',now(),'$dept','$userid','$id')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
 header('location:MOU.html');
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
  ?>

