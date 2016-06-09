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
	if($_POST['formSubmit'] == "Submit")
    {
		$errorMessage = "";
		if(empty($_POST['firstName']))
        {
			$errorMessage .= "<li>You forgot to enter First Name!</li>";
		}
		if(empty($_POST['lastName']))
        {
			$errorMessage .= "<li>You forgot to enter a Last Name!</li>";
		}
		if(empty($_POST['middleName']))
        {
			$errorMessage .= "<li>You forgot to select your Middle Name!</li>";
		}
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
		$varSpouseBirthDate = $_POST['spouseBirthDate '];
		$varSpouseSsn1 = $_POST['spouseSsn1'];
		$varSpouseSsn2 = $_POST['spouseSsn2'];
		$varSpouseSsn3 = $_POST['spouseSsn3'];
		$varDeclaredBankruptcy = $_POST['declaredBankruptcy'];
		$varDeclaredBankruptcyYear = $_POST['declaredBankruptcyYear'];
		$varRepossession = $_POST['repossession'];
		$varRepossessionYear = $_POST['repossessionYear'];
		//$servername = "";
		//$username = "";
		//$password = "";
		if(empty($errorMessage))
        {
			//check on creating a ini file to store the username and password
			//$db = mysql_connect("localhost","root","sucram#4963");
			//if(!$db) die("Error connecting to MySQL database.");
			//mysql_select_db("CICR" ,$db);
			mysql_select_db(DB_NAME, $db);
			$sql = "INSERT INTO Persons (
			
							firstName,
							lastName,
							MiddleName,
			 				maidenName,
							aliasName,
							birthDate,
							email,
							cellPhone,
							workPhone,
							ssn1,
							ssn2,
							ssn3,
							homeAddress,
							homeCity,
							homeState,
							monthsAtResidence,
							yearsAtResidence,
							currentEmployer,
							positionTitle,
							maritalStatus,
							spouseFirstName,
							spouseLastName,
							spouseMiddleName,
							spouseMaidenName,
							spouseAliasName,
							spouseBirthDate,
							spouseSsn1,
							spouseSsn2,
							spouseSsn3,
							declaredBankruptcy,
							declaredBankruptcyYear,
							repossession,
							repossessionYear 
			
			) VALUES (".
						    PrepSQL($varFirstName) . ", " .
							PrepSQL($varLastName) . ", " .
							PrepSQL($varMiddleName) . ", " .
							PrepSQL($varMaidenName) . ", " .
							PrepSQL($varAliasName) . ", " .
							PrepSQL($varBirthDate) . ", " .
							PrepSQL($varEmail) . ", " .
							PrepSQL($varCellPhone) . ", " .
							PrepSQL($varWorkPhone) . ", " .
							PrepSQL($varSsn1) . ", " .
							PrepSQL($varSsn2) . ", " .
							PrepSQL($varSsn3) . ", " .
							PrepSQL($varHomeAddress) . ", " .
							PrepSQL($varHomeCity) . ", " .
							PrepSQL($varHomeState) . ", " .
							PrepSQL($varMonthsAtResidence) . ", " .
							PrepSQL($varYearsAtResidence) . ", " .
							PrepSQL($varCurrentEmployer) . ", " .
							PrepSQL($varPositionTitle) . ", " .
							PrepSQL($varMaritalStatus) . ", " .
							PrepSQL($varSpouseFirstName) . ", " .
							PrepSQL($varSpouseLastName) . ", " .
							PrepSQL($varSpouseMiddleName) . ", " .
							PrepSQL($varSpouseMaidenName) . ", " .
							PrepSQL($varSpouseAliasName) . ", " .
							PrepSQL($varSpouseBirthDate) . ", " .
							PrepSQL($varSpouseSsn1) . ", " .
							PrepSQL($varSpouseSsn2) . ", " .
							PrepSQL($varSpouseSsn3) . ", " .
							PrepSQL($varDeclaredBankruptcy) . ", " .
							PrepSQL($varDeclaredBankruptcyYear) . ", " .
							PrepSQL($varRepossession) . ", " .
							PrepSQL($varRepossessionYear) . ")";
			mysql_query($sql);
     		header("Location: thankyou.html");
			exit();
		}
	}
    // function: PrepSQL()
    // use stripslashes and mysql_real_escape_string PHP functions
    // to sanitize a string for use in an SQL query
    //
    // also puts single quotes around the string
    //
    function PrepSQL($value)
    {
        // Stripslashes
        if(get_magic_quotes_gpc())
        {
            $value = stripslashes($value);
        }
        // Quote
        $value = "'" . mysql_real_escape_string($value) . "'";
        return($value);
    }
?>




<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Log In</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link href="css/styleSheet.css" rel="stylesheet" type="text/css">
<link href="template1/tabcontent.css" rel="stylesheet" type="text/css" />

<script src="tabcontent.js" type="text/javascript"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

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
  <li><a class="active" href="info.php">Capture Information</a></li>
  <li><a href="list.php">Member List</a></li>
  <li><a href="MoreInfo.php">More Information</a></li>
  <li><a href="logout.php" >Logout</a></li>
</ul>
</td>
    </tr>
    <tr>
    	<td valign="top" height="200px" bgcolor="#ffffff" >
                <div class="tabcontents">
                <?php
		    if(!empty($errorMessage))
		    {
			    echo("<p>There was an error with your form:</p>\n");
			    echo("<ul>" . $errorMessage . "</ul>\n");
            }
        ?>


                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <table  id="bodyFont" border="0">
                	<tr>
                    	<td  width="100"><label for="firstName">First Name</label></td>
                        <td><input type="text" name="firstName" maxlength="50" value="<?=$varFirstName;?>"/></td>
                        <td  width="100"><label for="lastName">Last Name</label></td>
                        <td><input type="text" name="lastName" maxlength="50" value="<?=$varLastName;?>"/></td>
                        <td width="100"><label for="middleName">Middle Name</label></td>
                        <td><input type="text" name="middleName" maxlength="50" value="<?=$varMiddleName;?>"/></td>

                    </tr>
                    <tr>
                    <td  width="100"><label for="email">Email</label></td>
                      <td><input type="text" name="email" maxlength="30" value="<?=$varEmail;?>"/></td>
                      <td  width="100"><label for="cellPhone">Cell Phone</label></td>
                      <td><input type="text" name="cellPhone" maxlength="10" value="<?=$varCellPhone;?>"/></td>
                      <td  width="100"><label for="workPhone">Work Phone</label></td>
                      <td><input type="text" name="workPhone" maxlength="10" value="<?=$varWorkPhone;?>"/></td>
                  </tr>
                  
                    <tr>
                    	<td><label>Maiden Name if Marrried:</label></td>
                        <td><input type="text" name="maidenName" maxlength="50" value="<?=$varMaidenName;?>"/></td>
                        <td><label> Alias or other name used:</label></td>
                        <td><input type="text" name="aliasName"></td>
                        <td><label>Date of Birth:</label></td>
                        <td><input type="text"  name="birthDate" value="<?=$varBirthDate;?>"/>
                        (YYYY-MM-DD)
                        </td>
                    </tr>
                    <tr>
                    	<td><label>SSN:</label></td>
                        <td colspan="5"><input type="text" name="ssn1" maxlength="3" value="<?=$varSsn1;?>"/>-
                        <input type="text" name="ssn2" maxlength="2" value="<?=$varSsn2;?>"/>-
                        <input type="text" name="ssn3" maxlength="4" value="<?=$varSsn3;?>"/></td>
                     </tr>
                      <tr>
                    	<td><label>Home Address:</label></td>
                        <td><input type="text" name="homeAddress" value="<?=$varHomeAddress;?>"/></td>
                        <td><label>City</label></td>
                        <td align="left"><input type="text" name="homeCity" value="<?=$varHomeCity;?>"/></td>
                        <td><label>State</label></td>
                        <td>
                        <select name="homeState">
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
                        <td colspan="5"><input type="text" name="yearsAtResidence" value="<?=$varYearsAtResidence;?>"/>
                         Years  <input type="text" name="monthsAtResidence" value="<?=$varMonthsAtResidence;?>"/> Months</td>
                     </tr>
                     <tr>
                    	<td><label>Current Employer:</label></td>
                        <td><input type="text" name="currentEmployer" value="<?=$varCurrentEmployer;?>"/></td>
                        <td><label>Title of Position:</label></td>
                        <td><input type="text" name="positionTitle" value="<?=$varPositionTitle;?>"/></td>
                        <td><label>Marital Status:</label></td>
                        <td><input type="radio" name="maritalStatus" <?php if (isset($varMaritalStatus) && $varMaritalStatus=="Single") echo "checked";?> value="Single"> Single<br>
                        <input type="radio" name="maritalStatus" <?php if (isset($varMaritalStatus) && $varMaritalStatus=="Married") echo "checked";?> value="Married">Married<br>
                        <input type="radio" name="maritalStatus" <?php if (isset($varMaritalStatus) && $varMaritalStatus=="Seperated") echo "checked";?> value="Seperated">Seperated<br>
                        <input type="radio" name="maritalStatus" <?php if (isset($varMaritalStatus) && $varMaritalStatus=="Divorced") echo "checked";?> value="Divorced">Divorced
                        </td>
                     </tr>
                     <tr>
                     	<td colspan="6">If married, provide spouse information:</td>

                     </tr>

                     <tr>
                     	<td>
                        <label for="spouseFirstName">First Name</label></td>
                        <td><input type="text" name="spouseFirstName" value="<?=$varSpouseFirstName;?>"/></td>
                        <td  width="100"><label for="spouseLastName">Last Name</label></td>
                        <td><input type="text" name="spouseLastName" value="<?=$varSpouseLastName;?>"/></td>
                        <td width="100"><label for="spouseMiddleName">Middle Name</label></td>
                        <td><input type="text" name="spouseMiddleName" value="<?=$varSpouseMiddleName;?>"/></td>
                        <br>
                       </td>
                     </tr>
                     <tr>
                    	<td><label>Maiden Name if married :</label></td>
                        <td><input type="text" name="spouseMaidenName" value="<?=$varSpouseMaidenName;?>"/> </td>
                        <td><label> Alias or other name used:</label></td>
                        <td><input type="text" name="spouseAliasName" value="<?=$varSpouseAliasName;?>"/></td>
                        <td><label>Date of Birth:</label></td>
                        <td><input type="text" name="spouseBirthDate" value="<?=$varSpouseBirthDate;?>"/> (YYYY-MM-DD)</td>
                    </tr>
                    <tr>
                    	<td><label>Spouse SSN:</label></td>
                        <td colspan="5"><input type="text" name="spouseSsn1" maxlength="3" value="<?=$varSpouseSsn1;?>"/>-
                        <input type="text" name="spouseSsn2" maxlength="2" value="<?=$varSpouseSsn2;?>"/>-
                        <input type="text" name="spouseSsn3" maxlength="4" value="<?=$varSpouseSsn3;?>"/></td>
                     </tr>
                     <tr>
                     	<td><label>Have you ever declared Bankruptcy?</label>
                        <input type="radio" name="declaredBankruptcy" <?php if (isset($varDeclaredBankruptcy) && $varDeclaredBankruptcy=="1") echo "checked";?> value="1" > Yes
                        <input type="radio" name="declaredBankruptcy" <?php if (isset($varDeclaredBankruptcy) && $varDeclaredBankruptcy=="0") echo "checked";?> value="0"> No
                        </td>
                        <td>
                        <label>If so, what year? </label>
                        <input type="text" name="declaredBankruptcyYear" maxlength="4" value="<?=$varDeclaredBankruptcyYear;?>"/>
                        </td>


                        <td><label>Have you ever had a repossession?</label>
                        <input type="radio" name="repossession" <?php if (isset($varRepossession) && $varRepossession =="1") echo "checked";?> value="1" > Yes
                        <input type="radio" name="repossession" <?php if (isset($varRepossession) && $varRepossession =="0") echo "checked";?> value="0"> No
                        </td>
                        <td>
                        <label>If so, what year? </label>
                        <input type="text" name="repossessionYear" maxlength="4" value="<?=$varRepossessionYear;?>"/>
                        </td>


                        <td><label>Have you ever had a foreclosure?</label>
                        <input type="radio" name="foreclosure" <?php if (isset($varForeclosure) && $varForeclosure =="1") echo "checked";?> value="1" > Yes
                        <input type="radio" name="foreclosure" <?php if (isset($varForeclosure) && $varForeclosure =="0") echo "checked";?> value="0"> No
                        </td>
                        <td>
                        <label>If so, what year? </label>
                        <input type="text" name="foreclosureYear" maxlength="4" value="<?=$varForeclosureYear;?>"/>
                        </td>
                      </tr>
                      <tr>
                    	<td colspan="3"><input type="submit" name="formSubmit" value="Submit" /></td>
                        <td colspan="3"><input type="cancel" value="Cancel"></td>
                        </tr>


                </table>
                </form>
               </div>
             </td>
    <tr>
    	<td height="10px" bgcolor="F06D80"></td>
    </tr>



</table>
</center>


</body>
</html>