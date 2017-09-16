<?php 
header('Content-Type: application/vnd.ms-excel'); 
header('Content-Disposition: attachment;filename="results.xls"');   

$servername = "localhost";
$username = "raj";
$password = "raj";
$db="ifet";  
$start=$_POST['start'];
$end=$_POST['end'];
$drop=$_POST['drop'];

$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}


echo "IFET COLLEGE OF ENGINEERING\n";
echo " I I I C ACTIVITIES FOR THE MONTH OF (mm/yy)\n";
// INPLANT TRAINING

$sql_inp = "SELECT `COMPANY_NAME`, `PERSON_CONTACTED`, `CONTACT_NUMBER`, `OUTCOME`, `SUBMIT_DATE`, `DEPT`, `USERID`, `ID` FROM `inplant_training` WHERE USERID='$drop' AND SUBMIT_DATE BETWEEN '$start' AND '$end'";
$retval_inp=mysqli_query($conn, $sql_inp);
if(mysqli_num_rows($retval_inp) > 0)

{  
    $no=1;

   echo "1.INPLANT TRAINING \n";
    echo "S.NO\t"."COMPANY NAME\t"."PERSON CONTACTED\t"."CONTACT NUMBER\t"."OUTCOME"."\n";
 while($row = mysqli_fetch_assoc($retval_inp))
     { 
      
 
 echo $no. "\t".$row['COMPANY_NAME']. "\t" .$row['PERSON_CONTACTED']. "\t" .$row['CONTACT_NUMBER']. "\t" .$row['OUTCOME']."\n";



 $no=$no+1;
  }
  echo "\n\n";

}

//INDUSTRIAL VISIT DURING VACATION

$sql_ivdv = "SELECT `COMPANY_NAME`, `PERSON_CONTACTED`, `CONTACT_NUMBER`, `OUTCOME`, `SUBMIT_DATE`, `DEPT`, `USERID`, `id` FROM `industrial_visit_during_vacation` WHERE USERID='$drop' AND SUBMIT_DATE BETWEEN '$start' AND '$end'";
$retval_ivdv=mysqli_query($conn, $sql_ivdv);
if(mysqli_num_rows($retval_ivdv) > 0)

{  
    $no=1;

   echo "2.INDUSTRIAL VISIT DURING VACATION \n";
    echo "S.NO\t"."COMPANY NAME\t"."PERSON CONTACTED\t"."CONTACT NUMBER\t"."OUTCOME"."\n";
 while($row = mysqli_fetch_assoc($retval_ivdv))
     { 
      
 
 echo $no. "\t".$row['COMPANY_NAME']. "\t" .$row['PERSON_CONTACTED']. "\t" .$row['CONTACT_NUMBER']. "\t" .$row['OUTCOME']."\n";



 $no=$no+1;
  }
  echo "\n\n";

}
# MOU

$sql_mov= "SELECT `NAME_OF_THE_ORGANISATION`, `PERSON_CONTACTED`, `CONTACT_NUMBER`, `STATUS`, `submit_date`, `dept`, `userid`, `id` FROM `mov` WHERE userid='$drop' AND submit_date BETWEEN '$start' AND '$end'";
$retval_mov=mysqli_query($conn, $sql_mov);
if(mysqli_num_rows($retval_mov) > 0)

{  
    $no=1;

   echo "3.MOV \n";
    echo "S.NO\t"."NAME OF THE ORGANISATION\t"."PERSON CONTACTED\t"."CONTACT NUMBER\t"."STATUS"."\n";
 while($row = mysqli_fetch_assoc($retval_mov))
     { 
      
 
 echo $no. "\t".$row['NAME_OF_THE_ORGANISATION']. "\t" .$row['PERSON_CONTACTED']. "\t" .$row['CONTACT_NUMBER']. "\t" .$row['STATUS']."\n";



 $no=$no+1;
  }
  echo "\n\n";

}
#CONSULTANCY WORKS BY FACULTY IN INDUSTRY
$sql_cwbf= "SELECT `COMPANY_NAME`, `PERSON_CONTACTED`, `CONTACT_NUMBER`, `CURRENT_STATUS`, `submit_date`, `dept`, `userid`, `id` FROM `consultancy_works_by_faculty_in_industry` WHERE userid='$drop' AND submit_date BETWEEN '$start' AND '$end'";
$retval_cwbf=mysqli_query($conn, $sql_cwbf);
if(mysqli_num_rows($retval_cwbf) > 0)

{  
    $no=1;

   echo "4.CONSULTANCY WORKS BY FACULTY IN INDUSTRY\n";
    echo "S.NO\t"."COMPANY NAME\t"."PERSON CONTACTED\t"."CONTACT NUMBER\t"."CURRENT STATUS"."\n";
 while($row = mysqli_fetch_assoc($retval_cwbf))
     { 
      
 
 echo $no. "\t".$row['COMPANY_NAME']. "\t" .$row['PERSON_CONTACTED']. "\t" .$row['CONTACT_NUMBER']. "\t" .$row['CURRENT_STATUS']."\n";



 $no=$no+1;
  }
  echo "\n\n";

}


#GUEST LECTURES BY INDUSTRY/ACADEMIC PROFESSIONALS

$sql_glb= "SELECT `NAME_OF_THE_ORGANISATION`, `PERSON_CONTACTED`, `CONTACT_NUMBER`, `OUTCOME`, `submit_date`, `dept`, `userid`, `id` FROM `guest_lectures_by_industry` WHERE userid='$drop' AND submit_date BETWEEN '$start' AND '$end'";
$retval_glb=mysqli_query($conn, $sql_glb);
if(mysqli_num_rows($retval_glb) > 0)

{  
    $no=1;

   echo "5.GUEST LECTURES BY INDUSTRY/ACADEMIC PROFESSIONALS\n";
    echo "S.NO\t"."NAME OF THE ORGANISATION\t"."PERSON CONTACTED\t"."CONTACT NUMBER\t"."OUTCOME"."\n";
 while($row = mysqli_fetch_assoc($retval_glb))
     { 
      
 
 echo $no. "\t".$row['NAME_OF_THE_ORGANISATION']. "\t" .$row['PERSON_CONTACTED']. "\t" .$row['CONTACT_NUMBER']. "\t" .$row['OUTCOME']."\n";



 $no=$no+1;
  }
  echo "\n\n";

}
# STUDENT PROJECTS IN INDUSTRY

$sql_spi= "SELECT `NAME_OF_THE_COMPANY`, `PERSON_CONTACTED`, `CONTACT_NUMBER`, `OUTCOME`, `submit_date`, `dept`, `userid`, `id` FROM `student_projects_in_industry` WHERE userid='$drop' AND submit_date BETWEEN '$start' AND '$end'";
$retval_spi=mysqli_query($conn, $sql_spi);
if(mysqli_num_rows($retval_spi) > 0)

{  
    $no=1;

   echo "6.STUDENT PROJECTS IN INDUSTRY\n";
    echo "S.NO\t"."NAME OF THE COMPANY\t"."PERSON CONTACTED\t"."CONTACT NUMBER\t"."OUTCOME"."\n";
 while($row = mysqli_fetch_assoc($retval_spi))
     { 
      
 
 echo $no. "\t".$row['NAME_OF_THE_COMPANY']. "\t" .$row['PERSON_CONTACTED']. "\t" .$row['CONTACT_NUMBER']. "\t" .$row['OUTCOME']."\n";



 $no=$no+1;
  }
  echo "\n\n";
}
#PROJECT EXPO  PARTICIPATION BY STUDENTS

$sql_pep= "SELECT `NAME_OF_THE_AGENCY`, `PERSON_CONTACTED`, `CONTACT_NUMBER`, `STATUS`, `submit_date`, `dept`, `userid`, `id` FROM `project_expo_participation_by_students` WHERE userid='$drop' AND submit_date BETWEEN '$start' AND '$end'";
$retval_pep=mysqli_query($conn, $sql_pep);
if(mysqli_num_rows($retval_pep) > 0)

{  
    $no=1;

   echo "7.PROJECT EXPO  PARTICIPATION BY STUDENTS\n";
    echo "S.NO\t"."NAME OF THE ORGANISATION\t"."PERSON CONTACTED\t"."CONTACT NUMBER\t"."STATUS"."\n";
 while($row = mysqli_fetch_assoc($retval_pep))
     { 
      
 
 echo $no. "\t".$row['NAME_OF_THE_AGENCY']. "\t" .$row['PERSON_CONTACTED']. "\t" .$row['CONTACT_NUMBER']. "\t" .$row['STATUS']."\n";



 $no=$no+1;
  }
  echo "\n\n";
}

#AWARDS FOR STUDENTS FOR PROJECTS

$sql_afs= "SELECT `NAME_OF_THE_ORGANISATION`, `PERSON_CONTACTED`, `CONTACT_NUMBER`, `CURRENT_STATUS`, `submit_date`, `dept`, `userid`, `id` FROM `awards_for_students_for_projects` WHERE userid='$drop' AND submit_date BETWEEN '$start' AND '$end'";
$retval_afs=mysqli_query($conn, $sql_afs);
if(mysqli_num_rows($retval_afs) > 0)

{  
    $no=1;

   echo "8.AWARDS FOR STUDENTS FOR PROJECTS\n";
    echo "S.NO\t"."NAME OF THE ORGANISATION\t"."PERSON CONTACTED\t"."CONTACT NUMBER\t"."CURRENT STATUS"."\n";
 while($row = mysqli_fetch_assoc($retval_afs))
     { 
      
 
 echo $no. "\t".$row['NAME_OF_THE_ORGANISATION']. "\t" .$row['PERSON_CONTACTED']. "\t" .$row['CONTACT_NUMBER']. "\t" .$row['CURRENT_STATUS']."\n";



 $no=$no+1;
  }
  echo "\n\n";
}

# INTERNSHIP 
$sql_ia= "SELECT `COMPANY_NAME`, `PERSON_CONTACTED`, `CONTACT_NUMBER`, `CURRENT_STATUS`, `submit_date`, `dept`, `userid`, `id` FROM `ainternship` WHERE userid='$drop' AND submit_date BETWEEN '$start' AND '$end'";
$retval_ia=mysqli_query($conn, $sql_ia);
if(mysqli_num_rows($retval_ia) > 0)

{  
    $no=1;

   echo "9.INTERNSHIP \n";
    echo "S.NO\t"."COMPANY NAME\t"."PERSON CONTACTED\t"."CONTACT NUMBER\t"."CURRENT STATUS"."\n";
 while($row = mysqli_fetch_assoc($retval_ia))
     { 
      
 
 echo $no. "\t".$row['COMPANY_NAME']. "\t" .$row['PERSON_CONTACTED']. "\t" .$row['CONTACT_NUMBER']. "\t" .$row['CURRENT_STATUS']."\n";



 $no=$no+1;
  }
  echo "\n\n";
}

#RANKING OF THE INSTITUTION

$sql_roti= "SELECT `AGECNY_NAME`, `PERSON_CONTACTED`, `CONTACT_NUMBER`, `CURRENT_STATUS`, `submit_date`, `dept`, `userid`, `id` FROM `ranking_of_the_institution` WHERE userid='$drop' AND submit_date BETWEEN '$start' AND '$end'";
$retval_roti=mysqli_query($conn, $sql_roti);
if(mysqli_num_rows($retval_roti) > 0)

{  
    $no=1;

   echo "10.INTERNSHIP \n";
    echo "S.NO\t"."AGECNY NAME\t"."PERSON CONTACTED\t"."CONTACT NUMBER\t"."CURRENT STATUS"."\n";
 while($row = mysqli_fetch_assoc($retval_roti))
     { 
      
 
 echo $no. "\t".$row['AGECNY_NAME']. "\t" .$row['PERSON_CONTACTED']. "\t" .$row['CONTACT_NUMBER']. "\t" .$row['CURRENT_STATUS']."\n";



 $no=$no+1;
  }
  echo "\n\n";
}

//AWARDS FOR  INSTITUTION
$sql = "SELECT  `AGECNY_NAME`, `PERSON_CONTACTED`, `CONTACT_NUMBER`, `CURRENT_STATUS` FROM `awards_for_institution` WHERE userid='$drop' AND submit_date BETWEEN '$start' AND '$end'";
$retval=mysqli_query($conn, $sql);  
   
if(mysqli_num_rows($retval) > 0)

{  
    $no=1;

   echo "11.AWARDS FOR  INSTITUTION \n";
    echo "S.NO\t"."AGENCY NAME\t"."PERSON CONTACTED\t"."CONTACT NUMBER\t"."CURRENT STATUS"."\n";
 while($row = mysqli_fetch_assoc($retval))
     { 
        
 echo $no. "\t".$row['AGECNY_NAME']. "\t" .$row['PERSON_CONTACTED']. "\t" .$row['CONTACT_NUMBER']. "\t" .$row['CURRENT_STATUS']."\n";



 $no=$no+1;
  }
  echo "\n\n";

}
echo "\n";
echo "\t\t\tNAME OF THE IIIC MEMBER :\n";
echo "\t\t\tSIGNATURE:\n";
echo "\t\t\tDATE OF SUBMISSION:\n\n";
echo "SUBMITTED TO\n";
echo "Dean Academics through Head/IIIC\n";

?>