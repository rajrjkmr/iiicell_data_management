<?php 
session_start();
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
if (isset($userid)) {
if ($userid==102175) {
?>
<html>
<head>

<h1 style="font-size:25pt:font-family:Forte;color:gold;text-align:center;">INFORMATION RETRIEVE IMPLANT TRAINING</h1>
</head>
<body background="background-image-html.jpg">
<table><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>
<table  border="5px" style="width:190%;height: 50% ; margin-left:; color:red;font-weight:bold;font-size:15pt;">
<tr width="100px"><th>NAME OF COMPANY</th> <th>ADDRESS</th> <th>EMAIL</th> <th>PHONE</th> <th>TRAINING ATTENDED BY</th><th> DATE FROM</th> <th>DATE TO</th> <th>SUBMIT DATE&TIME </th><th>MESSAGE</th><th>SUBMITED STAFF ID</th>  <th>DELETE</th><th>EDIT</th> </tr>  
<?php  

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  


$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql = "SELECT * FROM implant_training";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0)
{  
	

 while($row = mysqli_fetch_assoc($retval))
	 { 
	 	$id=$row['id'];

echo '<tr>';
 echo '<td>'.$row['company_name'].'</td><td>'.nl2br($row['address']).'</td><td>'.$row['email'].'</td><td>'.$row['phone'].'</td><td>'.$row['attend_by'].'</td><td>'.$row['form_date'].'</td><td>'.$row['to_date'].'</td><td>'.$row['sumbit_date'].'</td><td>'.$row['message'].'</td><td>'.$row['userid'].'</td>';?><td><a href="delete_it_all.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a></td><td><a href="edit_it.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a></td> <?php
echo '<tr>';
 
  }

}
?>
</table>
<?php	
	 
mysqli_close($conn);  
?>
</body>
</html>
<?php
}
else
{
	?>
<html>
<head>

<h1 style="font-size:25pt:font-family:Forte;color:gold;text-align:center;">INFORMATION RETRIEVE IMPLANT TRAINING</h1>
</head>
<body background="background-image-html.jpg">
<table> <th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>
<table  border="5px" style="width:180%; height: 50%; margin-left:; color:red;font-weight:bold;font-size:15pt;">
<tr><th>NAME OF COMPANY</th> <th>ADDRESS</th> <th>EMAIL</th> <th>PHONE</th> <th>TRAINING ATTENDED BY</th><th> DATE FROM</th> <th>DATE TO</th> <th>SUBMIT DATE&TIME </th><th>MESSAGE</th>  <th>DELETE</th><th>EDIT</th> </tr>  
<?php  

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  

$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql = "SELECT * FROM implant_training WHERE dept='$dept' ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0)
{  
	

 while($row = mysqli_fetch_assoc($retval))
	 { 
	 	$id=$row['id'];

echo '<tr>';
 echo '<td>'.$row['company_name'].'</td><td>'.nl2br($row['address']).'</td><td>'.$row['email'].'</td><td>'.$row['phone'].'</td><td>'.$row['attend_by'].'</td><td>'.$row['form_date'].'</td><td>'.$row['to_date'].'</td><td>'.$row['sumbit_date'].'</td><td>'.$row['message'].'</td>';?><td><a href="delete_it_all.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a></td><td><a href="edit_it.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a></td> <?php
echo '<tr>';
 
  }

}
?>
</table>
<?php	
	 
mysqli_close($conn);  
?>
</body>
</html>
<?php
}
}
else
{
	header("location:login.php");
 }
?>	