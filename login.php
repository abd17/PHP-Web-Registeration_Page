<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	 <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background: #128184 ">
	<div class="header">
		<h2>Login_Page</h2>
	</div>

    <form method="post" action="login.php">
       <?php include('errors.php'); ?>
        
        <div class="input">
        <label>Username</label>
			<input type="text" name="username"  value="<?php echo $username; ?>">
            </div>
		
              <div class="input">
        <label>Password</label>
			<input type="password" name="password"  value="<?php echo $password; ?>">
      </div>
                  
        <button type="submit" class="btn" name="login">Login</button>
		
        <p>
			    Not have acount?<a href="Register.php">Sign_Up</a>
		</p>
	</form>
</body>
</html>