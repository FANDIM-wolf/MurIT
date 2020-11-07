

<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<style type="text/css">
	 html{
	 	background:snow;
       
	 }
     #HEAD{
     	background-color:orange;
     	color: white;
     	width: 100%;
     	height: 100px;
     	display: flex;
     	justify-content: center;
     	font-style: "Arial";
     	font-size: 25px;


     }
    </style>
</head>

<body>
 
<div id="HEAD">
<h2>Что купить на новый год?</h2> 
</div>
<h3>Нужны ли  тебе игры от SONY?</h3>
<br>
<br>
 <form action="" method="POST" >
  <p>Да <input type="radio" name="sony_games" value="1"></p>
  <p>Нет <input type="radio" name="sony_games" value="0"></p>
  <br>
 
  <br>
  <input type="submit">  
 </form>	

<img src='sony_p.png' width='640' hight='500'>
<?php 
if (isset($_REQUEST['sony_games'])and $_REQUEST['sony_games']==1)
{   
    $ps5="<h1>ps5</h1>";
    header('Location: ps5.php');
}
if (isset($_REQUEST['sony_games'])and $_REQUEST['sony_games']==0)
{   
    $ps5="<h1>ps5</h1>";
    header('Location: money.php');
}

?>
</body>
</html>