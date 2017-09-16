  <?php 
session_start();
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
if(isset($userid))
{
if ($userid==102175) {
?>
<html>
<head>
<style type="text/css">
  .tabl th,td{border:1px solid #C42C6F;
    background: #7D5C6B;}
    .tabl th{border:1px solid #C42C6F;
    background: #fff;
    color: #7436BB;}
</style>

<h1 style="font-size:25pt:font-family:Forte;color:gold;text-align:center;">INFORMATION RETRIEVE GUST LECTURES</h1>
</head>
<body background="background-image-html.jpg">
<table><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>
<table class="tabl"  style="width:180%;height: 60%; border:1px solid white; margin-left:; color:white;font-weight:bold;font-size:15pt;">
<tr><th>NAME OF PERSON</th> <th>COLLEGE (OR) COMPANY</th> <th>DESIGNATION</th> <th>TOPICS</th> <th>TARGET ATTENDED</th><th> PHONE</th> <th>EMAIL</th> <th>DATE</th> <th>SUBMIT DATE&TIME</th><th>SUBMITED STAFF ID</th> <th>DELETE</th><th>EDIT</th> </tr>
 
<?php  

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  


$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql = "SELECT * FROM gust_lechure";  
$retval=mysqli_query($conn, $sql);  
  while($row = mysqli_fetch_array($retval))
	 { 
	 	 $id=$row['id'];
 echo '<tr>';
 echo '<td>'.$row['person_name'].'</td><td>'.$row['cname'].'</td><td>'.$row['designation_name'].'</td><td>'.$row['topic'].'</td><td>'.$row['target_attended'].'</td><td>'.$row['phone'].'</td><td>'.$row['email'].'</td><td>'.$row['date'].'</td><td>'.$row['submit_date'].'</td><td>'.$row['userid'].'</td>'; ?><td><a href="delete_gl_all.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a></td><td><a href="edit_gl.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a></td> <?php
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
<head>

<h1 style="font-size:25pt:font-family:Forte;color:gold;text-align:center;">INFORMATION RETRIEVE GUST LECTURES</h1>
</head>
<body background="background-image-html.jpg">
<table> <th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>
<table  border="3px" style="width:180%;height: 50%;  color:red;font-weight:bold;font-size:15pt;">
<tr><th>NAME OF PERSON</th> <th>COLLEGE (OR) COMPANY</th> <th>DESIGNATION</th> <th>TOPICS</th> <th>TARGET ATTENDED</th><th> PHONE</th> <th>EMAIL</th> <th>DATE</th> <th>SUBMIT DATE&TIME</th> <th>DELETE</th><th>EDIT</th> </tr>
 
<?php  

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  


$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql = "SELECT * FROM gust_lechure WHERE dept='$dept' ";  
$retval=mysqli_query($conn, $sql);  
  while($row = mysqli_fetch_array($retval))
	 { 
	 	 $id=$row['id'];
 echo '<tr>';
 echo '<td>'.$row['person_name'].'</td><td>'.$row['cname'].'</td><td>'.$row['designation_name'].'</td><td>'.$row['topic'].'</td><td>'.$row['target_attended'].'</td><td>'.$row['phone'].'</td><td>'.$row['email'].'</td><td>'.$row['date'].'</td><td>'.$row['submit_date'].'</td>'; ?><td><a href="delete_gl_all.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a></td><td><a href="edit_gl.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a></td> <?php
echo '<tr>';
 
  }


?>
</table>
<?php	
	 
mysqli_close($conn);  
?>
</body>
</html>
<?php }
}
else
	header("Location:login.php");
 ?>