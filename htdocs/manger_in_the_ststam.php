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
	$id = $_POST["idManger"];
	$USER = $_POST["username"];
	$passwordM = $_POST["userpassword"] ;
	//SQL query - user Details   
	$select = " SELECT *  FROM  administrator_user 
                WHERE Id_manger IN ('$id' ) AND Password_user IN ('$passwordM') AND Name_user IN ('$USER')" ; 

	$result= mysqli_query($con,$select) or die ("cannot get client data ".mysqli_error($con));	
    $row = mysqli_fetch_array($result) ;
    $answer = array($row) ;

    if (!$answer[0]) {
        echo "<h1 class='h1' />  שגיאת כניסה - אחד או יותר מן הפרטים שגויים" ."<br/>";
        

    } else {
        header("Location: http://localhost/edit_menu.html");
        exit();
    }

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
     <br><br> 
     <ul class="mainpage_navbar-links"><br>
            <li class="mainpage_navbar-links-item">
                <a onclick="progressUserManger()" class="button:hover"   title=" בחזרה לדף המנהל " >    בחזרה לדף המנהל</a>
            </li> 
            <li class="mainpage_navbar-links-item">
                <a onclick="progressHOME()" class="button:hover"   title=" בחזרה לדף הבית " >    בחזרה לדף הבית</a>
            </li> 
     </ul>       
    </body>
</html>