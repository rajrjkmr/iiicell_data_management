<?php
$servername = "localhost";
$username = "raj";
$spassword = "raj";
$db="ifet";
$id=$_POST['id'];
$dept=$_POST['dept'];
$uname=$_POST['uname'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];
$apassword=$_POST['apassword'];
// Create connection
$conn = mysqli_connect($servername, $username, $spassword,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 

		if($password==$rpassword)
{
	$sql="INSERT INTO login(id,dept,uname,pass,repass) VALUES('$id','$dept','$uname','$password','$rpassword')";
if(mysqli_query($conn, $sql)){
	echo "<script>
alert('REGISTER SUCESSFULL');
</script>";
header("Location:user_add.php");	
 
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
	}  
	
}
	 else{
		echo "<script>
alert('PASSWORD NOT SAME ');
</script>";
header("Location:user_add.php.php");	

		# code...
	}

	# code...




		
 ?>
