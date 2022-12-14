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
<title> A&A  </title>
</head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="page1.css">
  <link rel="stylesheet" type="text/css" href="NavbarStyle.css">
  <link rel="stylesheet" type="text/css" href="page2.css">
  <link rel="stylesheet" type="text/css" href="Buttons.css">
  <script type="text/javascript"  src="pageWork.js"></script>
    <body dir="rtl" align="center" class="backgroundform" >
        <div class="background">
            <div class="text">
                <h1 class="h1">  מסך הזמנה  </h1> 
                <h3 class= "h2" style = "color: red" ><strong>*** התמונות המוצגות להמחשה בלבד ***</h3></strong><br><br>
                <br>
            </div>
        </div>
	<form action="orderInfo.php" method="POST">
        <div class="background">
            <div class="text">
                <div class="h3">
                    <h1 class= "h2">   מנות פתיחה  :<br></h1>
                    <h4 style = "color: gold">
                        <input type="checkbox" name="first_course[]"  value="A1234"/><label for="A1234 "> קארפצ'ו בקר  45 ש"ח -G-</label> <br>
                    <br>
                    <img src = "images/קרפצו בקר.jpg" width= "200"/><br><br>
                        <input  type="checkbox" name="first_course[]"  value="b1234"/><label for="b1234 "> כנפי כרובית  39 ש"ח -V-</label><br></label>
                    <br>
                        <img src="images/כנפי כרובית טבעוני.jpg" width="200" /> <br>
                        <label><input type="checkbox" name="first_course[]" value="C1234"/>  * טאטקי טונה אדומה 49 ש"ח <br></label>
                    <br>
                    <img src="images/טאטקי טונה אדומה.jpg" width="200" /> <br>
                    <br><br>
                </div>
            </div>
            <div class="background">
                <div class="text">
                    <div class="h3">
                        <h1 class= "h2">   מנות עיקריות   :</h1><br>
                        <br>
                        <br>
                            <input type="checkbox" name="main_course[]"  value="D1234"/><label for="D1234">* סינטה בצריבה אישית 89 ש"ח <br></label><br><br> 
                        <img src = "images/סינטה.jpg" width= "200"/><br><br>
                            <input type="checkbox" name="main_course[]"  value="E1234 "/><label for="E1234"> סינטופו 66 ש"ח -V- </label><br><br>
                        <br>
                        <img src="images/עיקרית טופו.jpg" width="200" /><br><br> 
                        <br>
                            <input  style="width: 22xp;" type="checkbox" name="main_course[]"  value="F1234"/><label for="F1234">  כתף בקר בערמונים ושזיפים 115 ש"ח <br></label><br><br>
                        <br>
                        <img src="images/כתף בקר.jpg " width="200" /><br><br>
                        <br>
                    </div>
                </div>
            </div>
            <div class="background">
                <div class="text">
                    <div class="h3">
                            <h1 class= "h2"> קינוחים </h1><br>
                            <br>
                                <input type="checkbox" name="end_course[]"  value="G1234"/><label for="G1234">  קינוח שוקולד ושמן זית 40 ש"ח -V- <br></label> <br> <br> 
                            <br>
                            <img src = "images/קינוח שוקולד.jpg" width= "200"/><br><br>
                                <input type="checkbox" name="end_course[]"  value="H1234"/><label for="H1234">קינוח תותים 37 ש"ח  <br></label> <br>
                            <br>
                            <img src="images/קינוח תותים.jpg" width="200" /><br>
                            <br>
                            <br>
                            <br>
                        
                            <label class= "h2" for="need" style = "color: gold" required > האם יש צורך בסכום ? </label><br><br>
                                <label class="container" align="center">
                                    <input for="TA"  type="radio" id="TA" name="need" value="yes"  > כן </input>
                                    
                                </label>
                                <label class="container" align="center">
                                    <input for="TA"  type="radio" id="TA" name="need" value="no"  > לא </input>
                                    
                                </label>
                            <br><br>

                            <label class= "h2" for="pepole_eat"  > כמה סועדים ? (עד 10 סועדים)</label><br><br>
                            <br>
                                <input name="pepole_eat" type="num"  min="1" max="10" placeholder=" כמות סועדים בהזמנה "required>
                            <br>
                            <br>
                            <label class= "h2" for="order_number" > הזן מספר הזמנה </label><br><br><br>
                                <input type="num"  name="order_number" placeholder=" הזן מספר הזמנה " required><br><br>
                        <button  class="all_buttons"  >שלח הזמנה להכנה</button>
                        <br><br>
                    </div>
                </div>
            </div>
	</form>
    </body>
</html>


