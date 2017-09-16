<?php
$servername = "localhost";
$username = "raj";
$spassword = "raj";
$db="ifet";
session_start();
 $select=$_SESSION['myValue'];
$conn = mysqli_connect($servername, $username, $spassword,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT dept FROM login WHERE id='$select' ";
 $result_set=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
    $dept=$row['dept'];
}
$_SESSION['dpet']=$dept;
$admin=102175;
if ($select==$admin) {
  echo "$select";
  ?>  
<!DOCTYPE html>
<html>
<head><center><h1 style="font-size: 60pt;color: white;font-family:fort;">Industry Institution Interaction Cell
          </h1></center>
  <title></title>
</head>


  <body background="header.jpg">
    
     <pre> <button style="width: 300px; height: 300px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button>                                 <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button>                                                 <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='login.php'">REGISTER</button>      
        <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button>                                          <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button>                       <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button>                          
                               <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button> 
      
      


</pre>
</body>                                                                          


        
<?php }

else 
{ ?>
<!DOCTYPE html>
<html>
<head><center><h1 style="font-size: 60pt;color: white;font-family:fort;">Industry Institution Interaction Cell
          </h1></center>
  <title></title>
</head>

<body background="header.jpg">
    
     <pre> <button style="width: 300px; height: 300px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button>                                 <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button>                                                 <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='login.php'">REGISTER</button>      
        <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button>                                          <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button>                       <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button>                          
                               
      
      


</pre>
</body>                                  


  
<?php }
 ?>

