<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Admin</title>

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
						<h3 class="header orange-text text-darken-3">Admin</h3>
					<div class="divider"></div>					 
				</div>
			</div>
			<div class="row">
				<div class="col s12">
				  <ul class="tabs">
					<li class="tab col s3"><a class='acountTabTxt' href="#overview">Overview</a></li>
					<li class="tab col s3"><a class='acountTabTxt' href="#manageProducts">Manage Products</a></li>
				  </ul>
				</div>
				<div id="manageProducts" class="col s12">
					 <div class="row">
						<form class="col s12">
							 <table class="bordered responsive-table">
								<thead>
								  <tr>
									  <th data-field="id">Name</th>
									  <th data-field="name">Description</th>
									  <th data-field="price">Category</th>
									  <th data-field="id">Subcategory</th>
									  <th data-field="name">SKU</th>
									  <th data-field="price">Cost</th>
									  <th data-field="price">Price</th>
									  <th data-field="price">Weight</th>
									  <th data-field="price">Edit</th>
									  <th data-field="price">Delete</th>
								  </tr>
								</thead>

								<tbody>
								  <tr>
									<td>Deez nuts</td>
									<td class='test'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis nibh vestibulum.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a href="#editProduct" class="modal-trigger btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a href="#confirmDelete" class="modal-trigger btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis nibh vestibulum.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a href="#editProduct" class="modal-trigger btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a href="#confirmDelete" class="modal-trigger btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a href="#editProduct" class="modal-trigger btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a href="#confirmDelete" class="modal-trigger btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis nibh vestibulum, tempor metus iaculis, pulvinar velit.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a href="#editProduct" class="modal-trigger btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a href="#confirmDelete" class="modal-trigger btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis nibh vestibulum, tempor metus iaculis.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a href="#editProduct" class="modal-trigger btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a href="#confirmDelete" class="modal-trigger btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a href="#editProduct" class="modal-trigger btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a href="#confirmDelete" class="modal-trigger btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur. </td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a href="#editProduct" class="modal-trigger btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a href="#confirmDelete" class="modal-trigger btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis nibh vestibulum.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a href="#editProduct" class="modal-trigger btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a href="#confirmDelete" class="modal-trigger btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								</tbody>
							  </table>						
						</form>
					 </div>				 
					 <div class="row">
						<div class="col s12">
							<a  href="#addProduct" class="modal-trigger waves-effect waves-light btn-large orange darken-3">Add a Product</a>
						</div>
					</div>
				</div>
				<div id="overview" class="col s12">
					
					<div class="row">
						<div class="card green darken-3">
							<div class="card-content white-text">
								<h4 class="header">Sales</h4>
								<ul>
									<li><p>User Accounts:<span class="bold"> 100</span></p></li>
									<li><p>Total Orders:<span class="bold"> 233</span></p></li>
									<li><p>Total Sales:<span class="bold"> $1,029</span></p></li>
								</ul>
						    </div>
						</div>
					</div>
					
					<div class="row">
						<div class="card green darken-3">
							<div class="card-content white-text">
								<h4 class="header">Products</h4>
								<ul>
									<li><p>Number of Products:<span class="bold"> 60</span></p></li>
									<li><p>Best Selling Product:<span class="bold"> blah</span></p></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<h4 class="header orange-text text-darken-3">Customer Orders</h4>
						<ul class="collection">
						<li class="collection-item avatar">
						  <i class="material-icons circle">thumb_up</i>
						  <span class="title">Customer Name</span>
						  <p>Product Name</p>
						  <p>$4.75</p>
						  <p class="secondary-content">04/22/2045</p>
						</li>
						<li class="collection-item avatar">
						  <i class="material-icons circle">thumb_up</i>
						  <span class="title">Customer</span>
						  <p>Product Name</p>
						  <p>$4.75</p>
						  <p class="secondary-content">04/22/2045</p>
						</li>
						<li class="collection-item avatar">
						  <i class="material-icons circle">thumb_up</i>
						  <span class="title">Customer Name</span>
						  <p>Product Name</p>
						  <p>$4.75</p>
						  <p class="secondary-content">04/21/2045</p>
						</li>
						<li class="collection-item avatar">
						  <i class="material-icons circle">thumb_up</i>
						  <span class="title">Customer Name</span>
						  <p>Product Name</p>
						  <p>$4.75</p>
						  <p class="secondary-content">04/20/2045</p>
						</li>
					  </ul>
					</div>
				</div>			
			</div>
		</div>
	</div>
	   
	    
	
</main>



  <!-- Confirmation modal -->
  <div id="confirmDelete" class="modal confirm">
	<form>
		<div class="modal-content larger">
		  <p>Are you sure you want to Delete</p>
		  <p class='bold green-text text-darken-3'>Item name?</p>
		</div>
		<div class="modal-footer">
		  <button class="btn waves-effect waves-light green darken-3" type="submit" name="action">Yes</button>
		  <a class="btn btn-flat white modal-close">No</a>
		</div>
	</form>
  </div>
  
  
  <div id="editProduct" class="modal">
    <div class="modal-content">
	    <div class="row">
			<h4 class="orange-text text-darken-3">Edit Product</h4>
			<form class="col s12">
				<div class="row">
					<div class="input-field col s12">
						<input id="editProductName" type="text" data-validation="required" data-validation-error-msg="Product name is required">
						<label for="editProductName">Product Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="editBrandName" type="text" data-validation="required" data-validation-error-msg="Brand name is required">
						<label for="editBrandName">Brand</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<textarea id="editProductDescription" class="materialize-textarea" placeholder="Product description" data-validation="required" data-validation-error-msg="Description is required"></textarea>
						<label for="editProductDescription">Description</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="text" id="editProductSku" data-validation="required">
						<label for="editProductSku">SKU</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="number" id="editProductStock" data-validation="number">
						<label for="editProductStock">Stock</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input placeholder="1.99" type="text" id="editProductCost" data-validation="number" data-validation-allowing="float">
						<label for="editProductCost">Cost</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input placeholder="2.99" type="text" id="editProductPrice" data-validation="number" data-validation-allowing="float">
						<label for="editProductPrice">Price</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<div class="file-field input-field">
							<div class="btn orange darken-3">
							<span>Add Image</span>
							<input type="file" data-validation="size" data-validation-max-size="2M">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="text" id="editProductWeight"  placeholder="measured in oz" data-validation="number" data-validation-allowing="float">
						<label for="editProductWeight">Weight</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6 m4" >
						<select class="browser-default" data-validation="required" data-validation-error-msg="Please select a category">
							<option value="" disabled selected>Category</option>
							<option value="nutsAndSeeds">Nuts & Seeds</option>
							<option value="driedFruit">Dried Fruit</option>
							<option value="bars">Bars</option>
							<option value="smoothies">Smoothies</option>
							<option value="juice">Juice</option>
							<option value="tea">Flavored Water</option>			
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
					   <p>Preferences</p>
					</div>
					<ul class="col s12">
						<li class='filterBoxes'>
							<input type="checkbox" name="editGlutenFilter" id="editGlutenFilter" value="1" class="filled-in">
							<label for="editGlutenFilter">Gluten-free</label>
						</li>
						<li class='filterBoxes'>
							<input type="checkbox" name="editVeganFilter" id="editVeganFilter" value="2" class="filled-in">
							<label for="editVeganFilter">Vegan</label>
						</li>
						<li class='filterBoxes'>
							<input type="checkbox" name="editSugarFilter" id="editSugarFilter" value="3" class="filled-in">
							<label for="editSugarFilter">Sugar-free</label>
						</li>
					</ul>
				</div>
				<div class="modal-footer">
					<button class="btn waves-effect waves-light orange darken-3" type="submit" name="action">Submit</button>
					<a class="btn btn-flat white modal-close">Cancel</a>
				</div>
			</form>
		</div>
	</div>
  </div>




  <div id="addProduct" class="modal">
    <div class="modal-content">
	    <div class="row">
						<h4 class="orange-text text-darken-3">Add a Product</h4>
								<form class="col s12">
								  <div class="row">
									<div class="input-field col s12">
									  <input id="productName" type="text" data-validation="required" data-validation-error-msg="Product name is required">
									  <label for="productName">Product Name</label>
									</div>
								  </div>
								  <div class="row">
									<div class="input-field col s12">
									  <input id="brandName" type="text" data-validation="required" data-validation-error-msg="Brand name is required">
									  <label for="brandName">Brand</label>
									</div>
								  </div>
								  <div class="row">
									<div class="input-field col s12">
									  <textarea id="productDescription" class="materialize-textarea" placeholder="Product description" data-validation="required" data-validation-error-msg="Description is required"></textarea>
									  <label for="productDescription">Description</label>
									</div>
								  </div>
								  <div class="row">
									<div class="input-field col s12">
									  <input type="text" id="productSku" data-validation="required">
									  <label for="productSku">SKU</label>
									</div>
								  </div>
								  <div class="row">
									<div class="input-field col s12">
									  <input type="number" id="productStock" data-validation="number">
									  <label for="productStock">Stock</label>
									</div>
								  </div>
								  <div class="row">
									<div class="input-field col s12">
									  <input placeholder="1.99" type="text" id="productCost" data-validation="number" data-validation-allowing="float">
									  <label for="productCost">Cost</label>
									</div>
								  </div>
								  <div class="row">
									<div class="input-field col s12">
									  <input placeholder="2.99" type="text" id="productPrice" data-validation="number" data-validation-allowing="float">
									  <label for="productPrice">Price</label>
									</div>
								  </div>
								  <div class="row">
								   <div class="input-field col s12">
									   <div class="file-field input-field">
										  <div class="btn orange darken-3">
											<span>Add Image</span>
											<input type="file" data-validation="size" data-validation-max-size="2M">
										  </div>
										  <div class="file-path-wrapper">
											<input class="file-path validate" type="text">
										  </div>
										</div>
									</div>
								  </div>
								  <div class="row">
									<div class="input-field col s12">
									  <input type="text" id="productWeight" placeholder="measured in oz" data-validation="number" data-validation-allowing="float">
									  <label for="productWeight" >Weight</label>
									</div>
								  </div>
								  <div class="row">
									  <div class="input-field col s6 m4">
										<select class="browser-default" data-validation="required" data-validation-error-msg="Please select a category">
										  <option value="" disabled selected>Category</option>
										  <option value="nutsAndSeeds">Nuts & Seeds</option>
										  <option value="driedFruit">Dried Fruit</option>
										   <option value="bars">Bars</option>
										  <option value="smoothies">Smoothies</option>
										  <option value="juice">Juice</option>
										  <option value="tea">Flavored Water</option>			
										</select>
									  </div>
								  </div>
								  <div class="row">
									<div class="input-field col s12">
									   <p>Preferences</p>
									</div>
									<ul class="col s12">
										<li class='filterBoxes'>
											<input type="checkbox" name="glutenFilter" id="glutenFilter" value="1" class="filled-in">
											<label for="glutenFilter">Gluten-free</label>
										</li>
										<li class='filterBoxes'>
											<input type="checkbox" name="veganFilter" id="veganFilter" value="2" class="filled-in">
											<label for="veganFilter">Vegan</label>
										</li>
										<li class='filterBoxes'>
											<input type="checkbox" name="sugarFilter" id="sugarFilter" value="3" class="filled-in">
											<label for="sugarFilter">Sugar-free</label>
										</li>
									</ul>
								  </div>
								  <div class="modal-footer">
									<button class="btn waves-effect waves-light orange darken-3" type="submit" name="action">Submit</button>
									<a class="btn btn-flat white modal-close">Cancel</a>
								  </div>
								</form>
							</div>
					
	</div>
  </div>
  
<?php include_once("template_footer.php");?>  


	
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/jquery.barrating.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>

  </body>
</html>
