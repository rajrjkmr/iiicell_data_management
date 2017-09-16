<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";
$id=$_GET['id'];


$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	if(isset($_POST['submit']))
{    
	$company_name=$_POST["company_name"];
$person_contacted=$_POST["person_contacted"];
$contact_number=$_POST["contact_number"];
$outcome=$_POST["outcome"];
session_start();
$message=$_POST["message"];
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
 
 $sql="UPDATE student_projects_in_industry SET NAME_OF_THE_COMPANY='$company_name',PERSON_CONTACTED='$person_contacted',CONTACT_NUMBER='$contact_number',OUTCOME='$outcome',dept='$dept',userid='$userid' WHERE id='$id'";
if(mysqli_query($conn, $sql)){  
 header("Location:STUDENT_PROJECTS_IN_INDUSTRY.php");
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}
}  
 
else
	// echo "File Not Upload";
?>

<html>
<head>
</head>
 

<body background="l.jpg"><table><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>


<link rel="stylesheet" href="rose.css">
<div class="form-style-3"><center>
<p style="font-size:30pt;color:pink;font-family=Regular;"> <b>INPLANT TRAINING </b></P></center>
<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";
$id=$_GET['id'];
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT *FROM student_projects_in_industry where ID='$id'";
 $result_set=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
 	$company_name=$row['NAME_OF_THE_COMPANY'];
 	$person_contacted=$row['PERSON_CONTACTED'];
 	$contact_number=$row['CONTACT_NUMBER'];
 	$outcome=$row['OUTCOME'];
 	
 	session_start();
	$dept=$_SESSION['dpet'];
	$userid=$_SESSION['myValue'];
	$id=rand();


?>

<form action=" " method="POST">
<center><fieldset>
<label ><span>NAME OF THE COMPANY: <span class="required"></span></span><input type="text" class="input-field" name="company_name" value="<?php echo "$company_name"; ?>" /></label>
<label for="field1"><span>PERSON CONTACTED: <span class="required"></span></span><input type="text" class="input-field" name="person_contacted" value="<?php echo "$person_contacted"; ?>" /></label>
<label for="field1"><span>CONTACT NUMBER: <span class="required"></span></span><input type="text" class="input-field" name="contact_number" value="<?php echo "$contact_number"; ?>" /></label>
<label for="field1"><span>OUTCOME: <span class="required"></span></span><input type="text" class="input-field" name="outcome" value="<?php echo "$outcome"; ?>" /></label>
<label><span>&nbsp;</span><input type="submit"  name="submit" value="Submit" id="inputid1" /></label>

</fieldset></center>
</form>
</div>
<?php
}
?>
</body>
</html>



