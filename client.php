<?php

require "mysql_connect.php"; 

$sql = "SELECT * FROM products WHERE productID='5005'"; 
		
$result = $mysqli->query($sql);
		
	while($row = $result->fetch_assoc()) 
	{ 
		$productName = $row['productName'];
		$description = $row['description'];
		$price = $row['price'];
		$image = $row['image'];
	} 
	 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Client - John Panayiotou</title>

  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/css-stars.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/theme-default.min.css"
    rel="stylesheet" type="text/css" />
  
</head>
<body>
	
	<?php include_once("template_header.php");?>
   
<main>
	
  
	<div class="section">
	  <div class="container">
			<div class="row">
				<div class="col s12">
						<h3 class="header orange-text text-darken-3">Your Account</h3>
					<div class="divider"></div>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
				  <ul class="tabs">
					<li class="tab col s3"><a href="#orderHist">Order History</a></li>
					<li class="tab col s3"><a href="#reviewHist">Reviews</a></li>
					<li class="tab col s3"><a href="#settings">Settings</a></li>
				  </ul>
				</div>
			</div>
			<div class="row">
			<!--<div class="col s12">
					<a class="hide-on-large-only dropdown-button green-text text-darken-3 waves-effect waves-light btn-large" data-activates="dropdown5">Button</a>
				</div>
				
				<ul id="dropdown5" class="dropdown-content">
				  <li class="tab"><a href="#order">Orders</a></li>
				  <li class="divider"></li>
				  <li class="tab"><a href="#address">Address Book</a></li>
				  <li class="divider"></li>
				  <li class="tab"><a href="#payment">Payment Info</a></li>
				</ul> -->
				
				
				<div id="orderHist" class="col s12">
					 <ul class="collection">
						<li class="collection-item avatar">
						   <img src="<?php echo $image ?>" alt="" class="circle responsive-img">
						  <span class="title"><?php echo $productName ?></span>
						  <p><?php echo $price ?></p>
						  <p>4561 Bobba Road, Alabaster, KY</p>
						  <p class="secondary-content">04/22/2045</p>
						</li>
						<li class="collection-item avatar">
						  <i class="material-icons circle">thumb_up</i>
						  <span class="title">Product Name</span>
						  <p>$4.75</p>
						  <p>4561 Bobba Road, Alabaster, KY</p>
						  <p class="secondary-content">04/22/2045</p>
						</li>
						<li class="collection-item avatar">
						  <i class="material-icons circle">thumb_up</i>
						  <span class="title">Product Name</span>
						  <p>$4.75</p>
						  <p>4561 Bobba Road, Alabaster, KY</p>
						  <p class="secondary-content">04/22/2045</p>
						</li>
						<li class="collection-item avatar">
						  <i class="material-icons circle">thumb_up</i>
						  <span class="title">Product Name</span>
						  <p>$4.75</p>
						  <p>4561 Bobba Road, Alabaster, KY 32142</p>
						  <p class="secondary-content">04/22/2045</p>
						</li>
					  </ul>
				</div>
				
				<div id="reviewHist" class="col s12">							
					<div class="row">
						<!--Review block-->
						<div class="col s12 m12 l6 topmarg1">
							<div class="col s3 l3">
								<img src="img/bars1.png" class="responsive-img circle" alt="">
								<ul>
									<li class='reviewInfo'>Product Name</li>
									<li class='reviewInfo'>05 OCT 2015</li>
								</ul>
							</div>
							<div class="col s9 l9">
								<blockquote>
									<p class="grey-text text-darken-3">
										Salvia typewriter Carles, XOXO kitsch PBRB 90's flannel kogi try-hard fap taxidermy forage Kickstarter. Wolf cliche flexitarian, 8-bit VHS viral Kickstarter drinking vinegar health goth. You probably haven't heard of them tousled tofu, cronut mlkshk flexitarian mixtape bespoke Pinterest cred hashtag selfies Carles. Bushwick Odd Future 8-bit distillery. 3 wolf moon salvia pop-up, bicycle rights quinoa brunch beard paleo Intelligentsia slow-carb Echo Park. Helvetica High Life iPhone Godard, Schlitz taxidermy post-ironic direct trade sartorial American Apparel wayfarers Kickstarter. Schlitz viral fap ethical, biodiesel banjo four dollar toast.
									</p>
									<div class="divider"></div>
								</blockquote>
							</div>
						</div>
						<!--END Review block-->
						<!--Review block-->
						<div class="col s12 m12 l6 topmarg1">
							<div class="col s3 l3">
								<img src="img/bars2.png" class="responsive-img circle" alt="">
								<ul>
									<li class='reviewInfo'>Product Name</li>
									<li class='reviewInfo'>05 OCT 2015</li>
								</ul>
							</div>
							<div class="col s9 l9">
								<blockquote>
									<p class="grey-text text-darken-3">
										Salvia typewriter Carles, XOXO kitsch PBRB 90's flannel kogi try-hard fap taxidermy forage Kickstarter. Wolf cliche flexitarian, 8-bit VHS viral Kickstarter drinking vinegar health goth. You probably haven't heard of them tousled tofu, cronut mlkshk flexitarian mixtape bespoke Pinterest cred hashtag selfies Carles. Bushwick Odd Future 8-bit distillery. 3 wolf moon salvia pop-up, bicycle rights quinoa brunch beard paleo Intelligentsia slow-carb Echo Park. Helvetica High Life iPhone Godard, Schlitz taxidermy post-ironic direct trade sartorial American Apparel wayfarers Kickstarter. Schlitz viral fap ethical, biodiesel banjo four dollar toast.
									</p>
									<div class="divider"></div>
								</blockquote>
							</div>
						</div>
						<!--END Review block-->
						<!--Review block-->
						<div class="col s12 m12 l6 topmarg1">
							<div class="col s3 l3">
								<img src="img/bars3.png" class="responsive-img circle" alt="">
								<ul>
									<li class='reviewInfo'>Product Name</li>
									<li class='reviewInfo'>05 OCT 2015</li>
								</ul>
							</div>
							<div class="col s9 l9">
								<blockquote>
									<p class="grey-text text-darken-3">
										Salvia typewriter Carles, XOXO kitsch PBRB 90's flannel kogi try-hard fap taxidermy forage Kickstarter. Wolf cliche flexitarian, 8-bit VHS viral Kickstarter drinking vinegar health goth. You probably haven't heard of them tousled tofu, cronut mlkshk flexitarian mixtape bespoke Pinterest cred hashtag selfies Carles. Bushwick Odd Future 8-bit distillery. 3 wolf moon salvia pop-up, bicycle rights quinoa brunch beard paleo Intelligentsia slow-carb Echo Park. Helvetica High Life iPhone Godard, Schlitz taxidermy post-ironic direct trade sartorial American Apparel wayfarers Kickstarter. Schlitz viral fap ethical, biodiesel banjo four dollar toast. Bushwick Odd Future 8-bit distillery. 3 wolf moon salvia pop-up, bicycle rights quinoa brunch beard paleo Intelligentsia slow-carb Echo Park. Helvetica High Life iPhone Godard, Schlitz taxidermy post-ironic direct trade sartorial American Apparel wayfarers Kickstarter. Schlitz viral fap ethical, biodiesel banjo four dollar toast.										
									</p>
									<div class="divider"></div>
								</blockquote>
							</div>
						</div>
						<!--END Review block-->
						<!--Review block-->
						<div class="col s12 m12 l6 topmarg1">
							<div class="col s3 l3">
								<img src="img/bars4.png" class="responsive-img circle" alt="">
								<ul>
									<li class='reviewInfo'>Product Name</li>
									<li class='reviewInfo'>05 OCT 2015</li>
								</ul>
							</div>
							<div class="col s9 l9">
								<blockquote>
									<p class="grey-text text-darken-3">
										Salvia typewriter Carles, XOXO kitsch PBRB 90's flannel kogi try-hard fap taxidermy forage Kickstarter. Wolf cliche flexitarian, 8-bit VHS viral Kickstarter drinking vinegar health goth. You probably haven't heard of them tousled tofu, cronut mlkshk flexitarian mixtape bespoke Pinterest cred.
									</p>
									<div class="divider"></div>
								</blockquote>
							</div>
						</div>
						<!--END Review block-->
						
					</div>
				</div>
				
				<div id="settings" class="col s12">
					<div class="row">
						<div class="col s12 l6">
								<div class="card white">
									<div class="card-content">								
									  <span class="card-title green-text text-darken-3">Profile</span>
										<ul class='profileTxt'>
											<li>Username:  <span class="green-text text-darken-3">balg</span></li>
											<li>Password:</li>
											<li>Email:</li>
											<li>Phone Number:</li>
											<li>Preferences:</li>
										</ul>
										<div class="card-action white-text">
											  <a href="#editProfile" class="modal-trigger waves-effect waves-light btn orange darken-3 white-text">Edit</a>
										</div>
									</div>
								</div>
						</div>
						<div class="col s12 l6">
						  <div class="card white">
							<div class="card-content">
							  <span class="card-title green-text text-darken-3">Credit & Debit Cards</span>
							  <!-- dynamic content-->
							  <table class="responsive-table">
									<thead>
									  <tr>
										  <th data-field="id">Card ending in</th>
										  <th data-field="name">Expires</th>
									  </tr>
									</thead>

									<tbody>
									  <tr>
										<td>1234</td>
										<td>08/2020</td>
									  </tr>	
									  <tr>
										<td>4321</td>
										<td>04/2018</td>
									  </tr>	
									</tbody>
								</table> 
								<!-- END dynamic content-->
								<div class="card-action row white-text">
									  <a href="#addCard" class="modal-trigger waves-effect waves-light btn orange darken-3 white-text">Add Card</a>
									  <a href="#editCard" class="modal-trigger waves-effect waves-light btn orange darken-3 white-text">Edit Cards</a>
								</div>

						     </div>
						  </div>
					   </div>        
				     </div>
					 <div class="row">
						<div class="col s12 l6">
							  <div class="card white">
								<div class="card-content grey-text text-darken-4">
								  <span class="card-title green-text text-darken-3">Address Book</span>
								  <div class="row">
									  <div class="col s12">
										   <ul>
											  <li class="">Bob Bob</li>
											  <li class="">4561 Bobba Road, Alabaster, KY 32142</li>
											  <li class="">Phone: 000-000-0000</li>
										   </ul>
										   <span class='right'><a href="#editAddress" class="modal-trigger waves-effect waves-light btn orange darken-3 white-text right">Edit</a></span>
									   </div>
								  </div>
								  <div class="divider"></div>
								  <div class="row">
									  <div class="col s12">
										   <ul>
											  <li class="">Bob Bob</li>
											  <li class="">4561 Bobba Road, Alabaster, KY 32142</li>
											  <li class="">Phone: 000-000-0000</li>
										   </ul>
										   <span class='right'><a href="#editAddress" class="modal-trigger waves-effect waves-light btn orange darken-3 white-text right">Edit</a></span>
									   </div>
								  </div>
								  <div class="card-action row white-text">
									  <a href="#addAddress" class="modal-trigger waves-effect waves-light btn orange darken-3 white-text">Add Address</a>
								</div>
								</div>
							  </div>
						</div>
					</div>
				</div>
		    </div>
	    </div>		
    </div>	  
	
</main>



 <!-- Modals -->

  <!-- Edit profile modal -->
  <div id="editProfile" class="modal modal-fixed-footer">
    <div class="modal-content">
		<h4 class="header orange-text text-darken-3">Edit Profile</h4>
		<form class="col s12">
			<div class="row">
				<div class="input-field col s12 orange-text text-darken-3">
					<i class="mdi-action-account-circle prefix"></i>
					<input id="username" type="text" data-validation="length alphanumeric" data-validation-length="min3">
					<label for="username">Username</label>
				</div>									
			</div>								 
			<div class="row">
				<div class="input-field col s12 orange-text text-darken-3">
					<i class="mdi-action-lock-open prefix"></i>
					<input name="pass_confirmation" id="pass_confirmation" type="password" data-validation="length" data-validation-length="min8">
					<label for="password_confirmation">Password</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 orange-text text-darken-3">
					<i class="mdi-action-lock-open prefix"></i>
					<input name="pass" id="pass" type="password" data-validation="confirmation">
					<label for="pass">Confirm Password</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 orange-text text-darken-3">
					<i class="material-icons prefix">email</i>
					<input id="email" type="email" data-validation="email">
					<label for="email">Email</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 orange-text text-darken-3">
					<i class="material-icons prefix">phone</i>
					<input id="pnumber" type="tel" data-validation="number">
					<label for="pnumber">Phone Number</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				   <p>Preferences</p>
				</div>
				<ul class="col s12">
					<li class='filterBoxes'>
						<input type="checkbox" name="filter1" id="filter1" value="1" class="filled-in">
						<label for="filter1">Gluten-free</label>
					</li>
					<li class='filterBoxes'>
						<input type="checkbox" name="filter2" id="filter2" value="2" class="filled-in">
						<label for="filter2">Vegan</label>
					</li>
					<li class='filterBoxes'>
						<input type="checkbox" name="filter3" id="filter3" value="3" class="filled-in">
						<label for="filter3">Sugar-free</label>
					</li>
				</ul>
			</div>						
		</div>
			<div class="modal-footer">
			  <button class="btn waves-effect waves-light green darken-3" type="submit" name="action">Submit</button>
			  <a class="btn btn-flat white modal-close">Cancel</a>
			</div>
		</form>
	  </div>
			  

	  <!-- Add a card modal-->
	  <div id="addCard" class="modal modal-fixed-footer">
		<div class="modal-content">
		<h4 class="header orange-text text-darken-3">Add a Card</h4>
		<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<input id="cardNumber" type="text" data-validation="creditcard" data-validation-allowing="visa, mastercard, amex">
							<label for="cardNumber">Card Number:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="cardName" type="text" data-validation="required" data-validation-error-msg="Your name is required">
							<label for="cardName">Name on card:</label>
					</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<label for="expirationDate">Expiration Date:</label>
							<input id='expirationDate' type="text" class="datepicker" data-validation="required" data-validation-error-msg="Expiration date is required">	  
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="cvv" type="text"  name="cvv" data-validation="cvv">
							<label for="cvv">Secuirty Code:</label>
						</div>
					</div>
		</div>
		<div class="modal-footer">
		   <button class="btn waves-effect waves-light green darken-3" type="submit" name="action">Submit</button>
		  <a class="btn btn-flat white modal-close">Cancel</a>
		</div>
	</form>	
  </div>
  
   <!-- Edit card modal-->
	<div id="editCard" class="modal modal-fixed-footer">
		<div class="modal-content">
		<h4 class="header orange-text text-darken-3">Edit Card</h4>
		<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<input id="cardNumber" type="text" data-validation="creditcard" data-validation-allowing="visa, mastercard, amex">
							<label for="cardNumber">Card Number:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="cardName" type="text" data-validation="required" data-validation-error-msg="Your name is required">
							<label for="cardName">Name on card:</label>
					</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<label for="expirationDate">Expiration Date:</label>
							<input id='expirationDate' type="text" class="datepicker" data-validation="required" data-validation-error-msg="Expiration date is required">	  
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="cvv" type="text"  name="cvv" data-validation="cvv">
							<label for="cvv">Secuirty Code:</label>
						</div>
					</div>
		</div>
		<div class="modal-footer">
		   <button class="btn waves-effect waves-light green darken-3" type="submit" name="action">Submit</button>
		  <a class="btn btn-flat white modal-close">Cancel</a>
		</div>
		</form>	
    </div>
  
  
  
  <!-- Add a new address modal-->
  <div id="addAddress" class="modal modal-fixed-footer">
	<div class="modal-content">
		<h4 class="header orange-text text-darken-3">Add a New Address</h4>
		<form class="col s12">
					<div class="row">
						<div class="input-field col s12 m6">
							<input id="firstName" type="text" data-validation="required" data-validation-error-msg="First name is required">
							<label for="firstName">First Name:</label>
						</div>
						<div class="input-field col s12 m6">
							<input id="lastName" type="text" data-validation="required" data-validation-error-msg="Last name is required">
							<label for="lastName">Last Name:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="addressInput" type="text" data-validation="required" data-validation-error-msg="Address is required">
							<label for="addressInput">Address:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="city" type="text" data-validation="required" data-validation-error-msg="City is required">
							<label for="city">City:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="zip" type="text" data-validation="custom" data-validation-regexp="^[0-9]{5}(?:-[0-9]{4})?$">
							<label for="zip">ZIP:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="country" type="text" data-validation="required" data-validation-error-msg="Country is required">
							<label for="country">Country:</label>
						</div>
					</div>
		</div>
		<div class="modal-footer">
			<button class="btn waves-effect waves-light green darken-3" type="submit" name="action">Submit</button>
			<a class="btn btn-flat white modal-close">Cancel</a>
		</div>
	</form>
  </div>
  
  <!-- Edit address modal-->
  <div id="editAddress" class="modal modal-fixed-footer">
	<div class="modal-content">
	<h4 class="header orange-text text-darken-3">Edit Address</h4>
	<form class="col s12">
				<div class="row">
					<div class="input-field col s12 m6">
							<input id="firstName" type="text" data-validation="required" data-validation-error-msg="First name is required">
							<label for="firstName">First Name:</label>
					</div>
					<div class="input-field col s12 m6">
						<input id="lastName" type="text" data-validation="required" data-validation-error-msg="Last name is required">
						<label for="lastName">Last Name:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="addressInput" type="text" data-validation="required" data-validation-error-msg="Address is required">
						<label for="addressInput">Address:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="city" type="text" data-validation="required" data-validation-error-msg="City is required">
						<label for="city">City:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="zip" type="text" data-validation="custom" data-validation-regexp="^[0-9]{5}(?:-[0-9]{4})?$">
						<label for="zip">ZIP:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="country" type="text" data-validation="required" data-validation-error-msg="Country is required">
						<label for="country">Country:</label>
					</div>
				</div>
	</div>
		<div class="modal-footer">
			<button class="btn waves-effect waves-light green darken-3" type="submit" name="action">Submit</button>
			<a class="btn btn-flat white modal-close">Cancel</a>
		</div>
	</form>
  </div>
  <!-- END Modals -->
		          
				
  
<?php include_once("template_footer.php");?>  


	
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/jquery.barrating.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>

  </body>
</html>

<?php
$mysqli->close();
?>
