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

  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>
	
	<?php include_once("template_header.php");?>
   
<main>
	
  
	<div class="section">
	  <div class="container">
			<div class="row">
				<div class="col s12">
					<div class="divider"></div>
						<h3 class="header orange-text text-darken-3">Your Account</h3>
					<div class="divider"></div>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
				  <ul class="tabs">
					<li class="tab col s3"><a href="#order">Orders</a></li>
					<li class="tab col s3"><a href="#address">Address Book</a></li>
					<li class="tab col s3"><a href="#payment">Payment Info</a></li>
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
				
				
				
				<div id="order" class="col s12">
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
				<div id="address" class="col s12">
					<div class="row">
						<div class="col s12 l6">
							  <div class="card white">
								<div class="card-content black-text">
								  <span class="card-title black-text">Current Shipping Address</span>
								   <ul>
									  <li class="">Bob Bob</li>
									  <li class="">4561 Bobba Road, Alabaster, KY 32142</li>
									  <li class="">Phone: 000-000-0000</li>
								   </ul>
								</div>
								<div class="card-action row white-text">
									  <a href="#" class="waves-effect waves-light btn orange darken-3 white-text right">Edit Address</a>
								</div>
							  </div>
						</div>
						<div class="col s12 l6">
							<h4 class="header orange-text text-darken-3">Enter a new Address</h4>
							<form class="col s12 m10">
							  <div class="row">
								<div class="input-field col s12">
								  <input id="fullName" type="text" class="validate">
								  <label for="fullName">Full Name:</label>
								</div>
							  </div>
							  <div class="row">
								<div class="input-field col s12">
								  <input id="addressInput" type="text" class="validate">
								  <label for="addressInput">Address:</label>
								</div>
							  </div>
							  <div class="row">
								<div class="input-field col s12">
								  <input id="city" type="text" class="validate">
								  <label for="city">City:</label>
								</div>
							  </div>
							  <div class="row">
								<div class="input-field col s12">
								  <input id="zip" type="text" class="validate">
								  <label for="zip">ZIP:</label>
								</div>
							  </div>
							  <div class="row">
								<div class="input-field col s12">
								  <input id="country" type="text" class="validate">
								  <label for="country">Country:</label>
								</div>
							  </div>
							  <button class="btn waves-effect waves-light orange darken-3" type="submit" name="action">Submit
								<i class="material-icons right">send</i>
							  </button>
							</form>
						</div>
					</div>
				</div>
				<div id="payment" class="col s12">
					<div class="row">
						<div class="col s12 l6">
						  <div class="card white">
							<div class="card-content black-text">
							  <span class="card-title black-text">Credit & Debit Cards</span>
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
							</div>
							<div class="card-action row white-text">
								  <a href="#" class="waves-effect waves-light btn orange darken-3 white-text right">Edit Cards</a>
							</div>
						  </div>
						</div>
				   <div class="col s12 l6">
					   <h4 class="header orange-text text-darken-3">Add a Card</h4>
						<form class="col s12">
							  <div class="row">
								<div class="input-field col s12">
								  <input id="first_name" type="text" class="validate">
								  <label for="first_name">Card Number:</label>
								</div>
							  </div>
							  <div class="row">
								<div class="input-field col s12">
								  <input id="cardName" type="text" class="validate">
								  <label for="cardName">Name on card:</label>
								</div>
							  </div>
							  <div class="row">
								<div class="input-field col s12">
								  <label for="expirationDate">Expiration Date:</label>
								  <input id='expirationDate' type="text" class="datepicker">
								  
								</div>
							  </div>
							  <button class="btn waves-effect waves-light orange darken-3" type="submit" name="action">Submit
								<i class="material-icons right">send</i>
							  </button>
							</form>		
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
	

  </body>
</html>

<?php
$mysqli->close();
?>
