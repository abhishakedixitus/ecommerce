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
<!--start-header-menu-->
		
	</div>
</div>
</div><br><br>
 <!--start-content-->
								<?php 
								include 'connection.php';								
								if(isset($_GET['remove']))
								{	/*Delete on item from cart*/
									$r_id = $_GET['remove'];
									$sql = "Delete from cart where c_id = $r_id";
									$result = mysqli_query($conn, $sql);									
								}								
								if(isset($_GET['empty']))
								{	/*Empty Cart - All items*/
									$sql = "Truncate cart";
									$result = mysqli_query($conn, $sql);									
								} 
								?>
 
<center>
<div id="shopping-cart" >
<div style="color:white; background-color:rgb(110,65,30); width:85%; font-size:30px;">Shopping Cart
<table style="text-align:center; border-right: 5px solid " border="1">
<tbody style="color:rgb(110,65,30); background-color:white; font-size:20px; border: 3px solid rgb(110,65,30); ">
				<tr style="color:rgb(110,65,30); background-color:white;border: 3px solid rgb(110,65,30);">
				<th style="padding: 2%;"><center><strong>Name</strong></center></th>
				<th style="padding: 2%;"><center><strong>Image</strong></center></th>
				<th style="padding: 2%;"><center><strong>Price</strong></center></th>
				<th style="padding: 2%;"><center><strong>Action</strong></center></th>
				</tr>	
								<?php 
								include 'connection.php';
								$sql = " SELECT * FROM cart";
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) 
								{
								while($row = mysqli_fetch_assoc($result)) 
								{
								echo '
								<tr>
								<td width=35% style="padding: 4%;"><strong>'.$row["c_name"].'</strong></td>
								<td style= "background-color:#f7f7f7; padding:1%" data-thumb="'.$row['c_image'].'">
									 <div class="thumb-image"> <img src="'.$row['c_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</td>
								<td width=10%><strong>$ '.$row["c_price"].'</strong></td>
								<td width=25%><a href="cart.php?remove='.$row["c_id"].'" class="btnRemoveAction"><img src="img/cart/cartrmv.png" width="100" height="40"></img></a>
									
								</td>
								</tr>';
								}
								}
								else
								{
									echo "<tr><td colspan=4><center><a href='#'></a></center></td></tr>";
								}								
								?>	
					<tr>
					<?php $sql = " SELECT sum(c_price) total FROM cart where c_u_id= $id";
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
								$cart_total = $row['total'];
								}
							} ?>
                        
                        <td  align="left"> <a id="btnEmpty" href="cart.php?empty=1"><img src="img/cart/cartempty.png"></img></a></td>
				<td class="txt-heading" colspan="5" align="right"><strong>Total = </strong>$ <?php if($cart_total==0) echo '0'; else echo $cart_total; ?></td>
			</tr>
</tbody>
</table></div>
<br> <br>
        <center><button style='color:white;background-color:rgb(110,65,30); text-align:center' onClick='window.location.href="payment.php?p=<?php echo $id; ?>&t=<?php echo $cart_total; ?>"'>Proceed to checkout</button> </center>  

</div>
</div>
</center>		 
		  <br><br>
 <!--//end-bottom-->


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
location.assign("m_cart.php")
}

    </script>  
      
        
    </body>
</html>