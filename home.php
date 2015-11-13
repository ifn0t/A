<?php

require "mysql_connect.php"; 

$sql = "SELECT * FROM products WHERE productID = '5004' OR productID = '5005' OR productID = '5006'"; 
		
$result = $mysqli->query($sql); 
		
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Home</title>
  
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
   
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/banners/smoothieBannervs2.jpg" alt=""> 
        <div class="caption right-align">
          <h3>Vegan Smoothies</h3>
          <h5 class="">Smoothies used with only the freshest fruits and veggies!</h5>
		  <a href="catalog.php" class="waves-effect waves-light btn-large orange darken-3">Shop Now</a>
        </div>
      </li>
      <li>
        <img src="img/banners/waterBannervs2.jpg" alt=""> 
        <div class="caption left-align">
          <h3>Flavored Water</h3>
          <h5 class="">Refreshing waters infused with fruits and vegetables to keep you hydrated.</h5>
		  <a href="catalog.php" class="waves-effect waves-light btn-large orange darken-3">Shop Now</a>
        </div>
      </li>
      <li>
        <img src="img/banners/barBannervs2.jpg" alt=""> 
        <div class="caption right-align">
          <h3>Bars</h3>
          <h5 class="">Made with organic products to give you the energy you need to push through your day!</h5>
		  <a href="catalog.php" class="waves-effect waves-light btn-large orange darken-3">Shop Now</a>
        </div>
      </li>
    </ul>
  </div> 
   
  <!-- all page content under slider should be wrapped in container-->
  <div class="container">
  

  <div class="section toppad3">
	  <div class="row">
		<div class="col s12">
		  <ul class="tabs">
			<li class="tab col s6"><a href="#hotProd" class="larger">Hot Products</a></li>
			<li class="tab col s6"><a href="#newProd" class="larger">New Products</a></li>
		  </ul>
		</div>
		<!-- begin Hot Products section-->
		<div id="hotProd">
		<?php while($row = $result->fetch_assoc()) { ?>	
			<div class="col s12 m6 l4">
					 <div class="card large hoverable">
					 <a href="product_details.php">
								<div class="card-image waves-effect waves-block waves-green">
								  <img src="<? echo $row['image'] ?>" alt="">
								</div>
								<!--<div class="card-content orange-text text-darken-3">
									<p></p>
								</div>-->
					</a>
								<div class="card-action">
									<div class="col s12">
									<p class='cardTxt orange-text text-darken-3'><? echo $row['productName'] ?></p>
										<!--star rating system-->
										<form>
											<div class="br-wrapper br-theme-css-stars">
												<select class="stars">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</form>
										<!-- END star rating system-->													
										<span class="right">$<? echo $row['price'] ?></span>
									</div>
									<div class="col s12">
										<a href="#" class="waves-effect waves-light btn orange darken-3 white-text" onclick="Materialize.toast('Added to cart', 3000, 'rounded')">Add to Cart</a>
									</div>
								</div>
								
					 </div>
				 </div> 	
			<? } ?>
		</div>
		<!-- END Hot Products section-->
		<!-- Begin New Products section-->
		<div id="newProd">
			<div class="col s12 m6 l4">
				<div class="card large hoverable">
					 <a href="product_details.php">
						<div class="card-image waves-effect waves-block waves-green">
							<img class="img-responsive" src="img/NLP_2183.jpg" alt="">
						</div>
					</a>
					<div class="card-action">
						<div class="col s12">
							<p class='cardTxt orange-text text-darken-3'>Item</p>
							<!--star rating system-->
							<form>
								<div class="br-wrapper br-theme-css-stars">
									<select class="stars">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</form>
							<!-- END star rating system-->
							<span class="right">$1.99</span>
						</div>
						<div class="col s12">
							<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
						</div>
					</div>	
				</div>
			</div> 
		</div><!-- END New Products section-->
	  </div>
  </div>      

    <div class="divider"></div>
		
	<div class="section">	
		<div class="row">
			<div class="col s12">
				<h3 class='green-text text-darken-3'>Drinks</h3>
			</div>	
		</div>
		<div class="row">
		    <div class="col s12 m6 l4">
				<div class="card large hoverable">
					 <a href="product_details.php">
						<div class="card-image waves-effect waves-block waves-green">
							<img class="img-responsive" src="img/NLP_2183.jpg" alt="">
						</div>
					</a>
					<div class="card-action">
						<div class="col s12">
							<p class='cardTxt orange-text text-darken-3'>Item</p>
							<!--star rating system-->
							<form>
								<div class="br-wrapper br-theme-css-stars">
									<select class="stars">
										<option value="">#</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</form>
							<!-- END star rating system-->
							<span class="right">$1.99</span>
						</div>
						<div class="col s12">
							<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
						</div>
					</div>	
				</div>
			</div>
		    <div class="col s12 m6 l4">
				<div class="card large hoverable">
					 <a href="product_details.php">
						<div class="card-image waves-effect waves-block waves-green">
							<img class="img-responsive" src="img/NLP_2183.jpg" alt="">
						</div>
					</a>
					<div class="card-action">
						<div class="col s12">
							<p class='cardTxt orange-text text-darken-3'>Item</p>
							<!--star rating system-->
							<form>
								<div class="br-wrapper br-theme-css-stars">
									<select class="stars">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</form>
							<!-- END star rating system-->
							<span class="right">$1.99</span>
						</div>
						<div class="col s12">
							<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
						</div>
					</div>	
				</div>
			</div>
		    <div class="col s12 m6 l4">
				<div class="card large hoverable">
					 <a href="product_details.php">
						<div class="card-image waves-effect waves-block waves-green">
							<img class="img-responsive" src="img/NLP_2183.jpg" alt="">
						</div>
					</a>
					<div class="card-action">
						<div class="col s12">
							<p class='cardTxt orange-text text-darken-3'>Item</p>
							<!--star rating system-->
							<form>
								<div class="br-wrapper br-theme-css-stars">
									<select class="stars">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</form>
							<!-- END star rating system-->
							<span class="right">$1.99</span>
						</div>
						<div class="col s12">
							<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
						</div>
					</div>	
				</div>
			</div>
		    <ul class="pagination">			
			  <li class="waves-effect right"><a href="catalog.php" class="green-text text-darken-3">See more</a></li>
		    </ul>
		</div>		
	</div>	
	
	<div class="divider"></div>
	
	<div class="section">	
		<div class="row">
			<div class="col s12">
				<h3 class='green-text text-darken-3'>Bars</h3>
			</div>	
		</div>
		<div class="row">
		  <div class="col s12 m6 l4">
				<div class="card large hoverable">
					 <a href="product_details.php">
						<div class="card-image waves-effect waves-block waves-green">
							<img class="img-responsive" src="img/NLP_2183.jpg" alt="">
						</div>
					</a>
					<div class="card-action">
						<div class="col s12">
							<p class='cardTxt orange-text text-darken-3'>Item</p>
							<!--star rating system-->
							<form>
								<div class="br-wrapper br-theme-css-stars">
									<select class="stars">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</form>
							<!-- END star rating system-->
							<span class="right">$1.99</span>
						</div>
						<div class="col s12">
							<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
						</div>
					</div>	
				</div>
			</div>
		    <ul class="pagination">			
			  <li class="waves-effect right"><a href="catalog.php" class="green-text text-darken-3">See more</a></li>
		    </ul>
		</div>		
	</div>	
	
	
	
   </div><!-- END container-->
	
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

<?php
$mysqli->close();
?>
