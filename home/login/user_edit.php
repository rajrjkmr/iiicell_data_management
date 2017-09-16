<?php
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">


</head>

<body>
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
$sql="SELECT *FROM login where id='$id'";
 $result_set=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
	 $id=$row['id'];
		$uname=$row['uname'];
		$pass=$row['pass'];
		$repass=$row['repass'];
		$dept=$row['dept'];
		
	 ?>
  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>EDIT Form</h1>
</div>
<div class="rerun"><a href="home.html">HOME</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">EDIT FORM</h1>
    <form action="reg.php" method="POST">
      <div class="input-container">
        <input type="number"  name="id" required="required" value="<?php echo $id;?>"/>
        <label for="#{label}">Staff Id</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <select name="dept" style="width:100%;height:6%;" value="<?php echo $id;?> required="required">
		<option>DEPT ID</option>
		<option value="1">CSE</option>
		<option value="2">ECE</option>
		<option value="3">EEE</option>
		<option value="4">CIVIL</option>
		<option value="5">MECH</option>
		<option value="6">MBA</option>
		</select>
        
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text"  name="uname" required="required" value="<?php echo $uname;?>"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text"  name="password" required="required" value="<?php echo $pass;?>"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text"  name="rpassword" required="required" value="<?php echo $repass;?>"/>
        <label for="#{label}">Repeat Password</label>
        <div class="bar"></div>
      </div>
         <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
  <div class="card alt">
    
    
  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
	<?php
}
?>

</body>
</html>
