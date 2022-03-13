<?php
	include('dbconnect.php');

	//Input posted data.

	
	$namemembers = $_POST["name_members"];
	$idmembers = $_POST["id__members"];
	$phonemembers = $_POST["phone__members"];
	$emailmembers = $_POST["email__members"];
	$passwordmembers  = $_POST["password__members"];

	 	
	//SQL query - user Details   
	$query ="INSERT INTO 'club_members'(`Name_member`, `Password_member`, `id_members`, `phone_number`, `Email_members`)
	          VALUES ('$namemembers', '$passwordmembers','$idmembers','$phonemembers','$emailmember')" ;

	//Run SQL query
	mysqli_query($con, $query) or die ("ERROR: Cannot do insert ".mysqli_error($con));   
	echo "<h1 style='color: gold;'><center> INSERT operation done sucessefuly </h1> </center>" ;   
	
	//Close the SQL connection.
	mysqli_close($con);
?>