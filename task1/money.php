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
<h3>У тебя хороший финансовый доход ?</h3>
<br>
<br>
 <form action="" method="POST" >
  <p>Да <input type="radio" name="money" value="1"></p>
  <p>Нет <input type="radio" name="money" value="0"></p>
  <br>
 
  <br>
  <input type="submit">  
 </form>	

<img src='sony_p.png' width='640' hight='500'>
<?php 
if (isset($_REQUEST['money']) and $_REQUEST['money']==1)
{   
   
    header('Location: xboxx.php');
}
if (isset($_REQUEST['money']) and $_REQUEST['money']==0)
{   
   
    header('Location: xboxs.php');
}
?>
</body>
</html> 