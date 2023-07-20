<!--validate input-->
<?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('process-register-page.php');
      }//end of main submit condition
      ?>
  
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Skyscrip | Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.cpassword.value)
{
alert('New Password and Re-Password field does not match');
document.signup.cpassword.focus();
return false;
}
return true;
}   
</script>
<script src="verify.js"></script>
<style type="text/css">
  body {
      background: black;
      margin-top: 30px;
      margin-left: 150px;
      margin-right: 250px;
    }
    a {
      font-weight: bold;
    }
</style>

</head>

<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
        <div class="col-md-5 col-md-offset-1">
          <h2>Sign up to Skyscrip</h2>
          <p><a href="login.php">Sign in Now!</a> for a skyscrip account,It's free and always will be..</p>
          <br>
        </div>
        <div class="col-md-5 "> <br>
      <form action="register-thanks.php" name="" class="" method="post" onsubmit="return checked();">
		 <!---->
		 <div class="row">
  <!--the form entries-->

          <div class="form-group col-md-10">
            <label for="first_name" class="form-label">First Name:</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="text" name="first_name" placeholder="The first name.." maxlength="30" id="first_name" class="form-control" required="true" 
          value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>">                                
				</div>
            </div>
          </div>
          </div>
          <div>
      <!--the last name field-->
          <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Last Name:</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="text" name="last_name" placeholder="The last name.." maxlength="30" id="last_name" class="form-control" required="true" 
          value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">                                
				</div>
            </div>
          </div>
          </div>
      <!--the email field--->    
           <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Email id</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="email" name="email" maxlength="60" id="email" class="form-control" required="true" 
          value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">                                 
				</div>
            </div>
          </div>
          </div>
      <!--the password field-->
           <div class="row">
		 <div class="form-group col-md-10">
            <label for="password1" class="form-label">Password</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="password" name="password1" id="password1" class="form-control" required="true"
           value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
          <span id='message'>Between 8 and 12 characters.</span>                                 
				</div>
            </div>
          </div>
          </div>
      <!--password confirmation-->
		  <div class="row">
          <div class="form-group col-md-10">
            <label for="password2" class="form-label">Re-Password</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="password" name="password2" id="password2" class="form-control" required="true" 
          value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">                                 
				</div>
            </div>
          </div>
          </div>
      <!-- Contact field --->
          <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Contact no.</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="text" name="phone" id="txtpassword" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required="true" 
          value="<?php if (isset($_POST['contact'])) echo $_POST['contact']; ?>">                                 
				</div>            
      </div>
          </div>
          </div>
      <!--gender field-->
          <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Gender</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="radio" value="m" name="gender" checked value="<?php if (isset($_POST['first_name'])) echo $_POST['gender']; ?>"> Male
          <input type="radio" value="f" name="gender" value="<?php if (isset($_POST['gender'])) echo $_POST['gender']; ?>"> Female                        
				</div>
            </div>
          </div>
          </div>
      <!--the submit--->
         <div class="row">
            <div class="col-sm-12">
              <input class="btn btn-primary btn-cons pull-right" id="submit" type="submit" name="submit" value="Register" />
            </div>
          </div>
		  </form>
        </div>
     
    
  </div>
</div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
</body>
</html>