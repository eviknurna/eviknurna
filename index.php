
<?php
session_start();
ini_set('display_errors', 0);
if($_SESSION["salah"] >= 3){
echo "<script>alert('Anda Diblokir'); window.location = ('error.php')</script>";
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=">
        
        
    </head>
    <body>
        <form method="POST" action="login.php" class="form-signin">
            <div class="text-center mb-4">
                <img class="mb-4" width="100" height="100" src="assets/images/LoginRed.png">
            <h1>LOGIN</h1>
          </div>
                
          <div class="form-group">
		<label>Username</label>
                <input class="form-control" name="username" type="text" placeholder="Username" autofocus="yes" autocomplete="no" required="">
	  </div>
	  <div class="form-group">
		<label>Password</label>
                <input class="form-control" name="Password" type="password" placeholder="Password" required="">
	  </div>
            
            <div class="checkBox mb-3">
              <label>
                <input type="checkbox"> Remember me
              </label>
          </div>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit" id="login" >Sign In</botton>
            
        </form>
 
    </body>
</html>
