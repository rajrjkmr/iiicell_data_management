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
	$COMPANY_NAME=$_POST["COMPANY_NAME"];
$person_contacted=$_POST["person_contacted"];
$contact_number=$_POST["contact_number"];
$CURRENT_STATUS=$_POST["CURRENT_STATUS"];
session_start();
$message=$_POST["message"];
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
 
 $sql="UPDATE ainternship SET COMPANY_NAME='$COMPANY_NAME',PERSON_CONTACTED='$person_contacted',CONTACT_NUMBER='$contact_number',CURRENT_STATUS='$CURRENT_STATUS',dept='$dept',userid='$userid' WHERE id='$id'";
if(mysqli_query($conn, $sql)){  
 header("Location:INTERNSHIP.php");
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
<p style="font-size:30pt;color:pink;font-family=Regular;"> <b>INTERNSHIP </b></P></center>
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
$sql="SELECT *FROM ainternship where id='$id'";
 $result_set=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
 	$COMPANY_NAME=$row['COMPANY_NAME'];
 	$person_contacted=$row['PERSON_CONTACTED'];
 	$contact_number=$row['CONTACT_NUMBER'];
 	$CURRENT_STATUS=$row['CURRENT_STATUS'];
 	
 	session_start();
	$dept=$_SESSION['dpet'];
	$userid=$_SESSION['myValue'];
	$id=rand();


?>

<form action=" " method="POST">
<center><fieldset>
<label ><span>COMPANY NAME: <span class="required"></span></span><input type="text" class="input-field" name="COMPANY_NAME" value="<?php echo "$COMPANY_NAME"; ?>" /></label>
<label for="field1"><span>PERSON CONTACTED: <span class="required"></span></span><input type="text" class="input-field" name="person_contacted" value="<?php echo "$person_contacted"; ?>" /></label>
<label for="field1"><span>CONTACT NUMBER: <span class="required"></span></span><input type="text" class="input-field" name="contact_number" value="<?php echo "$contact_number"; ?>" /></label>
<label for="field1"><span>CURRENT_STATUS: <span class="required"></span></span><input type="text" class="input-field" name="CURRENT_STATUS" value="<?php echo "$CURRENT_STATUS"; ?>" /></label>
<label><span>&nbsp;</span><input type="submit"  name="submit" value="Submit" id="inputid1" /></label>

</fieldset></center>
</form>
</div>
<?php
}
?>
</body>
</html>



