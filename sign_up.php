<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Sign Up - John Panayiotou</title>

  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>

  <?php include_once("template_header.php");?>
  
  <main>
  
  <div class="container">
	
	<!--<div class="section center-align">        
		<a id="logo-container" href="home.php" class="brand-logo"><img class="responsive-img" src="img/logoS.png" alt="mock logo" /></a>  
	</div>-->

    <div class="section">
		<div class="row">
			<div class="col s12 m8 offset-m2">
			  <div class="card">
				<h3 class="center-align">Create Account</h3>
				<div class="center-align">
					<div class="divider"></div>
					<form class="col s12 topmarg3" id='signupForm' action="#" method="">
						<div class="row">
							<div class="input-field col s12 m10 offset-m1 orange-text text-darken-3">
								<i class="mdi-action-account-circle prefix"></i>
								<input id="username" name="username" type="text" class="validate" >
								<label for="username">Username</label>
							</div>
							<div class="input-field col s12 m10 offset-m1 orange-text text-darken-3">
								<i class="material-icons prefix">email</i>
								<input id="email" type="email" class="validate">
								<label for="email">Email</label>
							</div>
							<div class="input-field col s12 m10 offset-m1 orange-text text-darken-3">
								<i class="mdi-action-lock-open prefix"></i>
								<input id="password" type="password" class="validate">
								<label for="password">Password</label>
							</div>
							<div class="input-field col s12 m10 offset-m1 orange-text text-darken-3">
								<i class="mdi-action-lock-open prefix"></i>
								<input id="confirmPassword" type="password" class="validate">
								<label for="confirmPassword">Confirm Password</label>
							</div>
							<div class="input-field col s12 m10 offset-m1 orange-text text-darken-3">
								<input type="checkbox" class="green" id="filled-in-box" checked="checked">
								<label for="filled-in-box">Remember me next time</label>
							</div> 
						</div>						
						<div class="row">
							<a href="home.php" class="btn btn-flat white modal-close">Cancel</a> &nbsp;
							<button class="btn btn-flat white-text waves-effect waves-light green darken-3" type="submit" name="action">Submit
							</button>
						</div>
						<div class="divider"></div>
					</form>
					<div class="row">
						<div class="col s12">
							<p class="larger">Already a member?</p>
							<p><a href="sign_in.php" class="waves-effect waves-white green darken-3 btn btn-flat white-text center-align">Sign In</a></p>
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
  <script src="js/jquery.validate.js"></script>
	

  </body>
</html>
