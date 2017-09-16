<?php 
session_start();
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
if (isset($userid)) {
if ($userid==102175) {
?>


<html>
<center><h2 style="color: #d81b60;padding-left: 4em;font-size:24pt;font-family:Forte;">INFORMATION RETRIEVE INDUSTRIAL VISIT DURING VACATION</h2></center>
<style type="text/css">
th,td{color: #8e24aa;
background-color: #fff;
border-radius: 5%;}
  .tt{color: #8e24aa;
background-color: #fff;
border-radius: 5%;}
body{background-image: url(1.jpg);}
	h2:after{
    background-color: #dddddd;
    background-image: -moz-linear-gradient(90deg, #efa8b0, #a89cc8, #8cc9f0);
    background-image: -webkit-linear-gradient(90deg, #efa8b0, #a89cc8, #8cc9f0);
    background-image: -ms-linear-gradient(90deg, #efa8b0, #a89cc8, #8cc9f0);
    background-image: linear-gradient(90deg, #efa8b0, #a89cc8, #8cc9f0);
    
}
h2:after{
    margin-left: 5em;
    margin-right: 5em;
    
}
h2:after{
    background-color: rgba(255, 255, 255, 0.35);
    
}
h2:after{
    display: block;
    content: '';
    width: 15.25em;
    height: 2px;
    margin: 2.7em 10em 2em 9em;
    border-radius: 65%;
    padding-left: 19em;
    
}
*, *:before, *:after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    
}
h2,p{position: center;
text-align: center;}
	</style>
</head>

<body background="background-image-html.jpg">
<table><th><button style="width:100px; height: 50px;opacity: 1;background-color:#795548;font-size: 10pt;font-weight: bold; color:#fff;border: solid 1px #000;border-radius: 20%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 1;background-color:#795548;font-size: 10pt;color:#fff;border: solid 1px #000;border-radius: 20%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 1;background-color:#795548;font-size: 10pt;color:#fff;border: solid 1px #000;border-radius: 20%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 1;background-color:#795548;font-size: 10pt;color:#fff;border: solid 1px #000;border-radius: 20%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 1;background-color:#795548;font-size: 10pt;color:#fff;border: solid 1px #000;border-radius: 20%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table><br><br>
<table style="font-weight:bold;font-size:15pt; width: 100%;height: 40%;border:0.4 solid grey;">
<tr><th>COMPANY NAME</th> <th>PERSON CONTACTED</th> <th>CONTACT NUMBER</th> <th>OUTCOME</th><th>SUBMIT DATE&TIME</th><th>SUBMITED STAFF ID</th><th>DELETE</th><th>EDIT</th><!-- <th>SELECT</th> --></tr>  
<?php  

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  
$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql = "SELECT * FROM industrial_visit_during_vacation ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0)
{  

?>
<form action="2.php" method="post">
<?php
 while($row = mysqli_fetch_assoc($retval))
	 { 
	 	 $id=$row['id'];
 echo '<tr>';
 echo '<td>'.$row['COMPANY_NAME'].'</td><td>'.$row['PERSON_CONTACTED'].'</td><td>'.$row['CONTACT_NUMBER'].'</td><td>'.$row['OUTCOME'].'</td><td>'.$row['SUBMIT_DATE'].'</td><td>'.$row['USERID'].'</td>';?><td><a href="delete_industrial_visit_during_vacation.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
  	          <span class="delete" title="Delete"> X </span></a></td><td><a href="edit_industrial_visit_during_vacation.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a></td><!-- <td>
<input type="checkbox" name="check_list[]" value="<?php echo $id; ?>"></td>  --><?php
echo '<tr>';
 
  }

}
?>
<!-- <input type="submit" name="" value="REPORT"></form> -->
</table>
<?php	
	 
mysqli_close($conn);  
?>
</body>
</html>
<?php }
else
{
	?>
	<html>
<center><h2 style="color: #d81b60;padding-left: 4em;font-size:24pt;font-family:Forte;">INFORMATION RETRIEVE INDUSTRIAL VISIT DURING VACATION</h2></center>
<style type="text/css">
th,td{color: #8e24aa;
background-color: #fff;
border-radius: 5%;}

body{background-image: url(1.jpg);}
    h2:after{
    background-color: #dddddd;
    background-image: -moz-linear-gradient(90deg, #efa8b0, #a89cc8, #8cc9f0);
    background-image: -webkit-linear-gradient(90deg, #efa8b0, #a89cc8, #8cc9f0);
    background-image: -ms-linear-gradient(90deg, #efa8b0, #a89cc8, #8cc9f0);
    background-image: linear-gradient(90deg, #efa8b0, #a89cc8, #8cc9f0);
    
}
h2:after{
    margin-left: 5em;
    margin-right: 5em;
    
}
h2:after{
    background-color: rgba(255, 255, 255, 0.35);
    
}
h2:after{
    display: block;
    content: '';
    width: 15.25em;
    height: 2px;
    margin: 2.7em 10em 2em 9em;
    border-radius: 65%;
    padding-left: 19em;
    
}
*, *:before, *:after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    
}
h2,p{position: center;
text-align: center;}
    </style>

</head>

<body background="background-image-html.jpg">
<table><th><button style="width:100px; height: 50px;opacity: 1;background-color:#795548;font-size: 10pt;color:#fff;border: solid 1px #000;border-radius: 20%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 1;background-color:#795548;font-size: 10pt;color:#fff;border: solid 1px #000;border-radius: 20%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 1;background-color:#795548;font-size: 10pt;color:#fff;border: solid 1px #000;border-radius: 20%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 1;background-color:#795548;font-size: 10pt;color:#fff;border: solid 1px #000;border-radius: 20%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 1;background-color:#795548;font-size: 10pt;color:#fff;border: solid 1px #000;border-radius: 20%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>
<center>
<table style="font-weight:bold;font-size:15pt; width: 70%;height: 25%;">
<tr><th>COMPANY NAME</th> <th>PERSON CONTACTED</th> <th>CONTACT NUMBER</th> <th>OUTCOME</th><th>SUBMIT DATE&TIME</th><th>DELETE</th><th>EDIT</th></tr>  
 
<?php  

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  

$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql = "SELECT *FROM industrial_visit_during_vacation WHERE dept='$dept'";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0)
{  


 while($row = mysqli_fetch_assoc($retval))
	 { 
	 	$id=$row['id'];
 echo '<tr>';
 echo '<td>'.$row['COMPANY_NAME'].'</td><td>'.$row['PERSON_CONTACTED'].'</td><td>'.$row['CONTACT_NUMBER'].'</td><td>'.$row['OUTCOME'].'</td><td>'.$row['SUBMIT_DATE'].'</td>';?><td><a href="delete_industrial_visit_during_vacation.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a></td><td><a href="edit_industrial_visit_during_vacation.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a></td><?php
echo '<tr>';
 
  }

}
?>
</table></center>
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