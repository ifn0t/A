<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Cart</title>

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
						<h3 class="header orange-text text-darken-3">Shopping Cart</h3>
					<div class="divider"></div>
				</div>
			</div>
	 
	   
	   
		<form action="#" method="get">			
			<div class="col s12">
					<div class="row">
						<div class='row green-text text-darken-3 cartLabel'>
							<div class="col l2 offset-l7 s2 offset-s7">
								<span class='left'>Price</span>
							</div>
							<div class="col l3 s3">
								<span class='left'>QTY</span>
							</div>							
						</div>
					</div>
					<div class="row topmarg3">
						<div class="col l3 s3">
							<span><img src="img/chia.jpg" alt="" class="circle img-responsive cartImg"></span>
						</div>
						<div class="col l4 s4">
							<span class='cartTxt'>Title</span>
						</div>
						<div class="col l2 s2">
							<span class='left cartTxt'>$2.49</span>
						</div>
						<div class="col l3 s3">
							<span class="cartTxt">2</span>
							<span class="right">
								<a href ="cart.php?minus=' . $id .'" class="topmarg3 right btn btn-flat btn-floating white waves-effect waves break"><span class="green-text text-darken-3 qtyBtn bold">-</span></a>
								<a href ="cart.php?add=' . $id .'" class="topmarg3 right btn btn-flat btn-floating white waves-effect waves break"><span class="green-text text-darken-3 qtyBtn bold">+</span></a>	
							</span>
						</div>
						<div class="col l3 s3 offset-s9 offset-l9 topmarg3">
							<a href ="cart.php?remove=' . $id .'" class="right btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>
						</div>
					</div>
			</div>
			
			<div class="divider"></div>			
			
			
			 <div class="row">
			    <div class="col s12 m4 offset-m8">
					<p class="header right-align"><strong>Sub Total</strong> $9.99</p>
					<h4 class="header right-align orange-text text-darken-3"><strong>Total</strong> $9.99</h4>
				</div>
			 </div>
			 <div class="row">
				<div class="col s12">
				  <a href="checkout.php" class="waves-effect waves-light btn-large orange darken-3 white-text right">Proceed to Checkout</a>
				</div>
        	 </div>	
		
		</form>
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

<?php
/* $mysqli->close(); */
?>