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
  <title>Just Nature Home - John Panayiotou</title>

  <!-- CSS  -->
  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>
	
	<?php include_once("template_header.php");?>
   
<main>
   
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/smoothies.jpg" alt=""> 
        <div class="caption center-align">
          <h3>Smoothies</h3>
          <h5 class="light grey-text text-lighten-3">Just fresh</h5>
		  <a href="catalog.php" class="waves-effect waves-light btn-large orange darken-3">Shop Now</a>
        </div>
      </li>
      <li>
        <img src="img/nature2.jpg" alt=""> 
        <div class="caption left-align">
          <h3>Dried Fruit</h3>
          <h5 class="light grey-text text-lighten-3">Just delicious</h5>
		  <a href="catalog.php" class="waves-effect waves-light btn-large orange darken-3">Shop Now</a>
        </div>
      </li>
      <li>
        <img src="img/nature1.jpg" alt=""> 
        <div class="caption right-align">
          <h3>Bars</h3>
          <h5 class="light grey-text text-lighten-3">Just energy</h5>
		  <a href="catalog.php" class="waves-effect waves-light btn-large orange darken-3">Shop Now</a>
        </div>
      </li>
    </ul>
  </div> 
   
  <div class="container">
  

  <div class="section toppad3">
	  <div class="row">
		<div class="col s12">
		  <ul class="tabs">
			<li class="tab col s6"><a href="#hotProd">Hot Products</a></li>
			<li class="tab col s6"><a href="#newProd">New Products</a></li>
		  </ul>
		</div>
		<div id="hotProd">
		<?php while($row = $result->fetch_assoc()) { ?>	
			<div class="col s12 m4">
				 <div class="card hoverable">
				 <a href="product_details.php">
							<div class="card-image waves-effect waves-block waves-green">
							  <img src="<? echo $row['image'] ?>" alt="">
							</div>
							<div class="card-content orange-text text-darken-3">
								<p><? echo $row['productName'] ?></p>
							</div>
				</a>
							<div class="card-action row">
								<div class="col s12">
									<span class="left"><i class="material-icons">stars stars stars stars stars</i></span>
									<span class="right">$<? echo $row['price'] ?></span>
								</div>
								<div class="col s12">
									<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
								</div>
							</div>
							
				 </div>
			</div>	
			<? } ?>
		</div>
		<div id="newProd">
			<div class="col s12 m4">
				 <div class="card hoverable">
				 <a href="product_details.php">
							<div class="card-image waves-effect waves-block waves-green">
							  <img src="img/NLP_2183.jpg" alt="">
							</div>
							<div class="card-content orange-text text-darken-3">
								<p>Item</p>
							</div>
				</a>
							<div class="card-action row">
								<div class="col s12">
									<span class="left"><i class="material-icons">stars stars stars stars</i></span>
									<span class="right">$1.49</span>
								</div>
								<div class="col s12">
									<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
								</div>
							</div>
							
				 </div>
			</div>	
		</div>
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
			 <div class="card hoverable">
				 <a href="product_details.php">
							<div class="card-image waves-effect waves-block waves-green">
							  <img src="img/NLP_2183.jpg" alt="">
							</div>
							<div class="card-content orange-text text-darken-3">
								<p>Item</p>
							</div>
				</a>
							<div class="card-action row">
								<div class="col s12">
									<span class="left"><i class="material-icons">stars stars stars stars</i></span>
									<span class="right">$4.99</span>
								</div>
								<div class="col s12">
									<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
								</div>
							</div>
							
				 </div>
		  </div>
		  <div class="col s12 m6 l4">
			 <div class="card hoverable">
				 <a href="product_details.php">
							<div class="card-image waves-effect waves-block waves-green">
							  <img src="img/NLP_2183.jpg" alt="">
							</div>
							<div class="card-content orange-text text-darken-3">
								<p>Item</p>
							</div>
				</a>
							<div class="card-action row">
								<div class="col s12">
									<span class="left"><i class="material-icons">stars stars stars stars</i></span>
									<span class="right">$5.99</span>
								</div>
								<div class="col s12">
									<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
								</div>
							</div>
							
				 </div>
		  </div>
		  <div class="col s12 m6 l4">
			 <div class="card hoverable">
				 <a href="product_details.php">
							<div class="card-image waves-effect waves-block waves-green">
							  <img src="img/jn.png" alt="">
							</div>
							<div class="card-content orange-text text-darken-3">
								<p>Item</p>
							</div>
				</a>
							<div class="card-action row">
								<div class="col s12">
									<span class="left"><i class="material-icons">stars stars stars stars</i></span>
									<span class="right">$9.99</span>
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
	
	
     	<div class="section">
			
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
			 <div class="card hoverable">
				 <a href="product_details.php">
							<div class="card-image waves-effect waves-block waves-green">
							  <img src="img/jn.png" alt="">
							</div>
							<div class="card-content orange-text text-darken-3">
								<p>Item</p>
							</div>
				</a>
							<div class="card-action row">
								<div class="col s12">
									<span class="left"><i class="material-icons">stars stars stars stars</i></span>
									<span class="right">$4.99</span>
								</div>
								<div class="col s12">
									<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
								</div>
							</div>
							
				 </div>
		  </div>
		  <div class="col s12 m6 l4">
			 <div class="card hoverable">
				 <a href="product_details.php">
							<div class="card-image waves-effect waves-block waves-green">
							  <img src="img/jn.png" alt="">
							</div>
							<div class="card-content orange-text text-darken-3">
								<p>Item</p>
							</div>
				</a>
							<div class="card-action row">
								<div class="col s12">
									<span class="left"><i class="material-icons">stars stars stars stars</i></span>
									<span class="right">$5.99</span>
								</div>
								<div class="col s12">
									<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
								</div>
							</div>
							
				 </div>
		  </div>
		  <div class="col s12 m6 l4">
			 <div class="card hoverable">
				 <a href="product_details.php">
							<div class="card-image waves-effect waves-block waves-green">
							  <img src="img/jn.png" alt="">
							</div>
							<div class="card-content orange-text text-darken-3">
								<p>Item</p>
							</div>
				</a>
							<div class="card-action row">
								<div class="col s12">
									<span class="left"><i class="material-icons">stars stars stars stars</i></span>
									<span class="right">$9.99</span>
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
