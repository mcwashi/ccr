<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'CICR');
define('DB_USER','');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$ID = trim($_POST['user']); 
$Password = trim($_POST['pass']);



function SignIn()
{
	session_start();
	
	if(!empty($_POST['user']))
	{
		$query = mysql_query("SELECT * FROM Users where userName = '$_POST[user]' AND pass = '$_POST[pass]'"); 
		$row = mysql_fetch_array($query); 
		if(!empty($row['userName']) AND !empty($row['pass'])) 
		{ 
			$_SESSION['userName'] = $row['pass']; 
			echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
		} 
		else 
		{ 
			echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
		}
 	}	
}

if(isset($_POST['submit']))
{
	SignIn();
}

?>