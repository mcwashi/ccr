<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Application Home</title>
<link href="css/styleSheet.css" rel="stylesheet" type="text/css">

<link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">





<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
		

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
  <li><a href="home.php">Home</a></li>
  <li><a href="info.php">Capture Information</a></li>
  <li><a class="active" href="list.php">Member List</a></li>
  <li><a href="MoreInfo.php">More Information</a></li>
</ul>
</td>
    </tr>
    <tr>
    	<td valign="top" height="200px" bgcolor="#ffffff">
        
        <P>MARCUS WAHSINGTON</P>
        <ul>
        <?php
        $db = mysqli_connect('localhost','root','sucram#4963', 'CICR');
		$sql = 'SELECT PersonId, FirstName, LastName FROM Persons';
        $result = mysqli_query($db, $sql);
		
		if(!$db) die("Error connecting to MySQL database.");

	   
        foreach($result as $row)
		{
			printf('<li>%s</li>',
			  htmlspecialchars($row['FirstName'])
			);
		}
		mysqli_close($db);
		?>
	   </ul> 
        
        </td>
    <tr>
    	<td height="10px" bgcolor="F06D80"></td>
    </tr>
    


</table>
</center>


</body>
</html>
