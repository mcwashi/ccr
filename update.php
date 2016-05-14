<?php
	if(isset($_GET['id']) && ctype_digit($_GET['id'])
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
</head>

<body>
<?php
	
	$varFirstName = '';
	$varLastName = '';
	$varMiddleName = '';
	$varMaidenName = '';
	$varAliasName = '';
	$varBirthDate = '';
	$varSsn1 = '';
	$varSsn2 = '';
	$varSsn3 = '';
	$varHomeAddress = '';
	$varHomeCity = '';
	$varHomeState = '';
	$varMonthsAtResidence = '';
	$varYearsAtResidence = '';
	$varCurrentEmployer = '';
	$varPositionTitle = '';
	$varMaritalStatus = '';
	$varSpouseFirstName = '';
	$varSpouseLastName = '';
	$varSpouseMiddleName = '';
	$varSpouseMaidenName = '';
	$varSpouseAliasName = '';
	$varSpouseBirthDate = '';
	$varSpouseSsn1 = '';
	$varSpouseSsn2 = '';
	$varSpouseSsn3 = '';
	$varDeclaredBankruptcy = '';
	$varDeclaredBankruptcyYear = '';
	$varRepossession = '';
	$varRepossessionYear = '';
	
	if (isset($_POST['submit']))
	{
		$ok = true;
		if (isset($_POST['firstName']) || $_POST['firstName'] === '')
		{
			$ok = false;
		}
		else
		{
			$varFirstName = $_POST['firstName'];
		}
		
		if (isset($_POST['lastName']) || $_POST['lastName'] === '')
		{
			$ok = false;
		}
		else
		{
			$varFirstName = $_POST['lastName'];
		}
		
		if (isset($_POST['middleName']) || $_POST['middleName'] === '')
		{
			$ok = false;
		}
		else
		{
			$varMiddleName = $_POST['middleName'];
		}
		
		if (isset($_POST['aliasName']) || $_POST['aliasName'] === '')
		{
			$ok = false;
		}
		else
		{
			$varAliasName = $_POST['aliasName'];
		}
		
		if (isset($_POST['birthDate']) || $_POST['birthDate'] === '')
		{
			$ok = false;
		}
		else
		{
			$varBirthDate = $_POST['birthDate'];
		}
		
		if (isset($_POST['ssn1']) || $_POST['ssn1'] === '')
		{
			$ok = false;
		}
		else
		{
			$varSsn1 = $_POST['ssn1'];
		}
		
		if (isset($_POST['ssn2']) || $_POST['ssn2'] === '')
		{
			$ok = false;
		}
		else
		{
			$varSsn1 = $_POST['ssn2'];
		}
		
		if (isset($_POST['ssn3']) || $_POST['ssn3'] === '')
		{
			$ok = false;
		}
		else
		{
			$varSsn1 = $_POST['ssn3'];
		}
		
		if (isset($_POST['homeAddress']) || $_POST['homeAddress'] === '')
		{
			$ok = false;
		}
		else
		{
			$varHomeAddress = $_POST['homeAddress'];
		}
		
		if (isset($_POST['homeCity']) || $_POST['homeCity'] === '')
		{
			$ok = false;
		}
		else
		{
			$varHomeCity = $_POST['homeCity'];
		}
		
		if (isset($_POST['homeState']) || $_POST['homeState'] === '')
		{
			$ok = false;
		}
		else
		{
			$varHomeState = $_POST['homeState'];
		}
		
		if (isset($_POST['monthsAtResidence']) || $_POST['monthsAtResidence'] === '')
		{
			$ok = false;
		}
		else
		{
			$varMonthsAtResidence = $_POST['monthsAtResidence'];
		}
		
		if (isset($_POST['yearsAtResidence']) || $_POST['yearsAtResidence'] === '')
		{
			$ok = false;
		}
		else
		{
			$varYearsAtResidence = $_POST['yearsAtResidence'];
		}
		
		if (isset($_POST['currentEmployer']) || $_POST['currentEmployer'] === '')
		{
			$ok = false;
		}
		else
		{
			$varCurrentEmployer = $_POST['currentEmployer'];
		}
		
		if (isset($_POST['positionTitle']) || $_POST['positionTitle'] === '')
		{
			$ok = false;
		}
		else
		{
			$varPositionTitle = $_POST['positionTitle'];
		}
		
		if (isset($_POST['maritalStatus']) || $_POST['maritalStatus'] === '')
		{
			$ok = false;
		}
		else
		{
			$varMaritalStatus = $_POST['maritalStatus'];
		}
		
		if (isset($_POST['spouseFirstName']) || $_POST['spouseFirstName'] === '')
		{
			$ok = false;
		}
		else
		{
			$varSpouseFirstName = $_POST['spouseFirstName'];
		}
		
		if (isset($_POST['spouseFirstName']) || $_POST['spouseFirstName'] === '')
		{
			$ok = false;
		}
		else
		{
			$varSpouseLastName = $_POST['spouseLastName'];
		}
		
		//stopped
		
		
		
		
	}
	
	
	
 ?>
  
    

</body>
</html>