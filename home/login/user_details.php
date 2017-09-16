<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";



$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
<head>

<h1 style="font-size:25pt:font-family:Forte;color:gold;text-align:center;">INFORMATION ABOUT USER</h1>
</head>
<body background="background-image-html.jpg">
<table><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='user_add.php'">USER ADD</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>
<table cellpadding="20px" cellspacing="0px" border="5px" style="width:auto; margin-left:; color:red;font-weight:bold;font-size:15pt;">
<tr><th>STAFF ID</th> <th>STAFF NAME</th> <th>PASSSWORD</th> <th>DEPT</th>   <th>DELETE</th><th>EDIT</th> </tr> 
<?php  

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  

$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql = "SELECT *FROM login";  
$retval=mysqli_query($conn, $sql);  
 while($row = mysqli_fetch_array($retval))
	 { 
	 	$id=$row['id'];
		$uname=$row['uname'];
		$pass=$row['pass'];
		$dept=$row['dept'];
		
?>
<tr><td><?php echo $id; ?></td><td><?php echo $uname; ?></td><td><?php echo $pass; ?></td><td><?php echo $dept; ?></td><td><a href="user_delete.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a></td><td><a href="user_edit.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a></td></tr>
 



<?php
 
  }



?>
</table>
<?php	
	 
mysqli_close($conn);  
?>
</body>
</html>
<?php

?>	