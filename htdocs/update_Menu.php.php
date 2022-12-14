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
    </body>
</html>

<?php
	include('dbconnect.php');

	//Input posted data.
	$priceUP = $_POST["PriceMealUP"];
	$mktUP = $_POST["mktUP"];
	$NameMealUP = $_POST["NameMealUP"];
	$DescriptionMealUP = $_POST["DescriptionMealUP"];

	 	
	//SQL query - user Details   
	$query =" UPDATE a_a_menu
	          SET Price='$priceUP',Name_menu='$NameMealUP' ,Component='$DescriptionMealUP'
	          WHERE  Mkt= '$mktUP' ";
	
	//Run SQL query
	mysqli_query($con, $query) or die ("ERROR: Cannot do insert ".mysqli_error($con));   	
	//Close the SQL connection.
	mysqli_close($con);
?> 

