<?php
$servername = "localhost";
$username = "raj";
$spassword = "raj";
$db="ifet";
session_start();
 $select=$_SESSION['myValue'];
 if (isset($select)) {
   # code...

$conn = mysqli_connect($servername, $username, $spassword,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT dept FROM login WHERE id='$select' ";
 $user_result=mysqli_query($conn,"SELECT *FROM login");
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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<center><h1 style="font-size: 60pt;color: white;font-family:fort;">Industry Institution Interaction Cell
          </h1></center>
  <title></title>
<style type="text/css">
  .li{text-decoration: none!important;}
</style>
</head>

<body background="header.jpg">
    
                                    <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 15%;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">VIEW ALL</button>  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <!--     <h4 class="modal-title">Modal Header</h4> -->
        </div>
        <div class="modal-body" style="font-size: 30pt; text-decoration: none;">
        <ul >
        <li class="dropdown" ><button style="width:100%; height: 15% ;font-size:.8em;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Normal Activity
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%; font-size:.8em;">
      <li><a class="li" href="view_all_it.php">INPLANT TRAINING</a></li>
          <li><a class="li" href="view_all_gl.php">GUEST LECTURES</a></li>
          <li><a class="li" href="view_all_iv.php">INDUSTRIAL VISIT </a></li>
          <li><a class="li" href="view_all_is.php">INTERNSHIP</a></li>
    </ul>
    </li><br><br><li class="dropdown" ><button style="width:100%; height: 15% ;font-size:0.5em;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">IIIC ACTIVITIES FOR THE MONTH OF (mm/yy)<span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%; font-size:. 8em;">
      <li><a class="li" href="INPLANT_TRAINING.php">INPLANT TRAINING</a></li>
          <li><a class="li" href="INDUSTRIAL_VISIT_DURING_VACATION.php">INDUSTRIAL VISIT DURING VACATION</a></p></li>
          <li><a class="li" href="MOU.php"> MOU</a></li>
           <li><a class="li" href="CONSULTANCY_WORKS_BY_FACULTY_IN_INDUSTRY.php">CONSULTANCY WORKS BY FACULTY IN INDUSTRY</a></li>
            <li><a class="li" href="GUEST_LECTURES_BY_INDUSTRY.php">GUEST LECTURES BY INDUSTRY/ACADEMIC PROFESSIONALS</a></li>
             <li><a class="li" href="STUDENT_PROJECTS_IN_INDUSTRY.php">STUDENT PROJECTS IN INDUSTRY</a></li>
              <li><a class="li" href="PROJECT_EXPO_PARTICIPATION_BY_STUDENTS.php">PROJECT EXPO  PARTICIPATION BY STUDENTS</a></li>
               <li><a class="li" href="AWARDS_FOR_STUDENTS_FOR_PROJECTS.php">AWARDS FOR STUDENTS FOR PROJECTS</a></li>
                <li><a class="li" href="INTERNSHIP.php">INTERNSHIP </a></li>
                 <li><a class="li" href="RANKING_OF_THE_INSTITUTION.php">RANKING OF THE INSTITUTION</a></li>
                  <li><a class="li" href="AWARDS_FOR_INSTITUTION.php">AWARDS FOR  INSTITUTION</a></li>
    </ul>
    </li>
          
          
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>                                                   
        <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 15%;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" >INSERT</button> <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">INSERT A DATA</h4>
        </div>
        <div class="modal-body" style="font-size: 30pt; text-decoration: none;">
        <ul >
        <li class="dropdown" ><button style="width:100%; height: 15% ;font-size:.8em;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Normal Activity
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%; font-size:.8em;">
      <li><a class="li" href="insert_it.php">INPLANT TRAINING</a></li>
          <li><a class="li" href="insert_gl.php">GUEST LECTURES</a></li>
          <li><a class="li" href="insert_iv.php">INDUSTRIAL VISIT </a></li>
          <li><a class="li" href="insert_is.php">INTERNSHIP</a></li>
    </ul>
    </li><br><br><li class="dropdown" ><button style="width:100%; height: 15% ;font-size:0.5em;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">IIIC ACTIVITIES FOR THE MONTH OF (mm/yy)<span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%; font-size:. 8em;">
      <li><a class="li" href="INPLANT_TRAINING.html">INPLANT TRAINING</a></li>
          <li><a class="li" href="INDUSTRIAL_VISIT_DURING_VACATION.html">INDUSTRIAL VISIT DURING VACATION</a></p></li>
          <li><a class="li" href="MOU.html"> MOU</a></li>
           <li><a class="li" href="CONSULTANCY_WORKS_BY_FACULTY_IN_INDUSTRY.html">CONSULTANCY WORKS BY FACULTY IN INDUSTRY</a></li>
            <li><a class="li" href="GUEST_LECTURES_BY_INDUSTRY.html">GUEST LECTURES BY INDUSTRY/ACADEMIC PROFESSIONALS</a></li>
             <li><a class="li" href="STUDENT_PROJECTS_IN_INDUSTRY.html">STUDENT PROJECTS IN INDUSTRY</a></li>
              <li><a class="li" href="PROJECT_EXPO_PARTICIPATION_BY_STUDENTS.html">PROJECT EXPO  PARTICIPATION BY STUDENTS</a></li>
               <li><a class="li" href="AWARDS_FOR_STUDENTS_FOR_PROJECTS.html">AWARDS FOR STUDENTS FOR PROJECTS</a></li>
                <li><a class="li" href="INTERNSHIP.html">INTERNSHIP </a></li>
                 <li><a class="li" href="RANKING_OF_THE_INSTITUTION.html">RANKING OF THE INSTITUTION</a></li>
                  <li><a class="li" href="AWARDS_FOR_INSTITUTION.html">AWARDS FOR  INSTITUTION</a></li>
    </ul>
    </li>
          
          
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>     
  <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 15%;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" >REPORT</button> <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="height: 400px; width: 900px;" >
        <div class="modal-header" style="height: 100px;">
          <button type="button" class="close" data-dismiss="modal" style="height: 100px;">&times;</button>
          <h4 class="modal-title">REPORT GENERATED</h4>
        </div>
        <div class="modal-body" style="font-size: 30pt; text-decoration: none;">
        <ul >
        <li class="dropdown"><button style="width:100%; height: 20% ;font-size:0.9em;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">IIIC ACTIVITIES FOR THE MONTH OF (mm/yy)<span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%; font-size:. 8em;">
      <li class="li" style="width:100%; height: 60% ;font-size:2em;"><table><form action="report.php" method="POST">  
        <tr style="font-size: 3rem"><th style="font-size: 3rem">Start Date</th><th width="40%">Ending Date</th><th width="40%">UserId</th></tr>
        <tr ><th width="40%"><input  style="font-size: 3rem" type="date" name="start"></th><th width="40%"><input  style="font-size: 3rem" type="date" name="end"></th><th width="40%"><select name="drop"  style="font-size: 3rem">
  <?php
while ($row = $user_result->fetch_assoc()) 
{ 
  
  $company_name = $row['id'];
  ?>
  <?php
   echo '<option  style="width: 60px; height:7% value="'.$company_name.'">'.$company_name.'</option>'; ?>
  <?php
  }
  ?>
  </select></th><th><input style="font-size: 3rem"  type="submit" name="" value="Submit"></th> </tr>
     </form> </table></li>
          
    </ul>
    </li>
          
          
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 15%;" onclick="window.location.href='user_details.php'">USER_DETAILS</button>     <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 15%;" onclick="window.location.href='view.php'">VIEW</button>                       <button style="width: 300px; height: 300px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 15%;" onclick="window.location.href='logout.php'">LOGOUT</button>                          
                               
      
      


</pre>
</body>


        
<?php }

else 
{ ?>
<!DOCTYPE html>
<html>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<center><h1 style="font-size: 60pt;color: white;font-family:fort;">Industry Institution Interaction Cell
          </h1></center>
  <title></title>
<style type="text/css">
  .li{text-decoration: none!important;}
</style>
</head>

<body background="header.jpg">
    
                                    <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">VIEW ALL</button>  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <!--     <h4 class="modal-title">Modal Header</h4> -->
        </div>
        <div class="modal-body" style="font-size: 30pt; text-decoration: none;">
        <ul >
        <li class="dropdown" ><button style="width:100%; height: 100% ;font-size:.8em;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Normal Activity
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%; font-size:.8em;">
      <li><a class="li" href="view_all_it.php">INPLANT TRAINING</a></li>
          <li><a class="li" href="view_all_gl.php">GUEST LECTURES</a></li>
          <li><a class="li" href="view_all_iv.php">INDUSTRIAL VISIT </a></li>
          <li><a class="li" href="view_all_is.php">INTERNSHIP</a></li>
    </ul>
    </li><br><br><li class="dropdown" ><button style="width:100%; height: 100% ;font-size:0.5em;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">IIIC ACTIVITIES FOR THE MONTH OF (mm/yy)<span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%; font-size:. 8em;">
      <li><a class="li" href="INPLANT_TRAINING.php">INPLANT TRAINING</a></li>
          <li><a class="li" href="INDUSTRIAL_VISIT_DURING_VACATION.php">INDUSTRIAL VISIT DURING VACATION</a></p></li>
          <li><a class="li" href="MOU.php"> MOU</a></li>
           <li><a class="li" href="CONSULTANCY_WORKS_BY_FACULTY_IN_INDUSTRY.php">CONSULTANCY WORKS BY FACULTY IN INDUSTRY</a></li>
            <li><a class="li" href="GUEST_LECTURES_BY_INDUSTRY.php">GUEST LECTURES BY INDUSTRY/ACADEMIC PROFESSIONALS</a></li>
             <li><a class="li" href="STUDENT_PROJECTS_IN_INDUSTRY.php">STUDENT PROJECTS IN INDUSTRY</a></li>
              <li><a class="li" href="PROJECT_EXPO_PARTICIPATION_BY_STUDENTS.php">PROJECT EXPO  PARTICIPATION BY STUDENTS</a></li>
               <li><a class="li" href="AWARDS_FOR_STUDENTS_FOR_PROJECTS.php">AWARDS FOR STUDENTS FOR PROJECTS</a></li>
                <li><a class="li" href="INTERNSHIP.php">INTERNSHIP </a></li>
                 <li><a class="li" href="RANKING_OF_THE_INSTITUTION.php">RANKING OF THE INSTITUTION</a></li>
                  <li><a class="li" href="AWARDS_FOR_INSTITUTION.php">AWARDS FOR  INSTITUTION</a></li>
    </ul>
    </li>
          
          
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>                                                   
        <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" >INSERT</button> <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">INSERT A DATA</h4>
        </div>
        <div class="modal-body" style="font-size: 30pt; text-decoration: none;">
        <ul >
        <li class="dropdown" ><button style="width:100%; height: 100% ;font-size:.8em;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Normal Activity
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%; font-size:.8em;">
      <li><a class="li" href="insert_it.php">INPLANT TRAINING Insert</a></li>
          <li><a class="li" href="insert_gl.php">GUEST LECTURES</a></li>
          <li><a class="li" href="insert_iv.php">INDUSTRIAL VISIT </a></li>
          <li><a class="li" href="insert_is.php">INTERNSHIP</a></li>
    </ul>
    </li><br><br><li class="dropdown" ><button style="width:100%; height: 100% ;font-size:0.5em;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">IIIC ACTIVITIES FOR THE MONTH OF (mm/yy)<span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%; font-size:. 8em;">
      <li><a class="li" href="INPLANT_TRAINING.html">INPLANT TRAINING</a></li>
          <li><a class="li" href="INDUSTRIAL_VISIT_DURING_VACATION.html">INDUSTRIAL VISIT DURING VACATION</a></p></li>
          <li><a class="li" href="MOU.html"> MOU</a></li>
           <li><a class="li" href="CONSULTANCY_WORKS_BY_FACULTY_IN_INDUSTRY.html">CONSULTANCY WORKS BY FACULTY IN INDUSTRY</a></li>
            <li><a class="li" href="GUEST_LECTURES_BY_INDUSTRY.html">GUEST LECTURES BY INDUSTRY/ACADEMIC PROFESSIONALS</a></li>
             <li><a class="li" href="STUDENT_PROJECTS_IN_INDUSTRY.html">STUDENT PROJECTS IN INDUSTRY</a></li>
              <li><a class="li" href="PROJECT_EXPO_PARTICIPATION_BY_STUDENTS.html">PROJECT EXPO  PARTICIPATION BY STUDENTS</a></li>
               <li><a class="li" href="AWARDS_FOR_STUDENTS_FOR_PROJECTS.html">AWARDS FOR STUDENTS FOR PROJECTS</a></li>
                <li><a class="li" href="INTERNSHIP.html">INTERNSHIP </a></li>
                 <li><a class="li" href="RANKING_OF_THE_INSTITUTION.html">RANKING OF THE INSTITUTION</a></li>
                  <li><a class="li" href="AWARDS_FOR_INSTITUTION.html">AWARDS FOR  INSTITUTION</a></li>
    </ul>
    </li>
          
          
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>                                          <button style="width: 200px; height: 200px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button>                       <button style="width: 300px; height: 300px;opacity: 0.5;background-color:black;font-size: 20pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button>                          
                               
      
      


</pre>
</body>                                  


  
<?php }
}
else
{
  header("location:login.php");
 }
 ?>


