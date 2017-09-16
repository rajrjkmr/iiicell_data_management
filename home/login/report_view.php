<?php  

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  
$start=$_POST['start'];
$end=$_POST['end'];
$drop=$_POST['drop'];
?>
<html>
<h1 style="font-size:25pt:font-family:Forte;color:gold;text-align:center;">INFORMATION RETRIEVE INTERNSHIP TRAINING</h1>
</head>

<body background="background-image-html.jpg">

<table   border="5px" style=" color:red;font-weight:bold;font-size:15pt; width: 180%;height: 60%;">
<tr><th>NAME OF COMPANY</th> <th>PROJECT NAME</th> <th>ADDRESS</th> <th>EMAIL</th> <th>PHONE</th><th>TRAINING ATTENDED BY</th><th> DATE FROM</th> <th>DATE TO</th> <th>SUBMIT DATE&TIME</th><th>SUBMITED STAFF ID</th> <th>MESSAGE</th> <th>DELETE</th><th>EDIT</th> </tr>  
 
<?php  


$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql = "SELECT * FROM indernship WHERE userid='$drop' AND sumbit_date BETWEEN '$start' AND '$end'";

$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0)
{  


 while($row = mysqli_fetch_assoc($retval))
	 { 
	 	$id=$row['id'];
 echo '<tr>';
 echo '<td>'.$row['company_name'].'</td><td>'.$row['project_name'].'</td><td>'.nl2br($row['address']).'</td><td>'.$row['email'].'</td><td>'.$row['phone'].'</td><td>'.$row['attend_by'].'</td><td>'.$row['form_date'].'</td><td>'.$row['to_date'].'</td><td>'.$row['sumbit_date'].'</td><td>'.$row['userid'].'</td><td>'.$row['message'].'</td>';?><td><a href="delete_is_all.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
  	          <span class="delete" title="Delete"> X </span></a></td><td><a href="edit_is.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a></td> <?php
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
<br><br><br><br><br><br>
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

<table class="tabl"  style="width:180%;height: 60%; border:1px solid white; margin-left:; color:white;font-weight:bold;font-size:15pt;">
<tr><th>NAME OF PERSON</th> <th>COLLEGE (OR) COMPANY</th> <th>DESIGNATION</th> <th>TOPICS</th> <th>TARGET ATTENDED</th><th> PHONE</th> <th>EMAIL</th> <th>DATE</th> <th>SUBMIT DATE&TIME</th><th>SUBMITED STAFF ID</th> <th>DELETE</th><th>EDIT</th> </tr>
 
<?php  



$conn1 = mysqli_connect($servername, $username, $password,$db);
if(!$conn1){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql1 = "SELECT * FROM gust_lechure WHERE userid='$drop' AND submit_date BETWEEN '$start' AND '$end'";  
$retval1=mysqli_query($conn1, $sql1);  
  while($row = mysqli_fetch_array($retval1))
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
	 
mysqli_close($conn1);  
?>
</body>
</html>
<br><br><br><br><br><br>

<html>
<head>

<h1 style="font-size:25pt:font-family:Forte;color:gold;text-align:center;">INFORMATION RETRIEVE INPLANT TRAINING</h1>
</head>
<body background="background-image-html.jpg">

<table  border="5px" style="width:190%;height: 50% ; margin-left:; color:red;font-weight:bold;font-size:15pt;">
<tr width="100px"><th>NAME OF COMPANY</th> <th>ADDRESS</th> <th>EMAIL</th> <th>PHONE</th> <th>TRAINING ATTENDED BY</th><th> DATE FROM</th> <th>DATE TO</th> <th>SUBMIT DATE&TIME </th><th>MESSAGE</th><th>SUBMITED STAFF ID</th>  <th>DELETE</th><th>EDIT</th> </tr>  
<?php  
$conn2 = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql2 = "SELECT * FROM implant_training WHERE userid='$drop' AND sumbit_date BETWEEN '$start' AND '$end'";  
$retval2=mysqli_query($conn2, $sql2);  
  
if(mysqli_num_rows($retval2) > 0)
{  
	

 while($row = mysqli_fetch_assoc($retval2))
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
	 
mysqli_close($conn2);  
?>
</body>
</html>



<br><br><br><br><br><br>
<html>
<h1 style="font-size:25pt:font-family:Forte;color:gold;text-align:center;">INFORMATION RETRIEVE INDUSTRY VISIT</h1>
</head>

<body background="background-image-html.jpg">

<table  border="5px" style=" width: 180%;height: 50%;color:red;font-weight:bold;font-size:15pt;">
<tr><th>NAME OF COMPANY</th> <th>ADDRESS</th> <th>EMAIL</th> <th>PHONE</th><th>TRAINING ATTENDED BY</th><th>DATE</th> <th>SUBMIT DATE&TIME</th><th>SUBMITED STAFF ID</th> <th>DELETE</th><th>EDIT</th></tr>  

<?php  
$conn3 = mysqli_connect($servername, $username, $password,$db);
if(!$conn3){  
  die('Could not connect: '.mysqli_connect_error());  
} 

$sql3 = "SELECT *FROM industry_visit WHERE userid='$drop' AND submit_date BETWEEN '$start' AND '$end'"; 

 
$retvalt=mysqli_query($conn3, $sql3);  
 while($row = mysqli_fetch_array($retvalt))
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
	 
mysqli_close($conn3);  
?>
</body>
</html>