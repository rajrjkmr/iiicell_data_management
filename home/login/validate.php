<?php
$servername = "localhost";
$username = "raj";
$spassword = "raj";
$db="ifet";
$userid=$_POST['uid'];
$password=$_POST['password'];
// Create connection
$conn = mysqli_connect($servername, $username, $spassword,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql = "SELECT * FROM login WHERE id = '$userid' AND pass = '$password' ";
 $result_set=mysqli_query($conn, $sql);
 	$row = mysqli_fetch_assoc($result_set);
if(!$row) {
	echo "<script>
alert('REGISTER USER DETAILS ');
</script>";
	header("Location:reg.php");
}
else {
session_start();
$_SESSION['myValue']=$userid;
header("Location:iii.php");
}
?>