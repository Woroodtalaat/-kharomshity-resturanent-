<?php
session_start();
require 'db.php';
//intilizing variables
$errors = array();
$username = "";
$fullname = "";
$email = "";
$password_1 = "";
$password_2 = "";
//if the register user click signup button
if(isset($_POST['signup-btn'])){
    //recieve all input values from the form
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    //form validation 
    //by adding array for errors
    if (empty($username)){
        $errors['username']= "username is required";
    }
    if (empty($fullname)){
        $errors['fullname']= "fullname is required";
    }
    if (empty($email)){
        $errors['email']= "email is required";
    }
    if (empty($password_1)){
        $errors['password_1']= "pass is required";
    }
    if ($password_1 !== $password_2){
        $errors['password_2'] = "the second pass do not match";
    }
    //first check the db to make sure a user does not already 
    //exist with the same username and or email
    $user_check_query = "SELECT * FROM users where username =? OR email=? LIMIT 1";
    $stmt = $conn->prepare($user_check_query);
    $stmt->bind_param('ss',$username,$email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if ($userCount>0){ //if user exist
        $errors['email'] = "username or email already exists";
    }
    //finally, register user if there is no errors in the form
    if (count($errors)===0){
        $password = password_hash($password_1,PASSWORD_DEFAULT);// ENCRYPT PASS BEFORE INSERTING IN TBL
        $query = "INSERT INTO users (username , fullname, email, password)
        values (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssss',$username,$fullname,$email,$password);
       if($stmt->execute()) {
           //login user
           $uid = $conn->insert_id;
           $_SESSION['sqe'] = $uid;
           $_SESSION['username'] = $username;
           $_SESSION['fullname'] = $fullname;
           $_SESSION['email'] = $email;
           $_SESSION['msg'] = "U R now logged in! ";
           $_SESSION['alert-class'] = "alert-success";
           header('location: xindex.php');
           exit();
       } else{
           $errors['db_error']= "db error: faild to register";
       }
    }
}
//if user clicks on login btn
if(isset($_POST['login-btn'])){
    //recieve all input values from the form
    $username = $_POST['username'];
    $password_1 = $_POST['password'];

    //form validation 
    //by adding array for errors
    if (empty($username)){
        $errors['username']= "username is required";
    }
    
    if (empty($password_1)){
        $errors['password_1']= "pass is required";
    }
    if(count($errors)===0){
    $sql = "SELECT * FROM users WHERE email=? OR  username=? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss',$username,$username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (password_verify($password_1,$user['password'])){
        //login success
        $_SESSION['sqe'] =$user ['sqe'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user ['email'];
        $_SESSION['msg'] = "U R now logged in! ";
        $_SESSION['alert-class'] = "alert-success";
        header('location: xindex.php');
        exit();

    }else{
        $errors['login_fail'] = "wrong";
    }
}
}