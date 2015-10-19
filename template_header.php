<header>
<!-- Dropdown Structure -->
		<ul id="snacksDropdown" class="dropdown-content">
		  <li><a href="catalog.php">Nuts & Seeds</a></li>
		  <li class="divider"></li>
		  <li><a href="catalog.php">Dried Fruit</a></li>
		</ul>
		
		<ul id="drinksDropdown" class="dropdown-content">
		  <li><a href="catalog.php">Smoothies</a></li>
		  <li class="divider"></li>
		  <li><a href="catalog.php">Juice</a></li>
		  <li class="divider"></li>
		  <li><a href="catalog.php">Flavored Water</a></li>
		</ul>
		
		<ul id='adminDropdown' class='dropdown-content'>
			<li><a href="admin.php">Your Account</a></li>
			<li><a href="">Sign Out</a></li>
	    </ul>
		
		<ul id='customerDropdown' class='dropdown-content'>
			<li><a href="client.php">Your Account</a></li>
			<li><a href="">Sign Out</a></li>
	    </ul>
		
		<ul id='guestDropdown' class='dropdown-content'>
			<li><a href="sign_up.php">New member? Start here!</a></li>
	    </ul>
	   
			
		  <nav class="nav-wrapper white" role="navigation">
			<div class="nav-wrapper">
				<div class="container">
				
					<ul class="left hide-on-med-and-down">
						<li><a href="catalog.php" class="dropdown-button green-text text-darken-3" data-activates="snacksDropdown">Snacks</a></li>
						<li><a href="catalog.php" class="dropdown-button green-text text-darken-3" data-activates="drinksDropdown">Drinks</a></li>
						<li><a href="catalog.php" class="green-text text-darken-3">Bars</a></li>
					</ul>
					
					<a id="logo-container" href="home.php" class="brand-logo center"><img id="logo" class="responsive-img" src="img/logoS.png" alt="mock logo" /></a>
						  
					<ul class="right">
						<li class="hide-on-med-and-down"><a href="sign_in.php" class="dropdown-button green-text text-darken-3" data-activates="guestDropdown">Sign In</a></li>
						<!-- Customer signed in view
							 
							 <li class="hide-on-med-and-down"><a href="client.php" class="dropdown-button green-text text-darken-3" data-activates="customerDropdown"><i class="large material-icons green-text text-darken-3">perm_identity</i></a></li></li>
						-->
						
						<!-- Admin signed in view
							 
							 <li class="hide-on-med-and-down"><a href="admin.php" class="dropdown-button green-text text-darken-3" data-activates="adminDropdown"><i class="large material-icons green-text text-darken-3">perm_identity</i></a></li></li>
						-->
						<li class="hide-on-med-and-down"><a href="cart.php"><i class="large material-icons green-text text-darken-3">shopping_cart</i></a></li>
						<li><a href="#!" id="toggle-search"><i class="large mdi-action-search green-text text-darken-3"></i></a></li>
					</ul>
					
				</div>

				<ul id="nav-mobile" class="side-nav">
					<li><a href="sign_in.php" class="green-text text-darken-3">Sign In</a></li>
					<!-- Signed in view
					
					     <li><a href="sign_in.php" class="green-text text-darken-3"><i class="material-icons green-text text-darken-3">perm_identity</i></a></li>
					-->
					<li><a href="cart.php"><i class="material-icons green-text text-darken-3">shopping_cart</i></a></li>
					<li><a href="catalog.php" class="green-text text-darken-3">Snacks</a></li>
					<li><a href="catalog.php" class="green-text text-darken-3">Drinks</a></li>
					<li><a href="catalog.php" class="green-text text-darken-3">Bars</a></li>
				</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons green-text text-darken-3">menu</i></a>
			</div>
		  </nav>
		
		
	  <div class="white-text green darken-3" id="search">

				<div class="container">
					<form action="https://www.google.com/search" method="get">
						<input class="form-control" type="text" name="search" placeholder="Search ...">
						<input type="hidden" name="as_sitesearch" value="">
					</form>
				</div>

	   </div>
 </header>