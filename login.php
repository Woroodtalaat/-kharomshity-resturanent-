<?php require_once 'config/server.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <title>REGISTER</title>
</head>
<body>
 <div class="container">
    <div class="form-login">
    <div class="col-md-4 offset-md-4" >
    <form action = "login.php" method = "post">
    <h3 class = "text-center"> signin</h3>


    <div class="form-group">
    <input type="text" 
    name="username" value="<?php echo $username; ?>"
    placeholder="Type your username or email" class="form-control form-control-lg" required/>

    </div>
   
    <div class="form-group">
    <input type="password"
    name="password" value="<?php echo $password_1; ?>"
    placeholder="Type your password" class="form-control form-control-lg" required />
    
    </div>
  
    <div class="form-group">
     <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg"> sign in </button>
     <p class="text-center">NOT A MEMBER ? <a href="signup.php">sign up</a></p>
    
    </div>
    
    
    </form>
    
    
    </div>
    
    </div>
    
    </div>
</body>
</html>