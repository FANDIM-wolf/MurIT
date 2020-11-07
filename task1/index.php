

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
 
   
<br>
<br>
 <form action="" method="POST" >
  <h3>У вас есть мощный ПК?</h3>
  <p>Да <input type="radio" name="pc" value="1"></p>
  <p>Нет <input type="radio" name="pc" value="0"></p>
  <br>
 
  <br>
  <input type="submit">
 </form>
 <img src='pc_p.png' width='640' hight='500'>	

<?php 



if (isset($_REQUEST['pc'])and $_REQUEST['pc']==1)
{
    header('Location: sony.php');
}

if (isset($_REQUEST['pc'])and $_REQUEST['pc']==0)
{
    header('Location: sony.php');
}
?>
</body>
</html>