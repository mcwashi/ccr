<?php

  include 'include.php';
  
  
  if(count($_POST) > 0)
  {
	  
	  if($_POST['user'] != "")
	  {
		  $_SESSION['formWasPosted'] = $_POST;
		  header('Location: validate.php');
	  }
	  else
	  {
		//$userNameError = "validation";  
	  }
  }
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Log In</title>
<link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>




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
            action="index.php" method="POST">
                        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
                        <p><input type = "text" class = "form-control" 
               name = "user" placeholder = "username" 
               required autofocus></p>
                        <p><input type = "password" class = "form-control"
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
