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
		
		$servername = "";
		$username = "";
		$password = "";

		if(empty($errorMessage)) 
        {

			//check on creating a ini file to store the username and password
			$db = mysql_connect("","","");

			if(!$db) die("Error connecting to MySQL database.");

			mysql_select_db("CICR" ,$db);



			$sql = "INSERT INTO Persons (FirstName, LastName, MiddleName) VALUES (".

							PrepSQL($varFirstName) . ", " .
							PrepSQL($varLastName) . ", " .
							PrepSQL($varMiddleName) . ", " .
							PrepSQL($varMaidenName) . ", " .
							PrepSQL($varAliasName) . ", " .
							PrepSQL($varBirthDate) . ", " .
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
							PrepSQL($varDeclaredBankruptcy) . ", " .
							PrepSQL($varRepossession) . ", " .
							PrepSQL($varRepossessionYear) . ", " .

							PrepSQL($varMiddleName) . ")";

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
                    	<td><label>Maiden Name if Marrried:</label></td>
                        <td><input type="text" name="maidenName"></td> 
                        <td><label> Alias or other name used:</label></td>
                        <td><input type="text" name="aliasName"></td>
                        <td><label>Date of Birth:</label></td>
                        <td><input type="text" id="datepicker"></td>
                    </tr>
                    <tr>
                    	<td><label>SSN:</label></td>
                        <td colspan="5"><input type="text" name="ssn-1" maxlength="3">-
                        <input type="text" name="ssn-2" maxlength="2">-
                        <input type="text" name="ssn-3" maxlength="4"></td>
                     </tr>
                      <tr>
                    	<td><label>Home Address:</label></td>
                        <td><input type="text" name="address"></td>
                        <td><label>City</label></td>
                        <td align="left"><input type="text" name="city"></td>
                        <td><label>State</label></td>
                        <td>
                        <select>
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
                        <td colspan="5"><input type="text" name="yearsAtResidence">
                         Years  <input type="text" name="monthsAtResidence"> Months</td>
                     </tr>
                     <tr>
                    	<td><label>Current Employer:</label></td>
                        <td><input type="text" name="currentEmployer"></td>
                        <td><label>Title of Position:</label></td>
                        <td><input type="text" name="positionTitle"></td>
                        <td><label>Marital Status:</label></td>
                        <td><input type="radio" name="maritalStatus" value="Single"> Single<br>
  							<input type="radio" name="maritalStatus" value="Married"> Married<br>
  							<input type="radio" name="maritalStatus" value="Seperated"> Seperated<br>
                            <input type="radio" name="maritalStatus" value="Divorced"> Divorced
                        </td>
                     </tr>
                     <tr>
                     	<td colspan="6">If married, provide spouse information:</td>
                     
                     </tr>	
                     
                     <tr>
                     	<td>
                        <label for="spouseFirstName">First Name</label></td>
                        <td><input type="text" name="spouseFirstName"></td> 
                        <td  width="100"><label for="spouseLastName">Last Name</label></td>
                        <td><input type="text" name="spouseLastName"></td>
                        <td width="100"><label for="spouseMiddleName">Middle Name</label></td>
                        <td><input type="text" name="spouseMiddleName"></td> 
                        <br>
                       </td>
                     </tr>
                     <tr>
                    	<td><label>Maiden Name if married :</label></td>
                        <td><input type="text" name="spouseMaidenName"></td> 
                        <td><label> Alias or other name used:</label></td>
                        <td><input type="text" name="spouseAliasName"></td>
                        <td><label>Date of Birth:</label></td>
                        <td><input type="text" id="datepicker" name="spouseBirthDay"></td>
                    </tr>
                    <tr>
                    	<td><label>Spouse SSN:</label></td>
                        <td colspan="5"><input type="text" name="spouseSsn-1" maxlength="3">-
                        <input type="text" name="spouseSsn-2" maxlength="2">-
                        <input type="text" name="spouseSsn-3" maxlength="4"></td>
                     </tr>
                     <tr>
                     	<td><label>Have you ever declared Bankruptcy?</label>
                        <input type="radio" name="bankruptcy" value="1" > Yes
                        <input type="radio" name="bankruptcy" value="0"> No
                        </td>
                        <td>
                        <label>If so, what year? </label>
                        <input type="text" name="yearBankruptcy" maxlength="4">
                        </td>
                        
                        
                        <td><label>Have you ever had a repossession?</label>
                        <input type="radio" name="repossession" value="1" > Yes
                        <input type="radio" name="repossession" value="0"> No
                        </td>
                        <td>
                        <label>If so, what year? </label>
                        <input type="text" name="yearRepossession" maxlength="4">
                        </td>
                        
                        
                        <td><label>Have you ever had a foreclosure?</label>
                        <input type="radio" name="foreclosure" value="1" > Yes
                        <input type="radio" name="foreclosure" value="0"> No
                        </td>
                        <td>
                        <label>If so, what year? </label>
                        <input type="text" name="yearForeclosure" maxlength="4">
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
