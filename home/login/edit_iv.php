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
$attend_by=$_POST["attend_by"];
$address=$_POST["address"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$date=$_POST['date'];
$message=$_POST["message"];
session_start();

$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
 
 $sql="UPDATE industry_visit SET company_name='$company_name',address='$address', email='$email',phone='$phone',attend_by='$attend_by',date='$date',  dept='$dept', userid='$userid' WHERE id='$id'";
if(mysqli_query($conn, $sql)){  
 header("Location:view.php");
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}
}  
 

?>

<html>
<head>
</head>
<body background=l.jpg>
<table><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>

<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";
$id=$_GET['id'];
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
$sql="SELECT *FROM industry_visit where id='$id'";
 $result_set=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
 	$company_name=$row['company_name'];

  	$address=$row['address'];
 	$email=$row['email'];
 	$phone=$row['phone'];
 	$attend_by=$row['attend_by'];
$date=$row['date'];
	$message=$row['message'];
 	session_start();
	$dept=$_SESSION['dpet'];
	$userid=$_SESSION['myValue'];


?>


<link rel="stylesheet" href="rose.css">
<div class="form-style-3"><center>
<p style="font-size:20pt;color:blue;"> <b>Industry visit</b></P></center>
<form action="" method="POST">
<fieldset><legend>Personal</legend>
<label for="field1"><span>Name Of Company: <span class="required"></span></span><input type="text" class="input-field" name="company_name" value="<?php echo "$company_name"; ?>" /></label>
<label for="field1"><span>Address: <span class="required"></span></span><input type="text" class="input-field" name="address" value="<?php echo "$address"; ?>" /></label>
<label for="field2"><span>Email: <span class="required"></span></span><input type="email" class="input-field" name="email" value=" <?php echo "$email"; ?>" /></label>
<label for="field3"><span>Phone:<span class="required"></span></span><input type="number" class="input-field" name="phone" value="<?php echo "$phone"; ?>" /></label>
<label for="field1"><span>Training Attended By: <span class="required"></span></span><input type="text" class="input-field" name="attend_by" value="<?php echo "$attend_by"; ?>" /></label>
<label for="field1"><span>Date:<span class="required"></span></span><input type="date" class="input-field" name="date" value="<?php echo "$date"; ?>" /></label>
<fieldset><legend>Message</legend>
<label for="field6"><span>Message <span class="required"></span></span><textarea name="message" value="<?php echo "$message";?>" class="textarea-field"></textarea></label>
<label><span>&nbsp;</span><input type="submit" value="Submit" name="submit" /></label>
</fieldset>
</form>
</div>
<?php
}
?>
</body>
</html>
