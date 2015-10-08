<?php

require "mysql_connect.php"; 

$sql = 'SELECT * FROM products'; 

$result = $mysqli->query($sql); 

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Catalog - John Panayiotou</title>

  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>
		

  <?php include_once("template_header.php");?>
   
 <main>
 
 <div class='container'>
 
 	
		
 <div class="section">
	<div class="row">
		<div class="col s12">
			<div class="divider"></div>
			<h3 class='green-text text-darken-3'>Catalog</h3>
			<div class="divider"></div>
			<ul class="right hide-on-med-and-down">
			   <li class='filterBoxes'>
				  <input onclick="this.form.submit()" type="checkbox" name="filter1" id="filter1" value="1" class="filled-in">
				  <label for="filter1">Gluten-free</label>
				</li>
				<li class='filterBoxes'>
				   <input onclick="this.form.submit()" type="checkbox" name="filter2" id="filter2" value="2" class="filled-in">
				   <label for="filter2">Vegan</label>
				</li>
			</ul>
		</div>
	</div>
	<div class="divider"></div>
	<div class="row">  
		<!-- <div class="col s12 l3 green-text text-darken-3">
			<ul class="collapsible" data-collapsible="expandable">
			<li>
			  <div class="collapsible-header active"><p><a href="#">Yogurt</a></p></div>
			</li>
			<li>
			  <div class="collapsible-header active"><p><a href="#">Nuts & Seeds</a></p></div>
			</li>
			<li>
			   <div class="collapsible-header"><p><a href="#">Dried Fruit</a></p></div>
			   <div class="collapsible-body">
					 <ul>
                      <li>
                        <input onclick="this.form.submit()" type="checkbox" name="something1" id="something1" value="1" >
                        <label for="something1">filter</label>
                       </li>
                       <li>
						<input onclick="this.form.submit()" type="checkbox" name="something2" id="something2" value="1" >
                        <label for="something2">filter</label>
                       </li>
                   </ul>
			   </div>
			   
			</li>
			<li>
			  <div class="collapsible-header"><p>Smoothies</p></div>
			</li>
			<li>
			  <div class="collapsible-header"><p>Juice</p></div>
			</li>
			<li>
			  <div class="collapsible-header"><p>Tea</p></div>
			</li>
			<li>
			  <div class="collapsible-header"><p>Bars</p></div>
			</li>
		  </ul>
		</div> -->
		
		
		
		<div class="col s12">
		
	    <?php
        while($row = $result->fetch_assoc()) { ?>	 
				 <div class="col s12 m6 l4">
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
										<span class="left"><i class="material-icons">stars stars stars stars</i></span>
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
	</div>
	</div>
	
	<div class="section">
		<div class="row">
			<div class="col s12">
				  <ul class="pagination right">
					<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
					<li class="active"><a href="#!">1</a></li>
					<li class="waves-effect"><a href="#!">2</a></li>
					<li class="waves-effect"><a href="#!">3</a></li>
					<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
				  </ul>
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
