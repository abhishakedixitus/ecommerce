<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sign-In</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place Dairest icon in the url location -->
        <link rel="icon" href="img/logo/logo1.png" />

		    <!-- google-font -->
		    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
		    <!-- all css here -->
		    <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		    <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		    <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		    <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		    <!-- nivo-slider css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
		    <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		    <!--linearicons css -->
        <link rel="stylesheet" href="css/linearicons-icon-font.min.css">
		    <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		    <!-- style css -->
		    <link rel="stylesheet" href="style1.css">
		    <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
    </head>

    <body>
		<header>
			<div class="header-top-area ptb-10 hidden-xs header-top-area-4">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-5">
							<div class="header-top-right header-top-left-4">
								<p>FREE SHIPPING ON ORDERS OVER $49</p>
							</div>
						</div>

						<div class="col-lg-9 col-md-8 col-sm-7 header-top-right-4">
							<div class="header-top-left">
								<ul>
                
										  
											  <li><a href="sign-in.php">Compare Products</a></li>
									
									<li><a href="sign-up.php">Create an account</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="header-bottom-area home-page-2 ptb-10" style="background-color:rgb(110,65,10)">
				<div class="container">
					<div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="logo logo2">
								<a href="index.php"><img src="img/logo/logo2.png" width="70%" height="50%" alt=""/></a>
							</div>
						</div>
						
						

						<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
							<div class="header-bottom-right-4-inner">
								<a href="#" style="color:#ffffff"><span class="lnr lnr-heart"></span></a>
							</div>
							<div class="header-bottom-right header-bottom-right-4">
								<div class="shop-cart shop-cart-empty">
									<a href="#" style="color:#ffffff"><span class="lnr lnr-cart"></span></a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header-end -->

<!-- mainmenu-area-start -->
		
            

		<div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
          
			<div class="container">
                
				<div class="row">
                    
					<div class="col-md-12" >
                        
						<div class="mobile-menu">
                              
							<nav id="mobile-menu">
                                
								<ul>
                                    
                                     <li><a href="index.php">Home</a></li>
                  <li><a href="#">Navigation</a>
                    <ul>
                      <li><a href="wishlist.php">my wishlist</a></li>
                      <li><a href="cart.php">cart page</a></li>
                      <li><a href="checkout.php">checkout</a></li>
                      <li><a href="product-details.php">product-details</a></li>
                      <li><a href="user_accountpage.php">User account</a></li>
                      <li><a href="sign-in.php">login</a></li>
                                            <li><a href="sign-up.php">Register</a></li>
                      <li><a href="shop.php">shop </a></li>
                      <li><a href="contact.php">contact us</a></li>
                    </ul>
                  </li>
                                    
     <li><a href="#">Category</a>
                    <ul>
                      <li><a href=#>New Arrivals</a></li>
                      <li><a href=#>Famous Brands</a></li>
                      <li><a href=#>Local Popular</a></li>
                      <li><a href=#>Snickers</a></li>
                      <li><a href=#>Creations</a></li>
                    </ul>
                  </li>

                  <li><a href="shop.php">Gifts</a>
                    <ul>
                      <li><a href=#>Birthday Gifts</a></li>
                      <li><a href=#>Anniversary</a></li>
                      <li><a href=#>Baby Showers</a></li>
                      <li><a href=#>Business Gifts</a></li>
                      <li><a href=#>Treat Yourself</a></li>
                    </ul>
                  </li>

                  <li><a href="shop.php">Chocolate</a>
                    <ul>
                      <li><a href=#>Dark Chocolate</a></li>
                      <li><a href=#>Milk Chocolate</a></li>
                      <li><a href=#>White Chocolate</a></li>
                      <li><a href=#>Kosher Chocolate</a></li>
                      <li><a href=#>Associated Chocolate</a></li>
                    </ul>
                  </li>

                  <li><a href="shop.php">Sprinkles</a>
                    <ul>
                      <li><a href=#>Mixes</a></li>
                      <li><a href=#>Candy</a></li>
                      <li><a href=#>Kits</a></li>
                      <li><a href=#>Quins</a></li>
                      <li><a href=#>Vegan</a></li>
                    </ul>
                  </li>
                 
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- mainmenu-area-end -->

		<!-- slider-area-start -->  <!-- slider-area-end -->
        
        

		<!-- service-area-start -->   <!-- service-area-end -->
        
 
<!--products-->
	<div class="products">
        
	<?php
	include 'connection.php';
	if (isset($_POST['user_name']) && isset($_POST['user_password']))
	{
		$username = $_POST['user_name'];
		$email = $_POST['user_email'];
		$password = $_POST['user_password'];
		$mobile = $_POST['user_mobile'];
		$result = mysqli_query($conn,"SELECT username,mobile,email FROM users WHERE (username='$username' OR mobile='$mobile' OR email='$email')");
		if ($result && mysqli_num_rows($result) > 0)
		{
            echo '<a>
		  <img src= "img/error/2.png" alt= "" class="sad">
		</a>';
				
				echo '<center><h3> Sorry!!!! Username OR Email OR Mobile Number already present.</h3></center><br><br><br>'; 
				echo '<center><h1><a href="sign-up.php">Click here to Register again</a></h1></center>'; 
				?>
				<script type="text/javascript">
					alert("Login is compulsary. If NEW user REGISTER first. If EXISTING user LOGIN first. Unautorised user will not be able to Shop.");
				</script>
				<?php
				}
				else
				{
						$sql = "Insert into users (username,password,mobile,email) values  ('$username','$password','$mobile','$email')";
						$result = mysqli_query($conn,$sql) or mysqli_error($conn);
                   echo '<a><center>
		  <img src= "img/logo/jump.png" alt= "" class="happy"></center>
		</a><br>';
						echo '<center><h4>Welcome to the candy parade! </h4></center><br><br>'; 
                        echo '<center><h4>User successfully created.</h4></center><br><br><br>';
						echo '<center><h2><a href="sign-in.php" style="text-decoration:underline">Click here to Sign In</a></h2></center>';
				}					
				}
				?>	
	</div>
	 
<!-- //products -->

<br><br><br><br><br>
       
    <!-- contact-area-start -->
		<div class="contact-area ptb-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar_b-30">
						<div class="contuct-info text-center">
							<h4>Sign up for news & offers!</h4>
							<p>You may safely unsubscribe at any time</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-1 col-xs-12">
						<div class="search-box">
							<form action="#">
								<input type="email" placeholder="Enter your email address"/>
								<button><span class="lnr lnr-envelope"></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact-area-end -->

        
        <!-- sign-in-area-start -->

   
        
   <!-- footer-area-start -->
		<center><div class="footer-area footer-area-4 ptb-80" style="background-color:rgb(110,65,30); width:100%; height:40%; margin-top:1%;padding:0.1%"  >
			<div class="container" >
				<div class="row" >
					

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

					<div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30" style="margin-top:1%; padding:2%">
						<div class="footer-wrapper">
							<div class="footer-title">
								<a href="#"><h3 	style="color:rgba(240,128,128,0.99); font-size:180%">useful links</h3></a>
							</div>
							<div class="footer-wrapper">
								<ul class="usefull-link" >
									<li ><a href="#" style="color:#ffffff; font-size:130%;line-height:160%">Contact us</a></li>
									<li><a href="#" style="color:#ffffff; font-size:130%;line-height:160%">Site map</a></li>
									<li><a href="#" style="color:#ffffff; font-size:130%;line-height:160%">About us</a></li>
									<li><a href="#" style="color:#ffffff; font-size:130%;line-height:160%">Specials</a></li>
									<li><a href="#" style="color:#ffffff; font-size:130%;line-height:160%">Customer service</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div></center>
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- scrolly js -->
        <script src="js/jquery.scrolly.js"></script>
		<!-- magnific-popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
		<!--  countdown js -->
        <script src="js/jquery.countdown.min.js"></script>
		<!-- nivo.slider js -->
        <script src="js/jquery.nivo.slider.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
        
       <script type="text/javascript">

if (screen.width > 699) {
location.replace("acct_created.php")
}
   
</script>  
        
       
 
      
        
    </body>
</html>
