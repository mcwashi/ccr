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

$Password = trim($postedData['pass']);

if(isset($ID))
{
	SignIn($ID, $Password);
}


function SignIn($ID, $Password)
{
	
	//session_start();
	
	echo "This is the $ID";
	if(!empty($ID))
	{
		$query = mysql_query("SELECT * FROM Users where userName = '$ID' AND pass = '$Password'"); 
		$row = mysql_fetch_array($query); 
		if(!empty($row['userName']) AND !empty($row['pass'])) 
		{ 
			//$_SESSION['userName'] = $row['pass']; 
			header('Location: home.php'); 
		} 
		else 
		{ 
			echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
		}
 	}	
}



?>