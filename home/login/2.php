<?php 
// header('Content-Type: application/vnd.ms-excel'); 
// header('Content-Disposition: attachment;filename="results.xls"');   

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  


$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}

if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
            echo "$check,"; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    }
}

?>