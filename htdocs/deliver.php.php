<?php

	include('dbconnect.php'); 
	
	if(empty($_POST['addres'])) {
		$areaD = $_POST['city'];   
		$LastNameD = $_POST["lastName"];
		$nameD = $_POST["firstName"];								
		$PhoneNumberD = $_POST["phone"];	
		$TimeD  = $_POST["appt"];
		$FreeTextD = $_POST["details"];
		
		$query ="INSERT INTO deliveries (Order_Branch,type_Order, First_name, last_name, Mobile_Phone, Order_time,Comments_order )
		  VALUES ('$areaD','TA' ,'$nameD', '$LastNameD', '$PhoneNumberD' ,'$TimeD', '$FreeTextD')"; 
		  //Run SQL query
		mysqli_query($con, $query) or die ("ERROR: Cannot do insert ".mysqli_error($con));   
		  
	} else {			
		$areaD = $_POST['city'];   
		$nameD = $_POST["firstName"];
		$LastNameD = $_POST["lastName"];
		$AdressD = $_POST["addres"];
		$PhoneNumberD = $_POST["phone"];
		$PhoneNumberD1 = $_POST["phone1"];
		$EmailD = $_POST["email"];
		$TimeD  = $_POST["appt"]; 
		$FreeTextD = $_POST["details"]; 									
		$query ="INSERT INTO deliveries (Order_Branch,type_Order, First_name, last_name, Address, Mobile_Phone, Another_mobile, Mail_adress, Order_time,Comments_order )
				  VALUES ('$areaD', 'Deliver', '$nameD', '$LastNameD', '$AdressD', '$PhoneNumberD','$PhoneNumberD1' , '$EmailD','$TimeD', '$FreeTextD')"; 
		//Run SQL query
		mysqli_query($con, $query) or die ("ERROR: Cannot do insert ".mysqli_error($con));   
		  														
	}

//Close the SQL connection.
mysqli_close($con);	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>A&A </title>
</head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="page1.css"/>
<script type="text/javascript" src="page1.js"></script>
    
	<body dir = "rtl" >

    <h1  style = "color: gold"  ><strong><b><center><i><sup>  מסך הזמנה  </h1></h1></strong></b></center></i></sup> 
    <h2 style = "color: gold" ><strong><b><center><i><sup> בחר את המנות להזמנה </h1></h1></strong></b></center></i></sup>  
    <h3 style = "color: red" ><strong>*** התמונות המוצגות להמחשה בלבד ***</h3></strong><br><br>
    <br>
    <h3 style = "color:gold" ><strong> אנא בחר סניף ממנו תרצה להזמין </h3></strong>
        <select name=select1>
           <option value="כפר סבא "> כפר סבא</option>
           <option value=" ראש העין">ראש העין </option>
           <option value="תל אביב">תל אביב</option>
        </select >  <br>
    <br>
    <br>
  
    <h1><label style = "color: gold">   מנות פתיחה  :</label><br></h1>
        <h4 style = "color: gold">
			<input type="checkbox" name="dinner1" id="q2" value="קרפצ'ו בקר"/> קארפצ'ו בקר  45 ש"ח -G-<br> 
			<input type="checkbox" name="dinner1"  value="ללא צ'ילי"> ללא צ'ילי במנה <br>
		    <br>
			 <img src = "images/קרפצו בקר.jpg" width= "150"/><br><br>
			<input  type="checkbox" name="dinner2" id="q3" value=" כנפי כרובית "/> כנפי כרובית  39 ש"ח -V- <br>
			<br>
			 <img src="images/כנפי כרובית טבעוני.jpg" width="150" /> <br>
			<input type="checkbox" name="dinner3" id="q4" value="טאטאקי טונה"/> טאטקי טונה אדומה 49 ש"ח  <br>
			<br>
		     <img src="images/טאטקי טונה אדומה.jpg" width="150" /> <br>
		</h4><br><br>
			

    <h1><label style = "color: gold">   מנות עיקריות   :</label></h1><br>
        <br>
		<br>
        <h4 style = "color: gold">
			<input type="checkbox" name="dinner1" id="q5" value=" סינטה"/> * סינטה בצריבה אישית 89 ש"ח <br> 
			<br>
			   <img src = "images/סינטה.jpg" width= "150"/><br><br>
			<input  type="checkbox" name="dinner2" id="q6" value=" סינטופו "/> סינטופו 66 ש"ח -V- <br>
			<br>
			   <img src="images/עיקרית טופו.jpg" width="150" /> <br>
			<input type="checkbox" name="dinner3" id="q7" value=" כתף בקר "/> כתף בקר ממולאת בערמונים ושזיפים 115 ש"ח <br>
			<br>
		       <img src="images/כתף בקר.jpg " width="150" /> <br>
		
			
    <h1><label style = "color: gold">  קינוחים   </label></h1><br>
        <br>
        <h4 style = "color: gold">
			<input type="checkbox" name="dinner1" id="q8" value=" קינוח שוקולד"/>  קינוח שוקולד ושמן זית 40 ש"ח -V- <br> 
			<br>
			   <img src = "images/קינוח שוקולד.jpg" width= "150"/><br><br>
			<input  type="checkbox" name="dinner2" id="q9" value=" קינוח תותים "/>  קינוח תותים 37 ש"ח <br>
			<br>
			   <img src="images/קינוח תותים.jpg" width="150" /> <br>
			<br>
			<br>
			<br>
			
    <label style = "color: gold" > האם יש צורך בסכום ?</label><br>
			<input type="radio" name="gender" value="yes" /> כן <br>
  			<input type="radio" name="gender" value="no"/> לא<br> 
    <br><br>

    <form action ="/action_page.php">
       <label for="quantity"> כמה סועדים ? (עד 10 סועדים)</label>
       <br><br>
       <input type="number" id="quantity" name="quantity" min="1" max="10">
    </form>
    <br>
    <br>
    <button onclick="choose1()"  class="all_buttons" >שלח הזמנה להכנה</button>


    <button onclick="button_home()" class="all_buttons">עמוד הבית</button>

    </body>
</html>
