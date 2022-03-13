<?php
    include('dbconnect.php');
	
	//Input posted data.
	$namePerson = $_POST["firstname"];
    $lastPerson = $_POST["lastname"];
	$emailPerson = $_POST["email"];
	$phonePerson = $_POST["phone"];
	$locatoinPerson = $_POST["Location_job"];
	$titlePerson  = $_POST["title"];
    $cvPerson = $_POST["cv_person"] ;

    if ( file_exists("$cvPerson") ) { 
        $query ="INSERT INTO jobs (First_name,Last_name, Email, Phone_number, Location, Job_title,CV )
		  VALUES ('$namePerson','$lastPerson' ,'$emailPerson', '$phonePerson','$locatoinPerson' ,'$titlePerson', '$cvPerson')"; 
          //Run SQL query
		mysqli_query($con, $query) or die ("ERROR: Cannot do insert ".mysqli_error($con));  
        echo '<script>alert("פרטיך נקלטו בהצלחה")</script>';
; 
    }else{
        $query ="INSERT INTO jobs (First_name,Last_name, Email, Phone_number, Location, Job_title )
		  VALUES ('$namePerson','$lastPerson' ,'$emailPerson', '$phonePerson', '$locatoinPerson' ,'$titlePerson');"; 
           //Run SQL query
        mysqli_query($con, $query) or die ("ERROR: Cannot do insert ".mysqli_error($con)); 
        echo '<script>alert("פרטייך נקלטו בהצלחה") </script>';

    }
//Close the SQL connection.
mysqli_close($con);	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> A&A  </title>
</head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="page1.css">
  <link rel="stylesheet" type="text/css" href="NavbarStyle.css">
  <link rel="stylesheet" type="text/css" href="page2.css">
  <link rel="stylesheet" type="text/css" href="Buttons.css">
  <script type="text/javascript"  src="pageWork.js"></script>
    <body dir="rtl" >
        <video id="videoBG" poster="poster.JPG" autoplay muted loop>
            <source src="pexels-kampus-production-8626675.mp4" type="video/mp4">
        </video>
        <div id="navbar">
            <a id="logo" onclick="progressHOME()" ><img src = "images/AA_RESTURANT.jpg " width ="100"/> 
               <div id="navbar-right">
                 <a class="active" href="http://localhost/index.html">דף הבית</a>  
                 <a onclick="progressOrderChoosh()"> להזמנות</a>  
                 <a onclick="progressMenu()"> תפריט  </a>                      
                 <a onclick="progressClubMenbers()">הרשמה למועדון ההטבות</a>                           
                 <a onclick="progressJobs()">דרושים לרשת המסעדות</a>
                 <a onclick="progressUserManger()" >כניסת מנהל</a>
                 <a onclick="progressFeedback()">מילוי משוב </a>
               </div>
        </div>  
</html>