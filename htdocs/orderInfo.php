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
		<br><br><br><br><br><br>
        <br><br><br>
   	</body>
</html>

<?php
	include('dbconnect.php');
	$orderNumber = $_POST["order_number"] ; 	
	$need_Dont_Need = $_POST["need"];
	$pepole = $_POST["pepole_eat"]; 
    $sum = 0;

	//checked menu  
    if (!empty($_POST['first_course'])) {
		$firstCourse  = $_POST["first_course"];
		$countFirstCourse = count($_POST["first_course"]);
		for ($x = 0; $x < $countFirstCourse; $x++) {			
			 //sum 
			 $sumOrder = "SELECT Price
			               FROM a_a_menu 
			               WHERE Mkt = ('$firstCourse[$x]') ;" ; 
				 
			//Run SQL sumOrder
			$result=  mysqli_query($con, $sumOrder) or die ("ERROR: Cannot do insert ".mysqli_error($con)); 
			$row = mysqli_fetch_array($result) ;
			$sum = $sum + $row['Price']  ; 		  
            
			
		}
	}

	if (!empty($_POST['main_course'])) {
		$mainCourse  = $_POST["main_course"];
		$countMainCourse = count($_POST["main_course"]);
	 	for ($x = 0; $x < $countMainCourse; $x++) { 
			//sum 
			$sumOrder = "SELECT Price
						 FROM a_a_menu 
						 WHERE Mkt = ('$mainCourse[$x]') ;" ; 

			//Run SQL sumOrder
			$result=  mysqli_query($con, $sumOrder) or die ("ERROR: Cannot do insert ".mysqli_error($con)); 
			$row = mysqli_fetch_array($result) ;
			$sum = $sum + $row['Price']  ; 		  

	 	}
   
	}
	if (!empty($_POST['end_course']) ) {
		$endCourse = $_POST["end_course"];
		$countEndCourse = count($_POST["end_course"]);
	 	for ($x = 0; $x < $countEndCourse; $x++) {
			 //sum 
			 $sumOrder = "SELECT Price
					  	  FROM a_a_menu 
						  WHERE Mkt = ('$endCourse[$x]') ;" ; 

			 //Run SQL sumOrder
		     $result=  mysqli_query($con, $sumOrder) or die ("ERROR: Cannot do insert ".mysqli_error($con)); 
			 $row = mysqli_fetch_array($result) ;
			 $sum = $sum + $row['Price']  ; 	 
	    }		 
	}
	//last sum 
	$SumEndQuery = "UPDATE totall_orders
				SET total_price = ('$sum')		
				WHERE  order_Numbres = ('$orderNumber')" ;  
	mysqli_query($con, $SumEndQuery) or die ("ERROR: Cannot do insert ".mysqli_error($con)); 
	//last update 
	$lastquery1 = "UPDATE totall_orders
				SET pepole_order = ('$pepole')		
				WHERE  order_Numbres = ('$orderNumber')" ;   
	$lastquery2 = " UPDATE totall_orders
					SET Cutlery = ('$need_Dont_Need')		
					WHERE  order_Numbres = ('$orderNumber')" ;   

	mysqli_query($con, $lastquery1) or die ("ERROR: Cannot do insert ".mysqli_error($con)); 
	mysqli_query($con, $lastquery2) or die ("ERROR: Cannot do insert ".mysqli_error($con)); 

	// information order 
	$queryInfo = "SELECT *
				FROM deliveries 
				WHERE Order_Number = ('$orderNumber') ;" ;  

	$queryInfoTotal = "SELECT *
					FROM totall_orders 
					WHERE order_Numbres = ('$orderNumber') ;" ;   


	$resultInfo = mysqli_query($con, $queryInfo) or die ("ERROR: Cannot do insert ".mysqli_error($con)); 
	$resultInfoTotal = mysqli_query($con, $queryInfoTotal) or die ("ERROR: Cannot do insert ".mysqli_error($con)); 

	$rowInfo = mysqli_fetch_array($resultInfo) ;
	$rowInfoTotal = mysqli_fetch_array($resultInfoTotal) ; 
	//printing

	echo "<h1 class = 'h1'>" ,"ההזמנה נקלטה בהצלחה " . "<br/>" ."<br/>";
	echo "<h2  class= 'h2'>" , "סוג ההזמנה :", "<br/>","<p class= 'h3'/>", $rowInfo['type_Order']  ."</h2></strong></b></i>". "<br/>" ."<br/>";
	echo "<h2 class= 'h2'/>", "מס' ההזמנה :" ,"<br/>"  ,"<p class= 'h3'/>", $orderNumber . "<br/>" ."<br/>";
	echo "<br/>" ;
	echo  "<h2 class= 'h2'/>","סניף ההזמנה : " ,"<br/>"  , "<p class= 'h3'/>",$rowInfo['Order_Branch']  . "<br/>" ."<br/>";
	echo "<br/>" ;
	echo  "<h2 class= 'h2'/>","שם פרטי : " ,"<br/>" ,"<p class= 'h3'/>", $rowInfo['First_name'] . "<br/>" ."<br/>";
	echo "<br/>" ;
	echo  "<h2 class= 'h2'/>"," שם משפחה :" ,"<br/>" ,"<p class= 'h3'/>", $rowInfo['last_name']  . "<br/>" ."<br/>";
	echo "<br/>" ;
	echo  "<h2 class= 'h2'/>","מס' טלפון : " ,"<br/>" ,"<p class= 'h3'/>", $rowInfo['Mobile_Phone']  . "<br/>" ."<br/>";
	echo "<br/>" ;
	echo  "<h2 class= 'h2'/>","שעת היעד להזמנה :" , "<br/>" ,"<p class= 'h3'/>",$rowInfo['Order_time']  . "<br/>" ."<br/>";

	if (!empty($rowInfo['Comments_order'])) {
		echo "<h2 class= 'h2'/>", " הערות מיוחדות להזמנה : " , "<p class= 'h3'/>" , $rowInfo['Comments_order']  . "<br/>" ."<br/>";
	} 
	echo "<h2 class= 'h2'/>" ,"מס' סועדים :" , "<br/>" , "<p class= 'h3'/>" ,$rowInfoTotal['pepole_order'] . "<br/>" ."<br/>";
	echo "<h2 class= 'h2'/>", " האם יש צורך בסכום : " , "<br/>" ,"<p class= 'h3'/>" ,$rowInfoTotal['Cutlery']  . "<br/>" ."<br/>";
	echo "<h2 class= 'h2'/>", " סכום ההזמנה :" , "<br/>" ,"<p class= 'h3'/>" ,$rowInfoTotal['total_price'] . "<br/>" ."<br/>";
	echo "<br/>" ;
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
    <body dir="rtl" align="center" >
			<iframe width="640" height="360" src="https://www.youtube.com/embed/sxBUFPp9YQY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<br><br><br>
		<br><br><br>
   	</body>
</html>
