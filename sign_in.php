<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Sign In</title>
  
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/animate.css">  
  <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/theme-default.min.css"
    rel="stylesheet" type="text/css" />
  
</head>
<body>

  <?php include_once("template_header.php");?>
  
  <main>
	
  <div class="container">	
    <div class="section">
		<div class="row">
			<div class="col s12 m12 l8 offset-l2">
			  <div class="card">
				<h3 class="center-align">Sign In</h3>
				<div class="center-align">
					<div class="divider"></div>
					<form class="col s12 topmarg3" id='signinForm'>
						<div class="row center-align">
							<div class="input-field col s12 m10 offset-m1 orange-text text-darken-3">
								<i class="mdi-action-account-circle prefix"></i>
								<input id="username" type="text" data-validation="length alphanumeric" data-validation-length="min3">
								<label for="username">Username</label>
							</div>
							<div class="input-field col s12 m10 offset-m1">
								<i class="orange-text text-darken-3 mdi-action-lock-open prefix"></i>
								<input name="password_confirmation" id="password_confirmation" type="password" data-validation="length" data-validation-length="min8">
								<label for="password_confirmation">Password</label>
							</div>
							<div class="input-field col s12 m10 offset-m1 orange-text text-darken-3">
								<input type="checkbox" class="green" id="filled-in-box" checked="checked">
								<label for="filled-in-box">Remember me next time</label>
							</div> 
						</div>
						<div class="row center-align">
							<a href="home.php" class="btn btn-flat white modal-close">Cancel</a>
							<button class="btn btn-flat white-text waves-effect waves-light green darken-3" type="submit" name="action">Submit
							</button>
						</div>
						<div class="divider"></div>
					</form>	
					<div class="row">
						<div class="col s12">
							<p class="larger">New to Just Nature?</p>
							<p><a href="sign_up.php" class="waves-effect waves-white green darken-3 btn btn-flat white-text">Create an Account</a></p>
						</div>
					</div>
				</div>				
			  </div>
			</div>			
        </div>
    </div>
  </div>
  
  </main>
   

  <?php include_once("template_footer.php");?>	

	
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/jquery.barrating.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>

  </body>
</html>
