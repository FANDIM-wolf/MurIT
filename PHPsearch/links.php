<!DOCTYPE html>
<html>
<head>
	<title>PHP search</title>
</head>
<body>

<img src="logoprint.png">

<h2>Names of availible articles in data base:</h2>
<br>




</body>
</html>


<?php 
//shows result of  request 

//names of availiable articles 
function print_data ($result_data)
{
	while (($row = $result_data->fetch_assoc()) != false ) {
		//get all data about articles and put it in  variable row 

		echo "<a href=".$row[text];">Перейти</a>";// print names of  articles 

	}
	
   
}

//amount pages in Data base 
if ($result = $mysqli->query("SELECT * FROM  `links`")) {
    printf("Pages found: %d .\n", $result->num_rows);
    $result->close();
}

$mysqli= new mysqli("localhost","root","","phpsearch");

$mysqli->query("SET NAMES 'utd-8'");
$result_data = $mysqli->query("SELECT * FROM  `links`");


print_data($result_data);




$mysqli->close(); //close connection to db 



?>