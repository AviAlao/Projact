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
            <a id="logo" onclick="progressHOME()" ><img src = "AA_RESTURANT.jpg " width ="100"/> 
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
<?php

	include('dbconnect.php');
	//Input posted data.
    $OrderBranch = $_POST["select1"];
	$firstName = $_POST["firstname"];
	$lastName = $_POST["lastname"];
	$phonenum1 = $_POST["phone1"];
	$phonenum2 = $_POST["phone2"];
    $emilOrder = $_POST["email"];
    $dateOrder = $_POST["date_order"];
    $TimeOrder = $_POST["timeOrder"];
    $PepoleOrder = $_POST["quantity"];
	 
	//SQL query - user Details   
	$query = "INSERT INTO sit_order (Order_Branch, First_name, last_name, phone_number,phone_number2,Email_Order,Date_Order,Time_Order,Pepole_Order)
	          VALUES ('$OrderBranch', '$firstName', '$lastName', '$phonenum1', '$phonenum2', '$emilOrder', '$dateOrder', '$TimeOrder', '$PepoleOrder')";
			  
	//Run SQL query
    
    mysqli_query($con, $query) or die ("ERROR: Cannot do insert ".mysqli_error($con));   
	echo "<br><br><br><br><br><br>" ;
    echo "<br><br><br><br><br><br>" ;
    echo "<h1 class='h1'>" ,"פרטייך נקלטו ניצור קשר בהקדם"  ."</h1>". "<br/>" ."<br/>";
    echo "<br/>" ; 
    echo  "<h2  class= 'h2'>" ,"סניף ההזמנה :" ,"<br/>"  ,$OrderBranch  . "<br/>" ."<br/>";
    echo "<br/>" ;
    echo  "<h2  class= 'h2'>","שם פרטי :" ,"<br/>" , $firstName . "<br/>" ."<br/>";
    echo "<br/>" ;
    echo  "<h2  class= 'h2'>"," שם משפחה: " ,"<br/>" , $lastName  . "<br/>" ."<br/>";
    echo "<br/>" ;
    echo  "<h2  class= 'h2'>"," מס' טלפון ראשי להזמנה : " ,"<br/>" , $phonenum1  . "<br/>" ."<br/>";
    echo "<br/>" ;
    echo  "<h2  class= 'h2'>","שעת היעד להזמנה:" , "<br/>" ,$TimeOrder  . "<br/>" ."<br/>";
    echo "<br/>" ;
    echo  "<h2  class= 'h2'>","<h2  class= 'h2'>","מייל להזמנה:" , "<br/>" ,$emilOrder  . "<br/>" ."<br/>";
    echo "<br/>" ;
    echo  "<h2  class= 'h2'>","תאריך להזמנה:" , "<br/>" ,$dateOrder  . "<br/>" ."<br/>";
    echo "<br/>" ;
    echo  "<h2  class= 'h2'>","מס' סועדים להזמנה :" , "<br/>" ,$PepoleOrder  . "<br/>" ."<br/>";
    echo "<br/>" ;
	
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
    <body dir="rtl" align="center">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/sxBUFPp9YQY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		
   	</body>
</html>
