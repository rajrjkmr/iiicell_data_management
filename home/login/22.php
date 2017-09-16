<?php 
header('Content-Type: application/vnd.ms-excel'); 
header('Content-Disposition: attachment;filename="results.xls"');   

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  
$start=$_POST['start'];
$end=$_POST['end'];

$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}
$sql = "SELECT `person_name`, `cname`, `designation_name`, `topic`, `target_attended`, `email`, `phone`, `date`, `submit_date`, `dept`, `userid`, `id` FROM `gust_lechure` WHERE date BETWEEN '$start' AND '$end'";
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0)
{  
    $no=1;

   echo "\t\t\t\t GUEST LECTURES \n\n";
    echo "S_NO\t"."NAME OF PERSON\t"."COLLEGE (OR) COMPANY\t"."DESIGNATION\t"."TOPICS\t"."TARGET ATTENDED\t"."PHONE\t"."EMAIL\t"."DATE\t"."SUMBIT DATE "."\n" ;
 while($row = mysqli_fetch_assoc($retval))
     { 
        $person=$row['person_name'];
        
        $c=$row['cname'];
        $e=$row['designation_name'];
        $t=$row['topic'];
        $t_a=$row['target_attended'];
        $email=$row['email'];
        $p=$row['phone'];
        $date=$row['date'];
        $s=$row['submit_date'];
        
        
 echo $no. "\t".$person. "\t" .$c. "\t" .$e. "\t" .$t. "\t" .$t_a. "\t" .$email. "\t" .$p. 
  "\t" .$date. "\t" .$s. "\n";



 $no=$no+1;
  }

}
?>