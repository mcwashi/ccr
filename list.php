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
        
      <h2>Member List</h2>
        <center>
        <table border="1">
        <tr bgcolor="#D5C8C8">
        	<td>First Name</td>
            <td>Last Name</td>
            <td>Home Address</td>
            <td>Home City</td>
            <td>Home State</td>
            <td>Update</td>
            <td>Report</td>
            
        
       
        <?php
        $db = mysqli_connect('localhost','','', 'CICR');
		$sql = 'SELECT PersonId, FirstName, LastName, HomeAddress, HomeCity, HomeState FROM Persons';
        $result = mysqli_query($db, $sql);
		
		if(!$db) die("Error connecting to MySQL database.");

	   
        foreach($result as $row)
		{
		  
			printf('<tr>
			<td>%s</td>
			<td>%s</td>
			<td>%s</td>
			<td>%s</td>
			<td>%s</td>
			<td><a href="update.php?id=%s">Update</a></td>
			<td><a href="report.php?id=%s">Report</a></td>
			</tr>',
			  htmlspecialchars($row['FirstName']),
			  htmlspecialchars($row['LastName']),
			  htmlspecialchars($row['HomeAddress']),
			  htmlspecialchars($row['HomeCity']),
			  htmlspecialchars($row['HomeState']),
			  htmlspecialchars($row['PersonId']),
			  htmlspecialchars($row['PersonId'])
			  
			);
		}
		mysqli_close($db);
		?>
	  
       </table>
        
        </td>
    <tr>
    	<td height="10px" bgcolor="F06D80"></td>
    </tr>
</table>
</center>


</body>
</html>
