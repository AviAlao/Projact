<?php

	include('dbconnect.php'); 
	
	$areaF = $_POST['city'];   
	$serviceF = $_POST['service'];
	$GeneralSatisfactionF = $_POST['GeneralSatisfaction'];
	$QualityMealF = $_POST['QualityMeal'];
	$WaitingTimeF = $_POST['WaitingTime'];
	$ServiceExperienceF = $_POST['ServiceExperience'];
	$textareaF = $_POST['textarea1'];

	
	$query ="INSERT INTO feedback (Location, Service, General_satisfaction, Quality_meal, Waiting_time, Service_experience, Free_text )
	          VALUES ('$areaF', '$serviceF', '$GeneralSatisfactionF', '$QualityMealF', '$WaitingTimeF','$ServiceExperienceF' , '$textareaF')"; 
	
    //Run SQL query
	mysqli_query($con, $query) or die ("ERROR: Cannot do insert ".mysqli_error($con));   
	
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
   </body>
</html>