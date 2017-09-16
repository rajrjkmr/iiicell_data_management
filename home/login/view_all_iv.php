<?php 
session_start();
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
if (isset($userid)) {
if ($userid==102175) {
?>
<html>
<h1 style="font-size:25pt:font-family:Forte;color:gold;text-align:center;">INFORMATION RETRIEVE INDUSTRY VISIT</h1>
</head>

<body background="background-image-html.jpg">
<table><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>
<table  border="5px" style=" width: 180%;height: 50%;color:red;font-weight:bold;font-size:15pt;">
<tr><th>NAME OF COMPANY</th> <th>ADDRESS</th> <th>EMAIL</th> <th>PHONE</th><th>TRAINING ATTENDED BY</th><th>DATE</th> <th>SUBMIT DATE&TIME</th><th>SUBMITED STAFF ID</th> <th>DELETE</th><th>EDIT</th></tr>  

<?php  

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  

$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
} 

 	$sql = "SELECT *FROM industry_visit "; 

 
$retval=mysqli_query($conn, $sql);  
 while($row = mysqli_fetch_array($retval))
	 { 
	 	$id=$row['id'];
	 	$company_name=$row['company_name'];

 echo '<tr>';
 echo '<td>'.$company_name.'</td><td>'.nl2br($row['address']).'</td><td>'.$row['email'].'</td><td>'.$row['phone'].'</td><td>'.$row['attend_by'].'</td><td>'.$row['date'].'</td><td>'.$row['submit_date'].'</td><td>'.$row['userid'].'</td>' ?><td><a href="delete_iv_all.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a></td> <td><a href="edit_iv.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a></td>; <?php
echo '<tr>';
  
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
<h1 style="font-size:25pt:font-family:Forte;color:gold;text-align:center;">INFORMATION RETRIEVE INDUSTRY VISIT</h1>
</head>

<body background="background-image-html.jpg">
<table><th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>
<table   border="1px" style=" width: 180%;height: 50%;color:red;font-weight:bold;font-size:15pt;">
<tr><th>NAME OF COMPANY</th> <th>ADDRESS</th> <th>EMAIL</th> <th>PHONE</th><th>TRAINING ATTENDED BY</th><th>DATE</th> <th>SUBMIT DATE&TIME</th> <th>DELETE</th><th>EDIT</th></tr>  

<?php  

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  

$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
} 
if (@Admin==$userid) {
	$sql = "SELECT * FROM industry_visit  "; 

 	
 } 
 else
 {
 	$sql = "SELECT * FROM industry_visit WHERE dept='$dept' "; 

 }
$retval=mysqli_query($conn, $sql);  
 while($row = mysqli_fetch_array($retval))
	 { 
	 	$id=$row['id'];
	 	$company_name=$row['company_name'];

 echo '<tr>';
 echo '<td>'.$company_name.'</td><td>'.nl2br($row['address']).'</td><td>'.$row['email'].'</td><td>'.$row['phone'].'</td><td>'.$row['attend_by'].'</td><td>'.$row['date'].'</td><td>'.$row['submit_date'].'</td>' ?><td><a href="delete_iv_all.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a></td> <td><a href="edit_iv.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a></td>; <?php
echo '<tr>';
  
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