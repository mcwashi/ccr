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
	if(isset($_GET['id']) && ctype_digit($_GET['id']))
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
<title>Update</title>
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

<?php
	
	$varFirstName = '';
	$varLastName = '';
	$varMiddleName = '';
	$varMaidenName = '';
	$varAliasName = '';
	$varBirthDate = '';
	$varEmail = '';
	$varCellPhone = '';
	$varWorkPhone = '';
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
	$varForeclosure = '';
	$varForeclosureYear = '';
    $varForeclosureYear = '';
    $varPreviousHomeAddress = '';
    $varPreviousHomeCity = '';
    $varPreviousHomeState = '';
	$varEmail2 = '';
	$varMortgagePayment = '';
    $varBirthCity = '';
	$varPassword = '';
			
	//if (isset($_POST['submit']))
	if($_POST['formSubmit'] == "Submit")
	{
		    $varFirstName = $_POST['firstName'];
      		$varLastName = $_POST['lastName'];
       		$varMiddleName = $_POST['middleName'];
			$varMaidenName = $_POST['maidenName'];
			$varAliasName = $_POST['aliasName'];
			$varBirthDate = $_POST['birthDate'];
			$varEmail = $_POST['email'];
		    $varCellPhone = $_POST['cellPhone'];
		    $varWorkPhone = $_POST['workPhone'];
			$varSsn1 = $_POST['ssn1'];
			$varSsn2 = $_POST['ssn2'];
			$varSsn3 = $_POST['ssn3'];
			$varHomeAddress = $_POST['homeAddress'];
			$varHomeCity = $_POST['homeCity'];
			$varHomeState = $_POST['homeState'];
			$varMonthsAtResidence = $_POST['monthsAtResidence'];
			$varYearsAtResidence = $_POST['yearsAtResidence'];
			$varCurrentEmployer = $_POST['currentEmployer'];
			$varPositionTitle = $_POST['positionTitle'];
			$varMaritalStatus = $_POST['maritalStatus'];
			$varSpouseFirstName = $_POST['spouseFirstName'];
			$varSpouseLastName = $_POST['spouseLastName'];
			$varSpouseMiddleName = $_POST['spouseMiddleName'];
			$varSpouseMaidenName = $_POST['spouseMaidenName'];
			$varSpouseAliasName = $_POST['spouseAliasName'];
			$varSpouseBirthDate = $_POST['spouseBirthDate'];
			$varSpouseSsn1 = $_POST['spouseSsn1'];
			$varSpouseSsn2 = $_POST['spouseSsn2'];
			$varSpouseSsn3 = $_POST['spouseSsn3'];
			$varDeclaredBankruptcy = $_POST['declaredBankruptcy'];
			$varDeclaredBankruptcyYear = $_POST['declaredBankruptcyYear'];
			$varRepossession = $_POST['repossession'];
			$varRepossessionYear = $_POST['repossessionYear'];
			$varForeclosure = $_POST['foreclosure'];
			$varForeclosureYear = $_POST['foreclosureYear'];
		    $varPreviousHomeAddress = $_POST['previousHomeAddress'];
            $varPreviousHomeCity = $_POST['previousHomeCity'];
            $varPreviousHomeState = $_POST['previousHomeState'];
	        $varEmail2 = $_POST['email2'];
	        $varMortgagePayment = $_POST['mortgagePayment'];
            $varBirthCity = $_POST['birthCity'];
			$varPassword = $_POST['password'];
		
		
		

			
			$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			$sql = sprintf("Update Persons SET 
			FirstName = '%s', 
			LastName = '%s', 
			MiddleName = '%s',
		    MaidenName = '%s',
		    AliasName = '%s',
			BirthDate = '%s',
			Email = '%s',
			CellPhone = '%s',
			WorkPhone = '%s',
			SSN1 = '%s',
			SSN2 = '%s',
			SSN3 = '%s',
			HomeAddress = '%s',
			HomeCity = '%s',
			HomeState = '%s',
			YearsAtResidence = '%s',
			MonthsAtResidence = '%s',
			CurrentEmployer = '%s',
			PositionTitle = '%s',
			MaritalStatus = '%s',
			SpouseFirstName = '%s',
			SpouseLastName = '%s',
			SpouseMiddleName = '%s', 
			SpouseMaidenName = '%s',
			SpouseAliasName = '%s',
			SpouseBirthDate = '%s',
			SpouseSSN1 = '%s',
			SpouseSSN2 = '%s',
			SpouseSSN3 = '%s',
			DeclaredBankRuptcy = '%s',
			DeclaredBankRuptcyYear = '%s',
			Repossession = '%s',
			RepossessionYear = '%s',
			Foreclosure = '%s',
			ForeclosureYear = '%s',
			PreviousHomeAddress = '%s',
			PreviousHomeCity = '%s',
			PreviousHomeState= '%s',
			Email2 = '%s',
			MortgagePayment= '%s',
			BirthCity= '%s',
			Password= '%s'
			
			WHERE PersonId='%s'", 
			mysqli_real_escape_string($db, $varFirstName),
			mysqli_real_escape_string($db, $varLastName),
			mysqli_real_escape_string($db, $varMiddleName),
			mysqli_real_escape_string($db, $varMaidenName),
			mysqli_real_escape_string($db, $varAliasName ),
			mysqli_real_escape_string($db, $varBirthDate ),
			mysqli_real_escape_string($db, $varEmail),
			mysqli_real_escape_string($db, $varCellPhone),
			mysqli_real_escape_string($db, $varHomePhone),
			mysqli_real_escape_string($db, $varSsn1),
			mysqli_real_escape_string($db, $varSsn2),
			mysqli_real_escape_string($db, $varSsn3),
			mysqli_real_escape_string($db, $varHomeAddress),
			mysqli_real_escape_string($db, $varHomeCity),
			mysqli_real_escape_string($db, $varHomeState),
			mysqli_real_escape_string($db, $varMonthsAtResidence),
			mysqli_real_escape_string($db, $varYearsAtResidence),
			mysqli_real_escape_string($db, $varCurrentEmployer ),
			mysqli_real_escape_string($db, $varPositionTitle),
			mysqli_real_escape_string($db, $varMaritalStatus),
			mysqli_real_escape_string($db, $varSpouseFirstName),
			mysqli_real_escape_string($db, $varSpouseLastName),
			mysqli_real_escape_string($db, $varSpouseMiddleName),
			mysqli_real_escape_string($db, $varSpouseMaidenName),
			mysqli_real_escape_string($db, $varSpouseAliasName),
			mysqli_real_escape_string($db, $varSpouseBirthDate),
			mysqli_real_escape_string($db, $varSpouseSsn1),
			mysqli_real_escape_string($db, $varSpouseSsn2),
			mysqli_real_escape_string($db, $varSpouseSsn3),
			mysqli_real_escape_string($db, $varDeclaredBankruptcy),
			mysqli_real_escape_string($db, $varDeclaredBankruptcyYear),
			mysqli_real_escape_string($db, $varRepossession),
			mysqli_real_escape_string($db, $varRepossessionYear),
			mysqli_real_escape_string($db, $varForeclosure),
			mysqli_real_escape_string($db, $varForeclosureYear),
			mysqli_real_escape_string($db, $varPreviousHomeAddress),
		    mysqli_real_escape_string($db, $varPreviousHomeCity),
		    mysqli_real_escape_string($db, $varPreviousHomeState),
			mysqli_real_escape_string($db, $varEmail2),
			mysqli_real_escape_string($db, $varMortgagePayment),
		    mysqli_real_escape_string($db, $varBirthCity),
			mysqli_real_escape_string($db, $varPassword),
			$id
			);
			//echo $varMiddleName;
			mysqli_query($db, $sql);
			echo '<p>User updated.</p>';
			mysqli_close($db);
			
		
	}
	else
		{
			//echo "you makde it here";
			$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			$sql = sprintf('SELECT * FROM Persons WHERE PersonId=%s', $id);
			$results = mysqli_query($db, $sql);
			
			foreach($results as $row)
			{
				$varFirstName = $row['FirstName'];
				$varLastName = $row['LastName'];
				$varMiddleName = $row['MiddleName'];
				$varMaidenName = $row['MaidenName'];
				$varAliasName = $row['AliasName'];
				$varBirthDate = $row['BirthDate'];
				$varEmail = $row['Email'];
				$varCellPhone = $row['CellPhone'];
				$varWorkPhone = $row['WorkPhone'];
				$varSsn1 = $row['SSN1'];
				$varSsn2 = $row['SSN2'];
				$varSsn3 = $row['SSN3'];
				$varHomeAddress = $row['HomeAddress'];
				$varHomeCity = $row['HomeCity'];
				$varHomeState = $row['HomeState'];
				$varMonthsAtResidence = $row['MonthsAtResidence'];
				$varYearsAtResidence = $row['YearsAtResidence'];
				$varCurrentEmployer = $row['CurrentEmployer'];
				$varPositionTitle = $row['PositionTitle'];
				$varMaritalStatus = $row['MaritalStatus'];
				$varSpouseFirstName = $row['SpouseFirstName'];
				$varSpouseLastName = $row['SpouseLastName'];
				$varSpouseMiddleName = $row['SpouseMiddleName'];
				$varSpouseMaidenName = $row['SpouseMaidenName'];
				$varSpouseAliasName = $row['SpouseAliasName'];
				$varSpouseBirthDate = $row['SpouseBirthDate'];
				$varSpouseSsn1 = $row['SpouseSSN1'];
				$varSpouseSsn2 = $row['SpouseSSN2'];
				$varSpouseSsn3 = $row['SpouseSSN3'];
				$varDeclaredBankruptcy = $row['DeclaredBankruptcy'];
				$varDeclaredBankruptcyYear = $row['DeclaredBankruptcyYear'];
				$varRepossession = $row['Repossession'];
				$varRepossessionYear = $row['RepossessionYear'];
				$varForeclosure = $row['Foreclosure'];
				$varForeclosureYear = $row['ForeclosureYear'];
				$varPreviousHomeAddress = $row['PreviousHomeAddress'];
				$varPreviousHomeCity = $row['PreviousHomeCity'];
				$varPreviousHomeState = $row['PreviousHomeState'];
				$varEmail2 = $row['Email2'];
				$varMortgagePayment = $row['MortgagePayment'];
				$varBirthCity = $row['BirthCity'];
				$varPassword = $row['Password'];

			}
			mysqli_close($db);
			//echo "you are here";
		}
 ?>
 
 	<form action="" method="post">
                <table  id="bodyFont" border="0">
                	<tr>
                    	<td  width="100"><label for="firstName">First Name</label></td>
                        <td><input type="text" name="firstName" maxlength="50" value="<?php 
						echo htmlspecialchars($varFirstName);
						?>"/></td>
                        <td  width="100"><label for="lastName">Last Name</label></td>
                        <td><input type="text" name="lastName" maxlength="50" value="<?php 
						echo htmlspecialchars($varLastName);
						?>"/></td>
                        <td width="100"><label for="middleName">Middle Name</label></td>
                        <td><input type="text" name="middleName" maxlength="50" value="<?php 
						echo htmlspecialchars($varMiddleName);
						?>"/></td>

                    </tr>
                    <tr>
                    	<td  width="100"><label for="email">Email</label>
                       <br><br>
                     <label for="email2">Email 2</label>
                        </td>
                        <td><input type="text" name="email" maxlength="30" value="<?php 
						echo htmlspecialchars($varEmail);
						?>"/>
                       <br><br>
                      <input type="text" name="email2" maxlength="30" 
                      value="<?php 
						echo htmlspecialchars($varEmail2);
						?>"/>
                       </td>
                        <td  width="100"><label for="cellPhone">Cell Phone</label></td>
                        <td><input type="text" name="cellPhone" maxlength="10" value="<?php 
						echo htmlspecialchars($varCellPhone);
						?>"/></td>
                        <td width="100"><label for="workPhone">Work Phone</label></td>
                        <td><input type="text" name="workPhone" maxlength="10" value="<?php 
						echo htmlspecialchars($varWorkPhone);
						?>"/></td>

                    </tr>
                    <tr>
                    	<td><label>Maiden Name if Marrried:</label></td>
                        <td><input type="text" name="maidenName" maxlength="50" value="<?php 
						echo htmlspecialchars($varMaidenName);
						?>"/></td>
                        <td><label> Alias or other name used:</label></td>
                        <td><input type="text" name="aliasName" maxlength="50" value="<?php 
						echo htmlspecialchars($varAliasName);
						?>"/></td>
                        <td><label>Date of Birth:</label></td>
                        <td><input type="text" id="datePicker" name="birthDate" maxlength="50" value="<?php 
						echo htmlspecialchars($varBirthDate);
						?>"/></td>
                    </tr>
                    <tr>
                    	<td><label>SSN:</label></td>
                        <td colspan="5"><input type="text" name="ssn1" maxlength="3" value="<?php 
						echo htmlspecialchars($varSsn1);
						?>"/>-
                        <input type="text" name="ssn2" maxlength="2" value="<?php 
						echo htmlspecialchars($varSsn2);
						?>"/>-
                        <input type="text" name="ssn3" maxlength="4" value="<?php 
						echo htmlspecialchars($varSsn3);
						?>"/></td>
                     </tr>
                      <tr>
                    	<td><label>Home Address:</label></td>
                        <td><input type="text" name="homeAddress" value="<?php 
						echo htmlspecialchars($varHomeAddress);
						?>"/></td>
                        <td><label>City</label></td>
                        <td align="left"><input type="text" name="homeCity" value="<?php 
						echo htmlspecialchars($varHomeCity);
						?>"/></td>
                        <td><label>State</label></td>
                        <td>
                       <select name="homeState">
                       		<option <?php if ($varHomeState == "" ) echo 'selected' ; ?> value=""></option>
                            
                            <option <?php if ($varHomeState == "AL" ) echo 'selected' ; ?> value="AL">Alabama</option>
                            <option <?php if ($varHomeState == "AK" ) echo 'selected' ; ?> value="AK">Alaska</option>
                            <option <?php if ($varHomeState == "AZ" ) echo 'selected' ; ?> value="AZ">Arizona</option>
                            <option <?php if ($varHomeState == "AR" ) echo 'selected' ; ?> value="AR">Arkansas</option>
                            <option <?php if ($varHomeState == "CA" ) echo 'selected' ; ?> value="CA">California</option>
                            <option <?php if ($varHomeState == "IL" ) echo 'selected' ; ?> value="IL">Colorado</option>
                            <option <?php if ($varHomeState == "CT" ) echo 'selected' ; ?> value="CT">Connecticut</option>
                            <option <?php if ($varHomeState == "DE" ) echo 'selected' ; ?> value="DE">Delaware</option>
                            <option <?php if ($varHomeState == "DC" ) echo 'selected' ; ?> value="DC">District Of Columbia</option>
                            <option <?php if ($varHomeState == "FL" ) echo 'selected' ; ?> value="FL">Florida</option>
                            <option <?php if ($varHomeState == "GA" ) echo 'selected' ; ?> value="GA">Georgia</option>
                            <option <?php if ($varHomeState == "HI" ) echo 'selected' ; ?> value="HI">Hawaii</option>
                            <option <?php if ($varHomeState == "ID" ) echo 'selected' ; ?> value="ID">Idaho</option>
                            <option <?php if ($varHomeState == "IL" ) echo 'selected' ; ?> value="IL">Illinois</option>
                            
                            
                            <option <?php if ($varHomeState == "IN" ) echo 'selected' ; ?> value="IN">Indiana</option>
                            <option <?php if ($varHomeState == "IA" ) echo 'selected' ; ?> value="IA">Iowa</option>
                            <option <?php if ($varHomeState == "KS" ) echo 'selected' ; ?> value="KS">Kansas</option>
                            <option <?php if ($varHomeState == "KY" ) echo 'selected' ; ?> value="KY">Kentucky</option>
                            <option <?php if ($varHomeState == "LA" ) echo 'selected' ; ?> value="LA">Louisiana</option>
                            <option <?php if ($varHomeState == "ME" ) echo 'selected' ; ?> value="ME">Maine</option>
                            <option <?php if ($varHomeState == "MD" ) echo 'selected' ; ?> value="MD">Maryland</option>
                            <option <?php if ($varHomeState == "MA" ) echo 'selected' ; ?> value="MA">Massachusetts</option>
                            <option <?php if ($varHomeState == "MI" ) echo 'selected' ; ?> value="MI">Michigan</option>
                            <option <?php if ($varHomeState == "MN" ) echo 'selected' ; ?> value="MN">Minnesota</option>
                            <option <?php if ($varHomeState == "MS" ) echo 'selected' ; ?> value="MS">Mississippi</option>
                            <option <?php if ($varHomeState == "MO" ) echo 'selected' ; ?> value="MO">Missouri</option>
                            <option <?php if ($varHomeState == "MT" ) echo 'selected' ; ?> value="MT">Montana</option>
                            <option <?php if ($varHomeState == "NE" ) echo 'selected' ; ?> value="NE">Nebraska</option>
                            <option <?php if ($varHomeState == "NV" ) echo 'selected' ; ?> value="NV">Nevada</option>
                            <option <?php if ($varHomeState == "NH" ) echo 'selected' ; ?> value="NH">New Hampshire</option>
                            <option <?php if ($varHomeState == "NJ" ) echo 'selected' ; ?> value="NJ">New Jersey</option>
                            <option <?php if ($varHomeState == "NM" ) echo 'selected' ; ?> value="NM">New Mexico</option>
                            <option <?php if ($varHomeState == "NY" ) echo 'selected' ; ?> value="NY">New York</option>
                            <option <?php if ($varHomeState == "NC" ) echo 'selected' ; ?> value="NC">North Carolina</option>
                            <option <?php if ($varHomeState == "ND" ) echo 'selected' ; ?> value="ND">North Dakota</option>
                            <option <?php if ($varHomeState == "OH" ) echo 'selected' ; ?> value="OH">Ohio</option>
                            <option <?php if ($varHomeState == "OK" ) echo 'selected' ; ?> value="OK">Oklahoma</option>
                            <option <?php if ($varHomeState == "OR" ) echo 'selected' ; ?> value="OR">Oregon</option>
                            <option <?php if ($varHomeState == "PA" ) echo 'selected' ; ?> value="PA">Pennsylvania</option>
                            <option <?php if ($varHomeState == "RI" ) echo 'selected' ; ?> value="RI">Rhode Island</option>
                            <option <?php if ($varHomeState == "SC" ) echo 'selected' ; ?> value="SC">South Carolina</option>
                            <option <?php if ($varHomeState == "SD" ) echo 'selected' ; ?> value="SD">South Dakota</option>
                            <option <?php if ($varHomeState == "TN" ) echo 'selected' ; ?> value="TN">Tennessee</option>
                            <option <?php if ($varHomeState == "TX" ) echo 'selected' ; ?> value="TX">Texas</option>
                            <option <?php if ($varHomeState == "UT" ) echo 'selected' ; ?> value="UT">Utah</option>
                            <option <?php if ($varHomeState == "VT" ) echo 'selected' ; ?> value="VT">Vermont</option>
                            <option <?php if ($varHomeState == "VA" ) echo 'selected' ; ?> value="VA">Virginia</option>
                            <option <?php if ($varHomeState == "WA" ) echo 'selected' ; ?> value="WA">Washington</option>
                            <option <?php if ($varHomeState == "WV" ) echo 'selected' ; ?> value="WV">West Virginia</option>
                            <option <?php if ($varHomeState == "WI" ) echo 'selected' ; ?> value="WI">Wisconsin</option>
                            <option <?php if ($varHomeState == "WY" ) echo 'selected' ; ?> value="WY">Wyoming</option>
                        </select>
                        </td>
                     </tr>
                     
                     
                     <!--Previous Home address beginning -->
                      <tr>
                    	<td><label>Previous Home Address:</label></td>
                        <td><input type="text" name="previousHomeAddress" value="<?php 
						echo htmlspecialchars($varPreviousHomeAddress);
						?>"/></td>
                        <td><label>Previous Home City</label></td>
                        <td align="left"><input type="text" name="previousHomeCity" value="<?php 
						echo htmlspecialchars($varPreviousHomeCity);
						?>"/></td>
                        <td><label>Previous State</label></td>
                        <td>
                       <select name="previousHomeState">
                       		<option <?php if ($varPreviousHomeState == "" ) echo 'selected' ; ?> value=""></option>
                            
                            <option <?php if ($varPreviousHomeState == "AL" ) echo 'selected' ; ?> value="AL">Alabama</option>
                            <option <?php if ($varPreviousHomeState == "AK" ) echo 'selected' ; ?> value="AK">Alaska</option>
                            <option <?php if ($varPreviousHomeState == "AZ" ) echo 'selected' ; ?> value="AZ">Arizona</option>
                            <option <?php if ($varPreviousHomeState == "AR" ) echo 'selected' ; ?> value="AR">Arkansas</option>
                            <option <?php if ($varPreviousHomeState == "CA" ) echo 'selected' ; ?> value="CA">California</option>
                            <option <?php if ($varPreviousHomeState == "IL" ) echo 'selected' ; ?> value="IL">Colorado</option>
                            <option <?php if ($varPreviousHomeState == "CT" ) echo 'selected' ; ?> value="CT">Connecticut</option>
                            <option <?php if ($varPreviousHomeState == "DE" ) echo 'selected' ; ?> value="DE">Delaware</option>
                            <option <?php if ($varPreviousHomeState == "DC" ) echo 'selected' ; ?> value="DC">District Of Columbia</option>
                            <option <?php if ($varPreviousHomeState == "FL" ) echo 'selected' ; ?> value="FL">Florida</option>
                            <option <?php if ($varPreviousHomeState == "GA" ) echo 'selected' ; ?> value="GA">Georgia</option>
                            <option <?php if ($varPreviousHomeState == "HI" ) echo 'selected' ; ?> value="HI">Hawaii</option>
                            <option <?php if ($varPreviousHomeState == "ID" ) echo 'selected' ; ?> value="ID">Idaho</option>
                            <option <?php if ($varPreviousHomeState == "IL" ) echo 'selected' ; ?> value="IL">Illinois</option>
                            
                            
                            <option <?php if ($varPreviousHomeState == "IN" ) echo 'selected' ; ?> value="IN">Indiana</option>
                            <option <?php if ($varPreviousHomeState == "IA" ) echo 'selected' ; ?> value="IA">Iowa</option>
                            <option <?php if ($varPreviousHomeState == "KS" ) echo 'selected' ; ?> value="KS">Kansas</option>
                            <option <?php if ($varPreviousHomeState == "KY" ) echo 'selected' ; ?> value="KY">Kentucky</option>
                            <option <?php if ($varPreviousHomeState == "LA" ) echo 'selected' ; ?> value="LA">Louisiana</option>
                            <option <?php if ($varPreviousHomeState == "ME" ) echo 'selected' ; ?> value="ME">Maine</option>
                            <option <?php if ($varPreviousHomeState == "MD" ) echo 'selected' ; ?> value="MD">Maryland</option>
                            <option <?php if ($varPreviousHomeState == "MA" ) echo 'selected' ; ?> value="MA">Massachusetts</option>
                            <option <?php if ($varPreviousHomeState == "MI" ) echo 'selected' ; ?> value="MI">Michigan</option>
                            <option <?php if ($varPreviousHomeState == "MN" ) echo 'selected' ; ?> value="MN">Minnesota</option>
                            <option <?php if ($varPreviousHomeState == "MS" ) echo 'selected' ; ?> value="MS">Mississippi</option>
                            <option <?php if ($varPreviousHomeState == "MO" ) echo 'selected' ; ?> value="MO">Missouri</option>
                            <option <?php if ($varPreviousHomeState == "MT" ) echo 'selected' ; ?> value="MT">Montana</option>
                            <option <?php if ($varPreviousHomeState == "NE" ) echo 'selected' ; ?> value="NE">Nebraska</option>
                            <option <?php if ($varPreviousHomeState == "NV" ) echo 'selected' ; ?> value="NV">Nevada</option>
                            <option <?php if ($varPreviousHomeState == "NH" ) echo 'selected' ; ?> value="NH">New Hampshire</option>
                            <option <?php if ($varPreviousHomeState == "NJ" ) echo 'selected' ; ?> value="NJ">New Jersey</option>
                            <option <?php if ($varPreviousHomeState == "NM" ) echo 'selected' ; ?> value="NM">New Mexico</option>
                            <option <?php if ($varPreviousHomeState == "NY" ) echo 'selected' ; ?> value="NY">New York</option>
                            <option <?php if ($varPreviousHomeState == "NC" ) echo 'selected' ; ?> value="NC">North Carolina</option>
                            <option <?php if ($varPreviousHomeState == "ND" ) echo 'selected' ; ?> value="ND">North Dakota</option>
                            <option <?php if ($varPreviousHomeState == "OH" ) echo 'selected' ; ?> value="OH">Ohio</option>
                            <option <?php if ($varPreviousHomeState == "OK" ) echo 'selected' ; ?> value="OK">Oklahoma</option>
                            <option <?php if ($varPreviousHomeState == "OR" ) echo 'selected' ; ?> value="OR">Oregon</option>
                            <option <?php if ($varPreviousHomeState == "PA" ) echo 'selected' ; ?> value="PA">Pennsylvania</option>
                            <option <?php if ($varPreviousHomeState == "RI" ) echo 'selected' ; ?> value="RI">Rhode Island</option>
                            <option <?php if ($varPreviousHomeState == "SC" ) echo 'selected' ; ?> value="SC">South Carolina</option>
                            <option <?php if ($varPreviousHomeState == "SD" ) echo 'selected' ; ?> value="SD">South Dakota</option>
                            <option <?php if ($varPreviousHomeState == "TN" ) echo 'selected' ; ?> value="TN">Tennessee</option>
                            <option <?php if ($varPreviousHomeState == "TX" ) echo 'selected' ; ?> value="TX">Texas</option>
                            <option <?php if ($varPreviousHomeState == "UT" ) echo 'selected' ; ?> value="UT">Utah</option>
                            <option <?php if ($varPreviousHomeState == "VT" ) echo 'selected' ; ?> value="VT">Vermont</option>
                            <option <?php if ($varPreviousHomeState == "VA" ) echo 'selected' ; ?> value="VA">Virginia</option>
                            <option <?php if ($varPreviousHomeState == "WA" ) echo 'selected' ; ?> value="WA">Washington</option>
                            <option <?php if ($varPreviousHomeState == "WV" ) echo 'selected' ; ?> value="WV">West Virginia</option>
                            <option <?php if ($varPreviousHomeState == "WI" ) echo 'selected' ; ?> value="WI">Wisconsin</option>
                            <option <?php if ($varPreviousHomeState == "WY" ) echo 'selected' ; ?> value="WY">Wyoming</option>
                        </select>
                        </td>
                     </tr>
                     
                     
                     
                     
                     
                     <!--Previous Home address ending -->
                     
                     
                     
                     <tr>
                    	<td><label>Time at Residence:</label></td>
                        <td colspan="5">
                        <input type="text" name="yearsAtResidence" value="<?php 
						echo htmlspecialchars($varYearsAtResidence);
						?>"/>
                         Years  <input type="text" name="monthsAtResidence" value="<?php 
						echo htmlspecialchars($varMonthsAtResidence);
						?>"/> Months</td>
                     </tr>
                     <tr>
                    	<td><label>Current Employer:</label></td>
                        <td>
                        <input type="text" name="currentEmployer" value="<?php 
						echo htmlspecialchars($varCurrentEmployer);
						?>"/>
                        </td>
                        <td><label>Title of Position:</label></td>
                        <td><input type="text" name="positionTitle" value="<?php 
						echo htmlspecialchars($varPositionTitle);
						?>"/></td>
                        <td><label>Marital Status:</label></td>
                        <td><input type="radio" name="maritalStatus" value="Single"
								<?php
                                if ($varMaritalStatus === 'Single')
                                    {
                                        echo ' checked';
                                    }
                                ?>
                                > Single<br>
  							<input type="radio" name="maritalStatus" value="Married"
                            	<?php
                                if ($varMaritalStatus === 'Married')
                                    {
                                        echo ' checked';
                                    }
                                ?>
                                >Married<br>
  							<input type="radio" name="maritalStatus" value="Seperated"
                            	<?php
                                if ($varMaritalStatus === 'Seperated')
                                    {
                                        echo ' checked';
                                    }
                                ?>
                                >Seperated<br>
                            <input type="radio" name="maritalStatus" value="Divorced"
                            	<?php
                                if ($varMaritalStatus === 'Divorced')
                                    {
                                        echo ' checked';
                                    }
                                ?>
                                >Divorced
                        </td>
                     </tr>
                     <tr>
                     	<td colspan="6">If married, provide spouse information:</td>

                     </tr>

                     <tr>
                     	<td>
                        <label for="spouseFirstName">First Name</label></td>
                        <td><input type="text" name="spouseFirstName" value="<?php 
						echo htmlspecialchars($varSpouseFirstName);
						?>"/></td>
                        <td  width="100"><label for="spouseLastName">Last Name</label></td>
                        <td><input type="text" name="spouseLastName" value="<?php 
						echo htmlspecialchars($varSpouseLastName);
						?>"/></td>
                        <td width="100"><label for="spouseMiddleName">Middle Name</label></td>
                        <td><input type="text" name="spouseMiddleName" value="<?php 
						echo htmlspecialchars($varSpouseMiddleName);
						?>"/></td>
                        <br>
                       </td>
                     </tr>
                     <tr>
                    	<td><label>Maiden Name if married :</label></td>
                        <td>
                        <input type="text" name="spouseMaidenName" value="<?php 
						echo htmlspecialchars($varSpouseMaidenName);
						?>"/>
                        </td>
                        <td><label> Alias or other name used:</label></td>
                        <td>
                        <input type="text" name="spouseAliasName" value="<?php 
						echo htmlspecialchars($varSpouseMaidenName);
						?>"/>
                        </td>
                        <td><label>Date of Birth:</label></td>
                        <td>
                        <input type="text" name="spouseBirthDate" id="datepicker" value="<?php 
						echo htmlspecialchars($varSpouseBirthDate);
						?>"/>
                        </td>
                    </tr>
                    <tr>
                    	<td><label>Spouse SSN:</label></td>
                        <td colspan="5">
                        <input type="text" name="spouseSsn1" maxlength="3" value="<?php 
						echo htmlspecialchars($varSpourseSsn1);?>"/>-
                        <input type="text" name="spouseSsn2" maxlength="2" value="<?php 
						echo htmlspecialchars($varSpourseSsn2);?>"/>-
                        <input type="text" name="spouseSsn3" maxlength="4" value="<?php 
						echo htmlspecialchars($varSpourseSsn3);?>"/>-</td>
                     </tr>
                     <tr>
                     	<td><label>Have you ever declared Bankruptcy?</label>
                        <input type="radio" name="declaredBankruptcy" value="1"
								<?php
                                if ($varDeclaredBankruptcy === '1')
                                    {
                                        echo ' checked';
                                    }
                                ?>
                                />Yes
                         <input type="radio" name="declaredBankruptcy" value="0"
								<?php
                                if ($varDeclaredBankruptcy === '0')
                                    {
                                        echo ' checked';
                                    }
                                ?>
                                /> No
                        </td>
                        <td>
                        <label>If so, what year? </label>
                         <input type="text" name="declaredBankruptcyYear" maxlength="4" value="<?php 
						echo htmlspecialchars($varDeclaredBankruptcyYear);
						?>"/>
                        
                        </td>


                        <td><label>Have you ever had a repossession?</label>
                         <input type="radio" name="repossession" value="1"
								<?php
                                if ($varRepossession === '1')
                                    {
                                        echo ' checked';
                                    }
                                ?>
                                />Yes
                         <input type="radio" name="repossession" value="0"
								<?php
                                if ($varRepossession === '0')
                                    {
                                        echo ' checked';
                                    }
                                ?>
                                /> No
                       
                        </td>
                        <td>
                        <label>If so, what year? </label>
                          <input type="text" name="repossessionYear" maxlength="4" value="<?php 
						echo htmlspecialchars($varRepossessionYear);
						?>"/>
                        
                       
                        </td>


                        <td><label>Have you ever had a foreclosure?</label>
                         <input type="radio" name="foreclosure" value="1"
								<?php
                                if ($varForeclosure=== '1')
                                    {
                                        echo ' checked';
                                    }
                                ?>
                                />Yes
                         <input type="radio" name="foreclosure" value="0"
								<?php
                                if ($varForeclosure === '0')
                                    {
                                        echo ' checked';
                                    }
                                ?>
                                /> No
                        
                        </td>
                        <td>
                        <label>If so, what year? </label>
                         <input type="text" name="foreclosureYear" maxlength="4" value="<?php 
						echo htmlspecialchars($varForeclosureYear);
						?>"/>
                        
                        </td>
                      </tr>
                      
                       <tr>
                    	<td  width="100"><label for="mortgagePayment">Mortgage Payment</label></td>
                        <td>
                        
                         <input type="text" name="mortgagePayment" maxlength="50" value="<?php 
						echo htmlspecialchars($varMortgagePayment);
						?>"/>
                        
                        
                        </td>
                        <td  width="100"><label for="birthCity">Birth City</label></td>
                        <td>
                        
                         <input type="text" name="birthCity" maxlength="50" value="<?php 
						echo htmlspecialchars($varBirthCity);
						?>"/>
                        
                        </td>
                        <td width="100"><label for="password">Password</label></td>
                        <td>
                        
                         <input type="text" name="password" maxlength="50" value="<?php 
						echo htmlspecialchars($varPassword);
						?>"/>
                        
                       </td>

                    </tr>
                      
                      
                      
                      <tr>
                    	<td colspan="3"><input type="submit" name="formSubmit" value="Submit" /></td>
                        <td colspan="3"><input type="cancel" value="Cancel"></td>
                        </tr>


                </table>
                </form>
                
   </td>
    <tr>
    	<td height="10px" bgcolor="F06D80"></td>
    </tr>
    


</table>
</center>


  
    

</body>
</html>