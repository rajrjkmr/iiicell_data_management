
<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";
$person_name=$_GET["person_name"];
$cname=$_GET["cname"];
$designation_name=$_GET["designation_name"];
$topic=$_GET["topic"];
$target_attended=$_GET["target_attended"];
$address=$_GET["address"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$date=$_GET["date"];
$message=$_GET["message"];

session_start();
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
$id=rand();

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO gust_lechure(person_name,cname,designation_name,topic,target_attended,email,phone,date,submit_date,dept,userid,id) VALUES ('$person_name','$cname','$designation_name','$topic','$target_attended','$email','$phone','$date',now(),'$dept','$userid','$id')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
 header('location:insert_gl.php');
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
  ?>

