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
			$varSsn1 = $_POST['ssn2'];
			$varSsn1 = $_POST['ssn3'];
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
			ForeclosureYear = '%s'
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
			}
			mysqli_close($db);
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
                    	<td  width="100"><label for="email">Email</label></td>
                        <td><input type="text" name="email" maxlength="30" value="<?php 
						echo htmlspecialchars($varEmail);
						?>"/></td>
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
                        <select>
                            <option value="<?php 
						    echo htmlspecialchars($varHomeState);
						    ?>" selected/>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                        </td>
                     </tr>
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