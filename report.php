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

<?php
	if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    }
    else
   {
    	header('Location: list.php');
    }
 ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
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
  <li><a href="home.php">Home</a></li>
  <li><a href="info.php">Capture Information</a></li>
  <li><a class="active" href="list.php">Member List</a></li>
  <li><a href="MoreInfo.php">More Information</a></li>
  <li><a href="logout.php" >Logout</a></li>
</ul>
</td>
    </tr>
    <tr>
    	<td valign="top" height="200px" bgcolor="#ffffff">
        
        <P>Report</P>
        <table border="1">
       
        <?php
        $db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		$sql = sprintf('SELECT * FROM Persons WHERE PersonId=%s', $id);
        $result = mysqli_query($db, $sql);
		
		if(!$db) die("Error connecting to MySQL database.");

	   
        foreach($result as $row)
		{
		  
			printf('
			<tr>
			<td>First Name</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Last Name</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Middle Name</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Maiden Name</td>
			<td>%s</td>
			</tr>
			<tr>
			
			<td>Alias Name</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Date of Birth</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>SSN</td>
			<td>%s-%s-%s</td>
			</tr>
			
			<tr>
			<td>Home Address</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Home City</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Home Address</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Home State</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Years At Residence</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Months At Residence</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Current Employer</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Title of Position</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Marital Status</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Spouse First Name</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Spouse Last Name</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Spouse Middle Name </td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Spouse Maiden Name</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Spouse Alias Name</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Spouse Birth date</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Spouse Ssn</td>
			<td>%s-%s-%s</td>
			</tr>
			
			<tr>
			<td>Bankruptcy</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Bankruptcy Year</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Repossession</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Repossession Year</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Foreclosure</td>
			<td>%s</td>
			</tr>
			
			<tr>
			<td>Foreclosure Year</td>
			<td>%s</td>
			</tr>',
			  htmlspecialchars($row['FirstName']),
			  htmlspecialchars($row['LastName']),
			  htmlspecialchars($row['MiddleName']),
			  htmlspecialchars($row['MaidenName']),
			  htmlspecialchars($row['AliasName']),
			  htmlspecialchars($row['BirthDate']),
			  htmlspecialchars($row['SSN1']),
			  htmlspecialchars($row['SSN2']),
			  htmlspecialchars($row['SSN3']),
			  htmlspecialchars($row['HomeAddress']),
			  htmlspecialchars($row['HomeCity']),
			  htmlspecialchars($row['HomeState']),
			  htmlspecialchars($row['YearsAtResidence']),
			  htmlspecialchars($row['MonthsAtResidence']),
			  htmlspecialchars($row['CurrentEmployer']),
			  htmlspecialchars($row['PositionTitle']),
			  htmlspecialchars($row['MaritalStatus']),
			  htmlspecialchars($row['SpouseFirstName']),
			  htmlspecialchars($row['SpouseLastName']),
			  htmlspecialchars($row['SpouseMiddleName']),
			  htmlspecialchars($row['SpouseBirthDate']),
			  htmlspecialchars($row['SpouseMaidenName']),
			  htmlspecialchars($row['SpouseAliasName']),
			  htmlspecialchars($row['SpouseBirthDate']),
			  htmlspecialchars($row['SpouseSSN1']),
			  htmlspecialchars($row['SpouseSSN2']),
			  htmlspecialchars($row['SpouseSSN3']),
			  htmlspecialchars($row['DeclaredBankRuptcy']),
			  htmlspecialchars($row['DeclaredBankRuptcyYear']),
			  htmlspecialchars($row['Repossession']),
			  htmlspecialchars($row['RepossessionYear']),
			  htmlspecialchars($row['Foreclosure']),
			  htmlspecialchars($row['ForeclosureYear'])
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