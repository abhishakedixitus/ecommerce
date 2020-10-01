<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home </title>
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
		    <link rel="stylesheet" href="style.css">
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
								<p>WELCOME TO THE CANDY LAND!</p>
							</div>
						</div>

						<div class="col-lg-9 col-md-8 col-sm-7 header-top-right-4">
							<div class="header-top-left">
								<ul>
                                 
                 
                                   
								<li class="click_menu"><a href="#">
						<?php 
						error_reporting(0); 
						session_start();
						$username = $_SESSION['username'];
						$id = $_SESSION['id'];
						$_SESSION['id'] = $id;
						if(isset($_SESSION['username']))
							echo '<span>'.$username.' </span>';					
                    
						?><i class="fa fa-angle-down"></i></a>
                                    <ul class="click_menu_show">
											  <li><a href="account.php">My Account</a></li>
											 <li><a href="cart.php">My Cart</a></li>
											  
                                              <li><a href="logout.php">Log Out</a></li>
										  </ul>
					</li>	
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

				<div class="header-bottom-area home-page-2 ptb-10 " style="background-color:rgb(110,65,10)">
				<div class="container">
					<div class="row">
 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="menu scnd-fix">
								
									
								
								
							</div>
						</div>
					

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="logo logo2">
								<a href="index.php"><img src="img/logo/logo2.png" width="300px" height="100px" alt="" /></a>
							</div>
						</div>

						
							
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header-end -->

	<!-- mainmenu-area-start -->
		<div class="mainmenu-area home-page-2 mainmenu-area-4" id="main_h" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="mainmenu hidden-xs" style="color:rgb(110,65,30)">
							<nav>
								<ul style="color:rgb(110,65,30)">
                                     <li><a href="index.php" >Home</a></li>
                                    
                 

                  <li><a href="#">Category</a>
                    <ul>
                      <li><a href="u_chocolate.php">Chocolate</a></li>
                      <li><a href="u_lollipop.php">Lollipop</a></li>
                      <li><a href="u_cake.php">Cake</a></li>
                     
                   </ul>

               
                  <li><a href="about.php" >About Us</a></li>

									<li><a href="contact.php">Contact Us</a></li>

								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- mainmenu-area-end -->
<br>
		<!-- mainmenu-area-end -->
 <!--start-content-->
<!-- products -->
	<div class="products">
		<div class="container">
			<div class="products-grids">
				<div class="col-md-8 products-single">
				<div class="col-md-5 grid-single" style="width:300px; margin-top:0.000001px; padding:0.00001px">		
						
                                  <div class="col-md-4 products-grid-right">
					<div class="w_sidebar" style="width:200px;">
						<div class="w_nav1">
							
							<ul>
								<li>
								<?php 
								include 'connection.php';
								$user_id = $_GET['p'];
                                     $order_total = $_GET['t']; 
                                  
                                  
                                   echo '<h3>Order Total: $ '.$order_total.' </h3><br><br>';
								
								
								$sql = " SELECT p.p_name,p.p_image,p.p_price FROM products p join cart c on c.c_p_id=p.p_id WHERE c_u_id = $user_id";
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
								echo '	
                                <li data-thumb="'.$row['p_image'].'">
										<div class="thumb-image"> <img src="'.$row['p_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
									</li>
								<h4>'.$row['p_name']. '<span>   $'.$row['p_price'].'<span></h4><br><br>';
								}
								}
								?></li>
								<li></li>
								<li></li>
							</ul>	
						</div>
						<section  class="sky-form">
							<h4></h4>
							<div class="row1 scroll-pane">
								<div class="col col-4">
								</div>
							</div>
						</section>
					</div>
				</div>
				<div class="clearfix"></div>
									
								<?php 
								echo '
									</div>
								<div class="col-md-7 single-text" >
									<div class="details-left-info simpleCart_shelfItem" >
									<form action="order_confirm.php" method="post">
									<fieldset>
									<br><center><h3 style="margin-left:100px;color:rgb(110,65,30);">Enter your details:</h3></center>
									
									<br><br><h4 style="margin-left:100px;color:rgb(110,65,30)">Full Name:</h4> <input  type="text" style="border-color:rgb(110,65,30);border-width:thin;margin-left:100px" size="30" name="fullname" pattern="[a-zA-Z]+" title="Only alphabets allowed" required>
									<br><br><h4 style="margin-left:100px;color:rgb(110,65,30)">Shipping Address:</h4> <textarea rows="3" style="border-color:rgb(110,65,30);border-width:thin;margin-left:100px" cols="30" name="address" required></textarea>
									<br><br><h4 style="margin-left:100px;color:rgb(110,65,30)">Pin Code:</h4> <input  type="text" style="border-color:rgb(110,65,30);border-width:thin;margin-left:100px" size="9" name="pincode" pattern="\d{5-9}" title="Postal code" required>
									<br><br><h4 style="margin-left:100px;color:rgb(110,65,30)">City:</h4> <input  type="text" style="border-color:rgb(110,65,30);border-width:thin;margin-left:100px"  size="15" name="city" pattern="[a-zA-Z]+" title="Only alphabets allowed" required>
									<br><br><h4 style="margin-left:100px;color:rgb(110,65,30)">State:</h4> <select name="state" style="border-color:rgb(110,65,30);border-width:thin;margin-left:100px">
	<option value="S">Select</option>
    <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>			
	<br><br>
									<h4 style="margin-left:100px;color:rgb(110,65,30);">Mobile No:</h4> <input type="tel" pattern="\d{3}\d{3}\d{4}" id="mobile" name="mobile" style="border-color:rgb(110,65,30);border-width:thin;margin-left:100px" size="25" required title="Format: XXXXXXXXXX">
									<br><br><br>
									<h2 style="margin-left:100px;color:rgb(110,65,30)">Payment Method:</h2> <br>
									<input style="margin-left:100px;" type="radio" style="border-color:rgb(110,65,30);border-width:thin;margin-left:100px" checked> Cash on Delivery (COD)<br>
									
									<br><br>';
									echo "<input type='text' name='userid' value='$user_id' hidden>";
									echo '
									<button style="margin-left:200px;color:white;background-color:rgb(110,65,30);padding:10px" type="submit">Place order</button>
									</form>	
									<div class="clearfix"> </div>
									<div class="single-but item_add">
									<a href="#"></a>				
									</div>
									</div>
								</div>';
								
								
								 
								?>	
								<div class="clearfix"></div>
	</div><br><br><br><br><br>
	
 </div></div>
                </div><br><br><br><br></div>
<!-- //products -->
	
		<!-- contact-area-start -->
		<div class="contact-area ">
			
				
					 <img src="img/banner/2.png" style="width:100%; height:150px;" alt="hello">
					
    </div>
		<!-- contact-area-end -->

		<!-- footer-area-start -->
		<div class="footer-area footer-area-4 ptb-80" style="background-color:rgb(110,65,30); width:100%; height:50%"  >
			<div class="container" >
				<div class="row" >
					<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 mar_b-30">
						<div class="footer-wrapper">
							<div class="footer-logo">
								<a href="#"><img src="img/logo/logo2.png" width="200px" height="50px" alt="" /></a>
							</div>
							<p style="color:#ffffff">We devote to provide you the best shopping experience with sweets and treats.</p><br>
				

						</div>	
					</div>

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

					<div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
						<div class="footer-wrapper">
							<div class="footer-title">
								<a href="#"><h3 	style="color:rgba(240,128,128,0.99)">useful links</h3></a>
							</div>
							<div class="footer-wrapper">
								<ul class="usefull-link" >
									<li ><a href="contact.php" style="color:#ffffff">Contact us</a></li>
									
									<li><a href="about.php" style="color:#ffffff">About us</a></li>
									
									<li><a href="service.php" style="color:#ffffff">Customer service</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
    
    <div><center>		<p style="color:#ffffff;background-color:rgba(240,128,128,0.99)">DEVELOPED BY TEAM 16</p></center></div>



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

if (screen.width <= 699) {
location.assign("m_payment.php")
}

    </script>  
      
        
    </body>
</html>