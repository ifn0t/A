<header>
	<!-- Dropdowns -->
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
		
		<ul id='cartDropdown' class='dropdown-content dropdown-cart'>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img class='dropImg' src="img/bars2.png" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>$4.49</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn-floating waves-effect waves-light red">x</button>
                    </span>
                </span>
              </li>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img class='dropImg' src="img/driedfruit19.jpg" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>$1.99</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn-floating waves-effect waves-light red">x</button>
                    </span>
                </span>
              </li>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img class='dropImg' src="img/juice31.jpg" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>$2.99</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn-floating waves-effect waves-light red">x</button>
                    </span>
                </span>
              </li>
              <li class="divider"></li>
              <li><a class="center" href="cart.php">View Cart</a></li>
          </ul>
		
	
		<div class="navbar-fixed">	
		  <nav class="nav-wrapper tall white" role="navigation">
			<div class="nav-wrapper">
				<div class="container">
					<div class="nav-text">
						<ul class="left hide-on-med-and-down">
							<li><a href="catalog.php" class="dropdown-button green-text text-darken-3" data-activates="snacksDropdown">Snacks</a></li>
							<li><a href="catalog.php" class="dropdown-button green-text text-darken-3" data-activates="drinksDropdown">Drinks</a></li>
							<li><a href="catalog.php" class="green-text text-darken-3">Bars</a></li>
						</ul>
						
						<!--<a href="catalog.php" class="brand-logo green-text text-darken-3 center">Just Nature<img id="logo" class="responsive-img" src="img/logo-notag.png" alt="logo" /></a>-->
						<ul>
							<li><a id="logo-container" href="home.php" class="center brand-logo green-text text-darken-3" >
							<img id="logo" class="responsive-img" src="img/logo2.png" alt="logo" />
							<!--<img id="logo" class="hide-on-large-only responsive-img" src="img/logo-notag.png" alt="logo" />-->
							</a></li>
						</ul>
							  
						<ul class="right">
							<li class="hide-on-med-and-down"><a href="sign_in.php" class="dropdown-button green-text text-darken-3" data-activates="guestDropdown">Sign In</a></li>
							<!-- Customer signed in view
								 
								 <li class="hide-on-med-and-down"><a href="client.php" class="dropdown-button green-text text-darken-3" data-activates="customerDropdown"><i class="large material-icons green-text text-darken-3">perm_identity</i></a></li></li>
							-->
							
							<!-- Admin signed in view
								 
								 <li class="hide-on-med-and-down"><a href="admin.php" class="dropdown-button green-text text-darken-3" data-activates="adminDropdown"><i class="large material-icons green-text text-darken-3">perm_identity</i></a></li></li>
							-->
							<li class="dropdown-button hide-on-med-and-down" data-activates="cartDropdown"><a href="cart.php"><i class="nav-icon large material-icons green-text text-darken-3">shopping_cart</i></a></li>
						</ul>
					
					</div>
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
		</div>
		
	  <!--<div class="white-text green darken-3" id="search">
			<div class="container">
				<form action="https://www.google.com/search" method="get">
					<input class="form-control" type="text" name="search" placeholder="Search ...">
					<input type="hidden" name="as_sitesearch" value="">
				</form>
			</div>
	  </div>-->
	  
	  <div class="fixed-action-btn bmarg1">
		<form action="#" method="get">
		    <a class="waves-effect waves-light btn-floating btn-large green darken-3" id="search-trigger">
		      <i class="large mdi-action-search"></i>
		    </a>
	    	<input type="text" name="s" class="green darken-3 search white-text animated fadeIn" id='search' placeholder="Search ...">
	    </form>
      </div>	  
	  
	  <!-- Success message-->
	  <div class="row animated slideInDown none">
		<div class="col s12 greenAlert">
			<p class='right'>this is a good alert!</p>
		</div>
	  </div>
	  
	  
	  <!--Error message-->
	  <div class="row animated slideInDown none">
		<div class="col s12 redAlert">
			<p class='right'>this is a bad alert!</p>
		</div>
	  </div>
	  
 </header>