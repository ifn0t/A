<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Cart - John Panayiotou</title>

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
						<h3 class="header orange-text text-darken-3">Shopping Cart</h3>
					<div class="divider"></div>
				</div>
			</div>
	 
	   
	   
		<form action="#" method="get">
			<div class="row">
              <div class="col l6 s12">
                <img class="responsive-img" src="img/logoS.png" alt="logo" />
				    <p class='cartProdName'>Product Name</p>	  
              </div>
              <div class="col l3 s12">
                <ul>
                  <li><p><strong>Price</strong></p></li>
				  <li><p>9.99</p></li>
                </ul>
              </div>
			  <div class="col l2 offset-l1 s6">
                <ul>
                    <label class="black-text">Quantity</label>
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
                </ul>
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
				<div class="col s12 m4 offset-m8">
				  <!-- <button class="btn-large right waves-effect waves-light orange darken-3" type="submit" name="action">Proceed to Checkout
				  </button> -->
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
	

  </body>
</html>
