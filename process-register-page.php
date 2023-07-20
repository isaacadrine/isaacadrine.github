<?php
//This script is a query that inserts records in the users' table
//check that form has been submitted
    $errors = array(); //initialize an error 
    //Check for a first name
    $first_name =trim($_POST['first_name']);
    if (empty($first_name)) {
        $errors[] = 'You forgot to enter your first name.';
    }
    //check for the last name
    $last_name = trim($_POST['last_name']);
    if (empty($last_name)) {
        $errors[] = 'You forgot to enter your last name.';
    }
    //check for an email address
    $email = trim($_POST['email']);
    if (empty($email)) {
        $errors[] = 'You forgot to enter your email.';
    }
    //check for a password and match against the confirmed password
    $password1 = trim($_POST['password1']);
    $password2 = trim($_POST['password2']);
    if (!empty($password1)) {
        if ($password1 !== $password2) {
            $errors[] ='Your two passwords did not match.';
        }
    }else{
        $errors[] = 'You forgot to enter your password.';
        if (empty($errors)) {//If everything's ok
            try{
                //register the user in database
                //Hash password
                $hashed_passcode = password_hash($password1, PASSWORD_DEFAULT);
                require ('mysqli_connect.php');//connect to db
                //make the query
                $query ="INSERT INTO users (userid, first_name, last_name, email, password, registration_date)";
                $query ="VALUES('',?,?,?,?, NOW() )";
                $q =mysqli_stmt_unit($dbcon); 
                mysqli_stmt_prepare($q, $query);
                //use prepared statement o ensure only text
                mysqli_stmt_bind_param($q, 'ssss', $first_name, $last_name, $email, $hashed_passcode);
                //execute query
                mysqli_stmt_execute($q);
                if (mysqli_stmt_affected_rows($q) ==1) {
                    header ("location: register-thanks.php");
                    exit();
                }else{//if it did not run
                    //Public message
                        $errorstring = "<p class='text-center col-sm-8' style='color:red;'>";
                        $errorstring ="System Error<br>You could ot be registered due";
                        $errorstring ="to a system error. We apologise for any inconvinience.</p>";
                        echo "<p class='text-center col-sm-8' style='color:red'>$errorstring</p>";
                    //debugging message
                    //echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $query . '</p>';
                                mysqli_close($dbcon); //close the db connection
                            //include footer then close program
                            echo '<footer class="jumbotron text-center col-sm-12"
                                            style="pading-bottom:1px; padding-top:8px;">
                                                include("footer.php");
                                                        </footer>';
                            exit();
                }
            }
            catch(Exception $e)//we finally handle the problems
            {
                //print an exception
                print "The system is busy please try agin later";
            }
            catch(Error $e)
            {
                //print an error message
                print "The system is busy please try agin later";
            }
        }else{//report the errors
            $errorstring ="Error! The following errors occurred:<br>";
            foreach ($errors as $msg) {
                $errorstring ="-$msg<br>\n";
            }
            $errorstring ="Please try again.<br>";
            echo "<p class='text-center col-sm-2' style='color:red'>$errorstring</p>";
        }//Ed of if(empty($errors)) IF>
    
    }
?>