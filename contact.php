<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Contact</title>

  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/animate.css">
  
</head>
<body>
		
 <?php include_once("template_header.php");?>
   
 <main>
 
  <div class="container">
    <div class="row">
        <div class="col s12">
            <h3 class="center-align orange-text text-darken-3">Contact Us</h3>
            <div class="row">
                <form class="col s12 m12 l8 offset-l2">
                    <div class="row">
                        <div class="input-field col m6 s12">
                            <input id="first_name" type="text">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col m6 s12">
                            <input id="last_name" type="text">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <textarea id="message" class="materialize-textarea"></textarea>
                          <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <label>How Did You Find Us?</label>
                          <br/>
                        </div>
                        <div class="input-field col m3 s6 center-align">
                          <input name="group1" type="radio" id="google" />
                          <label for="google">Google</label>
                        </div>
                        <div class="input-field col m3 s6 center-align">
                          <input name="group1" type="radio" id="customer" />
                          <label for="customer">Customer referral</label>
                        </div>
                        <div class="input-field col m3 s6 center-align">
                          <input name="group1" type="radio" id="other" />
                          <label for="other">Other</label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                         <p class="right-align"><button class="btn btn-large waves-effect waves-light green darken-3" type="button" name="action">Send Message</button></p>
                        </div>
                    </div>
                </form>
				<!-- <div class="col s12 m12 l6 larger">
					<div class="card-panel">
						<i class="inline orange-text text-darken-3 material-icons">location_on</i>
						<p class='inline green-text text-darken-3'>4000 Central Florida Blvd, Orlando, FL 32816</p>
						<div class='divider'></div>
							<i class="inline orange-text text-darken-3 material-icons">email</i>
							<p class='inline green-text text-darken-3'>justnature.com</p>
						<div class='divider'></div>
							<i class="inline orange-text text-darken-3 material-icons ">contact_phone</i>
							<p class='inline green-text text-darken-3'>394-079-1283</p>
					</div>
				</div> -->
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
