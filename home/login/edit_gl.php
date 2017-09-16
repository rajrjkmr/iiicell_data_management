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
	$person_name=$_POST["person_name"];
$cname=$_POST["cname"];
$designation_name=$_POST["designation_name"];
$topic=$_POST["topic"];
$target_attended=$_POST["target_attended"];
$address=$_POST["address"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$date=$_POST["date"];
session_start();
$message=$_POST["message"];
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
 
 $sql="UPDATE gust_lechure SET person_name='$person_name',cname='$cname',designation_name='$designation_name',topic='$topic',target_attended='$target_attended',email='$email',phone='$phone',date='$date', dept='$dept',userid='$userid' WHERE id='$id'";
if(mysqli_query($conn, $sql)){  
 header("Location:view.php");
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}
}  
 
else
	echo "File Not Upload";
?>

<html>
<head>
</head>
 

<body background="l.jpg"><table><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>


<link rel="stylesheet" href="rose.css">
<div class="form-style-3"><center>
<p style="font-size:30pt;color:pink;font-family=Regular;"> <b>GUEST LECTURE </b></P></center>
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
$sql="SELECT *FROM gust_lechure where id='$id'";
 $result_set=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
 	$person_name=$row['person_name'];
 	$cname=$row['cname'];
 	$designation_name=$row['designation_name'];
 	$topic=$row['topic'];
 	$target_attended=$row['target_attended'];
 	$address=$row['address'];
 	$email=$row['email'];
 	$phone=$row['phone'];
 	$date=$row['date'];
 	$message=$row['message'];
 	session_start();
	$dept=$_SESSION['dpet'];
	$userid=$_SESSION['myValue'];
	$id=rand();


?>

<form action=" " method="POST">
<center><fieldset>
<label ><span>Name Of Person: <span class="required"></span></span><input type="text" class="input-field" name="person_name" value="<?php echo "$person_name"; ?>" /></label>
<label for="field1"><span>College (or) Company: <span class="required"></span></span><input type="text" class="input-field" name="cname" value="<?php echo "$cname"; ?>" /></label>
<label for="field1"><span>Designation: <span class="required"></span></span><input type="text" class="input-field" name="designation_name" value="<?php echo "$designation_name"; ?>" /></label>
<label for="field1"><span>Topics: <span class="required"></span></span><input type="text" class="input-field" name="topic" value="<?php echo "$topic"; ?>" /></label>
<label for="field1"><span>Target Attended: <span class="required"></span></span><input type="text" class="input-field" name="target_attended" value="<?php echo "$target_attended"; ?>" /></label>
<label for="field2"><span>Email: <span class="required"></span></span><input type="email" class="input-field" name="email" value="<?php echo "$email"; ?>" /></label>
<label for="field1"><span>Phone:<span class="required"></span></span><input type="number" class="input-field" name="phone" value="<?php echo "$phone"; ?>" /></label>

<label for="field1"><span>Date:<span class="required"></span></span><input type="date" class="input-field" name="date" value="<?php echo "$date"; ?>" /></label>
</fieldset>
<fieldset><legend>Message</legend>
<label for="field6"><span>Message <span class="required"></span></span><textarea name="message" class="textarea-field" value="<?php echo "$message"; ?>"></textarea></label>
<label><span>&nbsp;</span><input type="submit"  name="submit" value="Submit" id="inputid1" /></label>
</fieldset></center>
</form>
</div>
<?php
}
?>
</body>
</html>



