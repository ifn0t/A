<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Checkout - John Panayiotou</title>

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
					<div class="divider"></div>
						<h3 class="header orange-text text-darken-3">Checkout</h3>
					<div class="divider"></div>
				</div>
			</div>
					<!--<div class="row">
						<div class="col s12">
						  <div class="card green darken-3">
							<div class="card-content white-text">
							  <span class="card-title">Shipping Address</span>
							   <ul>
								  <li class="">Bob Bob</li>
								  <li class="">4561 Bobba Road, Alabaster, KY 32142</li>
								  <li class="">Phone: 000-000-0000</li>
							   </ul>
							</div>
							<div class="card-action row white-text">
								  <a href="" class="waves-effect waves-light btn orange darken-3 white-text right">Change</a>
							</div>
						  </div>
						</div>
					
						<div class="col s12">
						  <div class="card green darken-3">
							<div class="card-content white-text">
							  <span class="card-title">Payment method</span>
							   <ul>
								  <li class="">Card information</li>
								  <li class="">Billing Address</li>
							   </ul>
							</div>
							<div class="card-action row white-text">
								  <a href="" class="waves-effect waves-light btn orange darken-3 white-text right">Change</a>
							</div>
						  </div>
						</div>					
						<div class="col s12">
							  <div class="card green darken-3">
								<div class="card-content white-text">
								  <span class="card-title">Order Summary</span>
								   <ul>
									  <li>Items:</li>
									  <li>Shipping & handling:</li>
									  <li>Total before tax:</li>
									  <li>Tax:</li>
								   </ul>
								   <p>Order Total:</p>
								</div>
								<div class="card-action row white-text">
									  <a href="" class="waves-effect waves-light btn-large orange darken-3 white-text right">Place Order</a>
								</div>
							  </div>
						</div>
					</div>-->
					
			
			<div class="row">
						<!--logged in shipping address view-->
						<div class="col s12 l6">
							  <div class="card white">
								<div class="card-content">
								  <h4 class="header orange-text text-darken-3">Shipping Address</h4>
								  <div class="row">
									  <div class="col s12">							   
										   <ul>
											  <li class="">Bob Bob</li>
											  <li class="">4561 Bobba Road, Alabaster, KY 32142</li>
											  <li class="">Phone: 000-000-0000</li>		  
										   </ul>
										   <a href="#editAddress" class="modal-trigger waves-effect waves-light btn orange darken-3 white-text">Edit</a>
										   <span class='right'>
												<input name="shippingSelect" type="radio" id="address1" />
												<label for="address1">Use this address</label>							
										   </span>
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
										   <a href="#editAddress" class="modal-trigger waves-effect waves-light btn orange darken-3 white-text">Edit</a>
										   <span class='right'>
												<input name="shippingSelect" type="radio" id="address2" />
												<label for="address2">Use this address</label>							
										   </span>
									   </div>
								  </div>
								</div>
							  </div>
						</div>
						<!-- END logged in shipping address view-->
						
						<!--guest shipping address view-->
						<!--<div class="col s12 l6">
							<div class="card">
								<div class="card-content">
									<h4 class="header orange-text text-darken-3">Shipping Address</h4>
									<form>
									  <div class="row">
										<div class="input-field col l6 s12">
										  <input id="firstName" type="text" >
										  <label for="firstName">First Name:</label>
										</div>
										<div class="input-field col l6 s12">
										  <input id="lastName" type="text" >
										  <label for="lastName">Last Name:</label>
										</div>
									  </div>
									  <div class="row">
										<div class="input-field col s12">
										  <input id="addressInput" type="text" >
										  <label for="addressInput">Address:</label>
										</div>
									  </div>
									  <div class="row">
										<div class="input-field col s12">
										  <input id="city" type="text" >
										  <label for="city">City:</label>
										</div>
									  </div>
									  <div class="row">
										<div class="input-field col s12">
										  <input id="zip" type="text" >
										  <label for="zip">ZIP:</label>
										</div>
									  </div>
									  <div class="row">
										<div class="input-field col s12">
										  <input id="country" type="text" >
										  <label for="country">Country:</label>
										</div>
									  </div>									  
									</form>
								</div>
							</div>
						</div>-->
						<!-- END guest shipping address view -->
						
						<!-- logged in payment method view -->
						<div class="col s12 l6">
							<div class="card">
								<div class="card-content">
									<h4 class="header orange-text text-darken-3">Payment Method</h4>
										<div class="row">
											<p class='filterBoxes'>
											  <input name="checkoutToggler" type="radio" id="card" value="1" />
											  <label for="card">Credit or Debit card</label>
											</p>
											<p class='filterBoxes'>
											  <input name="checkoutToggler" type="radio" id="paypal" value="2" />
											  <label for="paypal">Login with Paypal</label>
											</p>											
										</div>
										<div class="none toHide" id="form-1">
										<div class="row">
											  <div class="col s12">							   
												   <ul>
													  <li class="">Card ending in</li>
													  <li class="">4561</li>		  
												   </ul>
												   <a href="#editCard" class="modal-trigger waves-effect waves-light btn orange darken-3 white-text">Edit</a>
												   <span class='right'>
														<input name="cardSelect" type="radio" id="card1" />
														<label for="card1">Use this card</label>							
												   </span>
											   </div>
										  </div>
										  <div class="divider"></div>
										  <div class="row">
											  <div class="col s12">
												   <ul>
													  <li class="">Card ending in</li>
													  <li class="">2341</li>
												   </ul>
												   <a href="#editCard" class="modal-trigger waves-effect waves-light btn orange darken-3 white-text">Edit</a>
												   <span class='right'>
														<input name="cardSelect" type="radio" id="card2" />
														<label for="card2">Use this card</label>					
												   </span>
											   </div>
										  </div>
										</div>
										<form action="#">
											  <div class="row none toHide" id="form-2">
												<div class="input-field col s12 orange-text text-darken-3">
													<i class="mdi-action-account-circle prefix"></i>
													<input id="username" type="text" >
													<label for="username">Username</label>
												</div>
												<div class="input-field col s12 orange-text text-darken-3">
													<i class="mdi-action-lock-open prefix"></i>
													<input id="password" type="password" >
													<label for="password">Password</label>
												</div>
												<div class="col s12">
													<button class="right btn waves-effect waves-light green darken-3" type="submit" name="action">Log in</button>
												</div>
											 </div>
										</form>
								</div>
							</div>							
						</div>
						<!-- END logged in payment method view -->
						
						<!-- guest payment method view -->
						<!--<div class="col s12 l6">
							<div class="card">
								<div class="card-content">
									<h4 class="header orange-text text-darken-3">Payment Method</h4>
										<div class="row">
											<p class='filterBoxes'>
											  <input name="checkoutToggler" type="radio" id="card" value="1" />
											  <label for="card">Credit or Debit card</label>
											</p>
											<p class='filterBoxes'>
											  <input name="checkoutToggler" type="radio" id="paypal" value="2" />
											  <label for="paypal">Login with Paypal</label>
											</p>											
										</div>
										<form action="#">
											  <div class="row none toHide" id="form-1">
												 <div class="row">
													<div class="input-field col s12">
													  <input id="first_name" type="text" >
													  <label for="first_name">Card Number:</label>
													</div>
												  </div>
												  <div class="row">
													<div class="input-field col s12">
													  <input id="cardName" type="text" >
													  <label for="cardName">Name on card:</label>
													</div>
												  </div>
												  <div class="row">
													<div class="input-field col s12">
													  <label for="expirationDate">Expiration Date:</label>
													  <input id='expirationDate' type="text" class="datepicker">
													</div>
												  </div>
											  </div>
										</form>
										<form action="#">
											  <div class="row none toHide" id="form-2">
												<div class="input-field col s12 orange-text text-darken-3">
													<i class="mdi-action-account-circle prefix"></i>
													<input id="username" type="text" >
													<label for="username">Username</label>
												</div>
												<div class="input-field col s12 orange-text text-darken-3">
													<i class="mdi-action-lock-open prefix"></i>
													<input id="password" type="password" >
													<label for="password">Password</label>
												</div>
												<div class="col s12">
													<button class="right btn waves-effect waves-light green darken-3" type="submit" name="action">Log in</button>
												</div>
											 </div>
										</form>
								</div>
							</div>							
						</div>-->
						<!-- END guest payment method view -->
			</div>
			<div class="divider"></div>
			<div class="row topmarg3">
				<div class="col s12 l6">
					<div class="card">
						<div class="card-content">
							<h4 class="green-text text-darken-3">Review Items</h4>
							<div class="row">
								<div class="col l3 s3">
									<span><img src="img/chia.jpg" alt="" class="img-responsive cartImg"></span>
								</div>
								<div class="col l4 s4">
									<span>Title of product</span>
								</div>
								<div class="col l2 s2">
									<span class='right'>$2.49</span>
								</div>
								<div class="col l3 s3">
									<span class='right qtydropdown'>
										<select class="browser-default">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</span>
								</div>
							</div>
						</div>  
				    </div>
				</div>
				<div class="col s12 l6 right">
					<div class="card">
						<div class="card-content">
							<h4 class="green-text text-darken-3">Order Summary</h4>
							<ul class='larger'>
								<li>Items: <span class='right'>$28.19</span></li>
								<li>Shipping: <span class='right'>$0.00</span></li>
								<li>Total before tax: <span class='right'>$28.19</span></li>
								<li>Tax: <span class='right'>$1.83</span></li>
							</ul>
							<p>Order total: <span class='right bold'>$30.02</span></p>
						</div>
						<div class="card-action row white-text">
							<a href="" class="larger waves-effect waves-light btn-large orange darken-3 white-text right">Place Order</a>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>
	  
	
</main>

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
