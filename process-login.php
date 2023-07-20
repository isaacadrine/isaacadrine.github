<?php
//processing submissions
//check if submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //connect to db
try {
    require ('mysqli_connect.php');
    //validate email
        $email =filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if((empty($email))|| (filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $errors[] ='You forgot to enter your email';
            $errors[] ='or the e-mail format is incorrect.';
        }
}
//validate the pssword
    $password =
    filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    if(empty($password)) {
        $errors[] ='You forgot to enter the password.';
    }
}  
?>