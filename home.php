<?php
  
  include 'include.php';
  require 'dbInfo.php'
?>

<?php
	if(isset ($_SESSION['formWasPosted']))
	{
		$postedData = $_SESSION['formWasPosted'];
		$ID = trim($postedData['user']); 
		//unset($_SESSION['formWasPosted']);
	}
	else
	{
		header('Location: index.php'); 
	}

?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Application Home</title>
<link href="css/styleSheet.css" rel="stylesheet" type="text/css">

</head>

<body>
<center>
<table width="1000">
	<tr>
    	<td valign="bottom"><img src="images/Header.jpg" width="1000" height="200" alt=""/></td>
    </tr>
    <tr>
    <td>
    	<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="info.php">Capture Information</a></li>
  <li><a href="list.php">Member List</a></li>
  <li><a href="MoreInfo.php">More Information</a></li>
  <li><a href="logout.php" >Logout</a></li>

</ul>
</td>
    </tr>
    <tr>
    	<td valign="top" height="200px" bgcolor="#ffffff">
       
        </td>
    <tr>
    	<td height="10px" bgcolor="F06D80"></td>
    </tr>
    


</table>
</center>


</body>
</html>
