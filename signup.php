
<?php require_once 'config/server.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">

    <title>REGISTER</title>
</head>
<body>

    <div class="container">
    <div class="form">
    <div class="col-md-4 offset-md-4" >
            <form action = "signup.php" method = "post">

            <h3 class = "text-center"> REGISTER</h3>
            <?php  if (count($errors) >0) : ?>
                <div class= "alert alert-danger">
                    <?php foreach($errors as $errors): ?>
                        <li><?php echo $errors ; ?></li>
                        <?php endforeach;?>
                </div>
                <?php endif; ?>
            

    <div class="form-group">
    <input type="text" 
    name="username" value="<?php echo $username; ?>"
    placeholder="Type your username" class="form-control form-control-lg" required/>

    </div>
    <div class="form-group">
    <input type="text"
    name="fullname" value="<?php echo $fullname; ?>"
    placeholder="Type your fullname" class="form-control form-control-lg" required />
    
    </div>
    <div class="form-group">
    <input type="email"
    name="email" value="<?php echo $email; ?>"
    placeholder="Type your email" class="form-control form-control-lg" required />
    
    </div>
    <div class="form-group">
    <input type="password"
    name="password_1" value="<?php echo $password; ?>"
    placeholder="Type your password" class="form-control form-control-lg" required />
    
    </div>
    <div class="form-group">
    <input type="password"
    name="password_2"
    placeholder="confirm your password" class="form-control form-control-lg" required/>
    
    </div>
    
    <div class="form-group">
     <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg"> SIGNUP</button>
     <p class="text-center">Already a member? <a href="login.php">sing in</a></p>
    
    </div>
    
    
    </form>
    
    </div>
    </div>
    
   
    
    </div>
</body>
</html>