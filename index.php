<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Log In</title>
<link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<!--
<center>
<table width="1000">
	<tr>
    	<td valign="bottom"><img src="images/Header.jpg" width="1000" height="200" alt=""/></td>
    </tr>
    <tr>
    	<td valign="top" height="200px" bgcolor="#ffffff" >
        	<img src="images/logInTitleBar.jpg" width="800" height="75" alt=""/>
        </td>
    </tr>
    <tr>
    	<td height="10px" bgcolor="F06D80"></td>
    </tr>
    


</table>
</center>
-->

<body>
  <center>
<table width="1000">
	<tr>
    	<td valign="bottom"><img src="images/Header.jpg" width="1000" height="200" alt=""/></td>
    </tr>
 	<tr>
    	<td height="400">
                
            <div class = "container">
                <section class="container">
                    <div class="login">
                      <h1>Login to Web App</h1>
                      <form class = "form-signin" role = "form" 
            action="home.php" method="post">
                        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
                        <p><input type = "text" class = "form-control" 
               name = "user" placeholder = "username" 
               required autofocus></p>
                        <p><input type = "pass" class = "form-control"
               name="pass" placeholder = "password" required></p>
                        <p class="remember_me">
                          <label>
                            <input type="checkbox" name="remember_me" id="remember_me">
                            Remember me on this computer
                          </label>
                        </p>
                        <p class="submit"><button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "submit">Login</button></p>
                      </form>
                    </div>
                </section>
           </div>

        
        </td>
    </tr>
    <tr>
    	<td height="10px" bgcolor="F06D80"></td>
    </tr>
    
    
  </table>
  </center>
</body>



</body>
</html>
