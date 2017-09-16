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
	$NAME_OF_THE_AGENCY=$_POST["NAME_OF_THE_AGENCY"];
$person_contacted=$_POST["person_contacted"];
$contact_number=$_POST["contact_number"];
$STATUS=$_POST["STATUS"];
session_start();
$message=$_POST["message"];
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
 
 $sql="UPDATE project_expo_participation_by_students SET NAME_OF_THE_AGENCY='$NAME_OF_THE_AGENCY',PERSON_CONTACTED='$person_contacted',CONTACT_NUMBER='$contact_number',STATUS='$STATUS',dept='$dept',userid='$userid' WHERE id='$id'";
if(mysqli_query($conn, $sql)){  
 header("Location:PROJECT_EXPO_PARTICIPATION_BY_STUDENTS.php");
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
<p style="font-size:30pt;color:pink;font-family=Regular;"> <b>PROJECT EXPO  PARTICIPATION BY STUDENTS</b></P></center>
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
$sql="SELECT *FROM project_expo_participation_by_students where id='$id'";
 $result_set=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
 	$NAME_OF_THE_AGENCY=$row['NAME_OF_THE_AGENCY'];
 	$person_contacted=$row['PERSON_CONTACTED'];
 	$contact_number=$row['CONTACT_NUMBER'];
 	$STATUS=$row['STATUS'];
 	
 	session_start();
	$dept=$_SESSION['dpet'];
	$userid=$_SESSION['myValue'];
	$id=rand();


?>

<form action=" " method="POST">
<center><fieldset>
<label ><span>NAME OF THE AGENCY: <span class="required"></span></span><input type="text" class="input-field" name="NAME_OF_THE_AGENCY" value="<?php echo "$NAME_OF_THE_AGENCY"; ?>" /></label>
<label for="field1"><span>PERSON CONTACTED: <span class="required"></span></span><input type="text" class="input-field" name="person_contacted" value="<?php echo "$person_contacted"; ?>" /></label>
<label for="field1"><span>CONTACT NUMBER: <span class="required"></span></span><input type="text" class="input-field" name="contact_number" value="<?php echo "$contact_number"; ?>" /></label>
<label for="field1"><span>STATUS: <span class="required"></span></span><input type="text" class="input-field" name="STATUS" value="<?php echo "$STATUS"; ?>" /></label>
<label><span>&nbsp;</span><input type="submit"  name="submit" value="Submit" id="inputid1" /></label>

</fieldset></center>
</form>
</div>
<?php
}
?>
</body>
</html>



