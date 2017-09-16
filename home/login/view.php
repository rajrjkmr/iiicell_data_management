<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";
session_start();
$dept=$_SESSION['dpet'];
$userid=$_SESSION['myValue'];
if (isset($userid)) {
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($userid==102175) {

	$result = $conn->query("select company_name from implant_training");
$result_gl = $conn->query("select cname from gust_lechure");
$result_is = $conn->query("select company_name from indernship");
$result_iv = $conn->query("select company_name from industry_visit");
	
}
else
{
$result = $conn->query("select company_name from implant_training WHERE dept='$dept'");
$result_gl = $conn->query("select cname from gust_lechure WHERE dept='$dept'");
$result_is = $conn->query("select company_name from indernship WHERE dept='$dept'");
$result_iv = $conn->query("select company_name from industry_visit WHERE dept='$dept'");
}
?>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">

    <title>iii cell</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/custom-animations.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <head>
  <title>iii cell</title>
  </head>

  <body>

	<! -- ********** HEADER ********** -->
	<div id="h">
		<div class="container">
			<div class="row">
			<table>
				<tr>
					<th><button onclick="window.location.href='insert.php'" class="btn btn-lg btn-info btn-register">INSERT</button></th><th><button onclick="window.location.href='view.php'" class="btn btn-lg btn-info btn-register">VIEW</button></th><th><button onclick="window.location.href='viewall.php'" class="btn btn-lg btn-info btn-register">VIEW ALL</button></th><th><!-- <button onclick="window.location.href='user_details.php'" class="btn btn-lg btn-info btn-register">USER DETAILS</button> --></th><th><button onclick="window.location.href='logout.php'" class="btn btn-lg btn-info btn-register">LOGOUT</button></th>
				</tr>
			</table>
			    <div class="col-md-10 col-md-offset-1 mt">
			    	
			    	<h1 class="mb">INDUSTRY INSTITUTE INTERACTION CELL
</h1>
			    </div>
			    
			</div>
			<div><center>
			<ul style="list-style-type:disc">
			<li style="color:#CD391A;
    text-decoration:none;
    cursor:pointer;
    font-size: 50pt;">
			    		INPLANT TRAINING
			    	</li><form action="view_it.php" method="post">
	<select name="drop"  style="width:300px;background-color: #786D6B; opacity: 0.7;font-size: 17pt; border: none; color: white; height: 40;" >
	<?php
while ($row = $result->fetch_assoc()) 
{	
	
	$company_name = $row['company_name'];
	?>
	<?php
	 echo '<option  style="width: 100px;" value="'.$company_name.'">'.$company_name.'</option>'; ?>
	<?php
	}
	?>
	</select>&nbsp;
<button type="submit" style="background-color: #4CAF50;color: white;padding: 15px 32px; text-align: center;text-decoration: none;
    display: inline-block;
    font-size: 16px;">Go</button>
      </form><br><br><br>
			    	<li style="color:#CD391A;
    text-decoration:none;
    cursor:pointer;
    font-size: 50pt;">
			    	GUEST LECTURES
			    	</li>
			    	<form action="view_gl.php" method="post">
	<select name="drop"  style="width: 250px;background-color: #786D6B;color: white;opacity: 0.7;border: none;font-size: 15pt; border: none; height: 40;" >
	<?php
while ($row = $result_gl->fetch_assoc()) 
{	
	
	$cname = $row['cname'];
	?>
	<?php
	 echo '<option  style="width: 50px;" value="'.$cname.'">'.$cname.'</option>'; ?>
	<?php
	}
	?>
	</select>&nbsp;
<button type="submit" style="background-color: #4CAF50;color: white;padding: 15px 32px;text-align: center;text-decoration: none;
    display: inline-block;
    font-size: 16px;">Go</button>
      </form><br><br><br>
			    	<li style="color:#CD391A;
    text-decoration:none;
    cursor:pointer;
    font-size: 50pt;"> 
			    	INDUSTRY VISIT 
			    	</li>
<form action="view_iv.php" method="post">
	<select name="drop"  style="width: 250px;background-color: #786D6B;opacity: 0.7;border: none; font-size: 15pt; border: none;color: white; height: 40;" >
	<?php
while ($row = $result_iv->fetch_assoc()) 
{	
	
	$company_name = $row['company_name'];
	?>
	<?php
	 echo '<option  style="width: 50px;" value="'.$company_name.'">'.$company_name.'</option>'; ?>
	<?php
	}
	?>
	</select>&nbsp;
<button type="submit" style="background-color: #4CAF50; border: none;color: white;padding: 15px 32px; font-size: 15pt;text-align: center;text-decoration: none;
    display: inline-block;
    font-size: 16px;">Go</button>
      </form><br><br><br>			    	
			    	<li style="color:#CD391A;
    text-decoration:none;
    cursor:pointer;
    font-size: 50pt;">
			    		INTERNSHIP
			    	<form action="view_is.php" method="post">
	<select name="drop"  style="width: 250px;background-color: #786D6B;opacity: 0.7;font-size: 17pt; border: none;color: white; height: 40;" >
	<?php
while ($row = $result_is->fetch_assoc()) 
{	
	
	$company_name = $row['company_name'];
	?>
	<?php
	 echo '<option  style="width: 50px;" value="'.$company_name.'">'.$company_name.'</option>'; ?>
	<?php
	}
}
else
{
	header("location:login.php");
}
	?>
	</select>&nbsp;
<button type="submit" style="background-color: #4CAF50; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;
    display: inline-block;
    font-size: 16px;">Go</button>
      </form><br><br><br>
			    	</li>
			    	
			    	</ul>
			    	</center>
			    </div>
		</div><! --/container -->
	</div><! --/h -->
	
	
	<! -- ********** FOOTER ********** -->
	

	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina-1.1.0.js"></script>
    <script src="assets/js/jquery.unveilEffects.js"></script>
  </body>
</html>
