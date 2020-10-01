
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Product Details</title>
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
        <script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- start menu -->
        <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/megamenu.js"></script>
        <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
        <script src="js/menu_jquery.js"></script>
        <script src="js/simpleCart.min.js"> </script>
        <script src="js/bootstrap.js"> </script>
        <!--web-fonts-->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <!--//web-fonts-->
        <script src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <!--/script-->
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                });
            });
        </script>
        <script id="jsbin-javascript">
            (function (global) {
                if(typeof (global) === "undefined")
                {
                    throw new Error("window is undefined");
                }
                var _hash = "!";
                var noBackPlease = function () {
                    global.location.href += "#";
                    // making sure we have the fruit available for juice....
                    // 50 milliseconds for just once do not cost much (^__^)
                    global.setTimeout(function () {
                        global.location.href += "!";
                    }, 50);
                };
                // Earlier we had setInerval here....
                global.onhashchange = function () {
                    if (global.location.hash !== _hash) {
                        global.location.hash = _hash;
                    }
                };
                global.onload = function () {
                    noBackPlease();
                    // disables backspace on page except on input fields and textarea..
                    document.body.onkeydown = function (e) {
                        var elm = e.target.nodeName.toLowerCase();
                        if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                            e.preventDefault();
                        }
                        // stopping event bubbling up the DOM tree..
                        e.stopPropagation();
                    };
                };
            })(window);
        </script>
        <!-- the jScrollPane script -->
        <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" id="sourcecode">
            $(function()
            {
                $('.scroll-pane').jScrollPane();
            });
        </script>
        <!-- //the jScrollPane script -->
    </head>

    <body>

    <div class="top_bg" id="home">
        <div class="container">
            <div class="header_top">
                <div class="top_right">
                    <ul>
                        <li><a href="#">
                                <?php
                                error_reporting(0);
                                session_start();
                                $username = $_SESSION['username'];
                                $id = $_SESSION['id'];
                                $_SESSION['id'] = $id;
                                if(isset($_SESSION['username']))
                                    echo '<span>Welcome -- '.$username.' </span>';
                                ?></a>
                        </li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
		<!-- header-start -->
		<header>
			<div class="header-top-area ptb-10 hidden-xs header-top-area-4">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-5">

						</div>
						<div class="col-lg-9 col-md-8 col-sm-7 header-top-right-4">
							<div class="header-top-left">
								<ul>
                  <li class="click_menu"><a href="#">My Account <i class="fa fa-angle-down"></i></a>
										<ul class="click_menu_show">
											<li><a href="sign-in.php">My Account</a></li>
                                          <li><a href="#">
                                                <?php
                                                error_reporting(0);
                                                session_start();
                                                $username = $_SESSION['username'];
                                                $id = $_SESSION['id'];
                                                $_SESSION['id'] = $id;
                                                if(isset($_SESSION['username']))
                                                    echo '<span>'.$username.' </span>';
                                                ?></a>
                                          </li>
											<li><a href="sign-in.php">Sign In</a></li>
										</ul>
									</li>
									<li><a href="sign-up.php">Create an Account</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="header-bottom-area home-page-2 ptb-10" style="background-color:rgb(110,65,10)">
				<div class="container">
					<div class="row">


						<div class="col-lg-11 col-md-1 col-sm-3 col-xs-11">
							<div class="logo logo2">
								<a href="index.php"><img src="img/logo/logo2.png" width="300px" height="100px" alt="" /></a>
							</div>
						</div>
							
							<div class="header-bottom-right header-bottom-right-4">
								<div class="shop-cart shop-cart-empty">
									<a href="cart.php" style="color:#ffffff"><span class="lnr lnr-cart"></span></a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header-end -->

    <!-- mainmenu-area-start -->
		<div class="mainmenu-area home-page-2 mainmenu-area-3" id="main_h">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="mainmenu hidden-xs">
							<nav>
								<ul>
                                    <li><a href="index.php">Home</a></li>

                  <li><a href="#">Category</a>
                    <ul>
                      <li><a href=#>New Arrivals</a></li>
                      <li><a href=#>Famous Brands</a></li>
                      <li><a href=#>Local Popular</a></li>
                      <li><a href=#>Snickers</a></li>
                      <li><a href=#>Creations</a></li>
                    </ul>
                  </li>


                  <li><a href="aboutus.php">About Us</a>
                  </li>

									<li><a href="contact.php">contact</a></li>

								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mobile-menu">
							<nav id="mobile-menu">
								<ul>
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

                  <li><a href="shop.php">Shop</a></li>
									<li><a href="contact.php">contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- mainmenu-area-end -->
        <!-- products -->
        <div class="products">
            <div class="container">
                <div class="products-grids">
                    <div class="col-md-8 products-single">
                        <div class="col-md-5 grid-single">
                            <div class="flexslider">
                                <ul class="slides">
                                    <?php
                                    include 'connection.php';
                                    //$product_id = $_GET['p'];
                                    $product_id = 1;
                                    $sql = " SELECT * FROM products ";
                                    $sql = " SELECT * FROM products WHERE p_id = $product_id";
                                    if (!$conn) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0)
                                    {
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo '
									<li data-thumb="'.$row['p_image'].'">
										<div class="thumb-image"> <img src="'.$row['p_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
									</li>
									</ul>
									</div>
									';
                                            ?>
                                            <!-- FlexSlider -->
                                            <script src="js/imagezoom.js"></script>
                                            <script defer src="js/jquery.flexslider.js"></script>
                                            <script>
                                                // Can also be used with $(document).ready()
                                                $(window).load(function() {
                                                    $('.flexslider').flexslider({
                                                        animation: "slide",
                                                        controlNav: "thumbnails"
                                                    });
                                                });
                                            </script>
                                            <?php
                                            echo '
									</div>	
									<div class="col-md-7 single-text">
									<div class="details-left-info simpleCart_shelfItem">
										<h3>'.$row['p_name'].'</h3>
										
										<div class="checkbox">
											<span><i class="fa fa-check-square" aria-hidden="true"></i>In stock</span>
										</div>
										<div class="price_single">
										<span class="actual item_price"><h2>$ '.$row['p_price'].'</h2></span>	
										</div>
										<h2 class="quick">Description</h2>
										<p class="quick_desc">'.$row['p_description'].'</p>
											<div class="quantity_box">
												<span>Quantity:</span>
												<div class="product-qty">
													<select disabled>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													</select>
												</div>
											</div>
											<div class="clearfix"> </div>
											<div class="single-but item_add">
											<div class="quick-add-to-cart">
										
	
										</div>
												<a class="item_add" href="addcart.php?mycart='.$row['p_id'].'&userid='.$id.'"><img height="42" width="100" src="images/cartaddbutn.png"></img> </a>	
												<a href="order.php?p='.$row['p_id'].'"><img height="46" width="100" src="images/cbuynw.png"></img></a>				
											</div>
										</div>
									</div>
									';
                                            $_SESSION['p_id'] = $row['p_id'];
                                        }
                                    }
                                    ?>
                                    <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

     <!-- footer-area-start -->
		<div class="footer-area footer-area-4 ptb-80" style="background-color:rgb(110,65,30); width:100%; height:47%"  >
			<div class="container" >
				<div class="row" >
					<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 mar_b-30">
						<div class="footer-wrapper">
							<div class="footer-logo">
								<a href="#"><img src="img/logo/logo2.png" width="200px" height="50px" alt="" /></a>
							</div>
							<p style="color:#ffffff">We devote to provide you the best shopping experience with sweets and treats.</p>
							

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
								<ul class="usefull-link">
									<li ><a href="#" style="color:#ffffff">Contact us</a></li>
									<li><a href="#" style="color:#ffffff">Site map</a></li>
									<li><a href="#" style="color:#ffffff">About us</a></li>
									<li><a href="#" style="color:#ffffff">Specials</a></li>
									<li><a href="#" style="color:#ffffff">Customer service</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- footer-area-end -->

		<!-- .copyright-area-start -->
		<div class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
						<div class="copyright text-left">
							<p>Team 16<a href="#"></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- .copyright-area-end -->

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
		<!-- nivo.slider js -->
        <script src="js/jquery.nivo.slider.js"></script>
		<!-- magnific-popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
		<!-- scrolly js -->
        <script src="js/jquery.scrolly.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
        <script type="text/javascript">
if (screen.width <= 699) {
location.replace("mobile-product-details.php")
}
</script>
    </body>
</html>
