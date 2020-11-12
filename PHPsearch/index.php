<!DOCTYPE html>
<html>
<head>
	<title>PHP search</title>
</head>
<body>

<style type="text/css">
	
#logo{

margin-left:300px;

}
#line{
	margin-left: 350px;
}	

</style>


<div id="logo">
<img src="phplogo.png" width="600" height="300">
</div>
<div id="line"> 
<form name="search_form" method="post">
<input type="search" name="search_line" size="70" placeholder="Write , What topic do you need ?">
<input type="submit" name="">
</form>
</div>

<?php

$search_result = $_POST['search_line']; //get data from input

if($search_result == ""){
    
    
	echo("Result:"+$search_result); //if user written down nothing 
}
elseif($search_result == "select" )
{
	
	 
        header('Location : select.php');
	 
}
else {
 echo "<h1>EMPTY  , repeat your request ,please</h1>";// if search input is empty 
 
}

?>

</body>
</html>