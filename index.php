<?php require_once 'config/server.php';
if(!isset($_SESSION['username']))
header('location: login.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <title>Homepage</title>
</head>
<body>
 <div class="container">
    <div class="form">
    <div class="col-md-4 offset-md-4" >
    <div class="alert <?php echo $_SESSION['alert-class'];?>">
    <?php echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    unset($_SESSION['alert-class']);

    ?>
    </div>
    <h3> welcome ,<?php echo $_SESSION['username'];?>
 </h3>
    <a href="logout.php"> logout </a>
        
    
    </div>
    
    </div>
    
    </div>




   
</body>
</html>