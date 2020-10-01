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
 <!--start-content-->

    <!-- sign-in-area-start -->
<br>
    <div class="x0" style="width:1300px">
      <div  style="width:650px; height:650px; margin-left:120px;margin-right:100px">
          
        <h1 style="font-size: 50%vw; text-align:center">Edit Account Information</h1><br>
       <?php

include 'connection.php';
$editid = $_GET['editid'];
//in case the edit file is run alone

if(!isset($editid)||empty($editid)){
    header("location:account.php");
}

$sql = "SELECT * FROM users WHERE ID = '{$editid}'";
$result = $conn->query($sql) or die(mysqli_error());
$row = $result->fetch_assoc();
//when page post method apply
if($_POST){

    $id = $_POST['id'];
    $username = $_POST['txt1'];
    $password = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    $email = $_POST['txt4'];

    $sql2 = "UPDATE users SET  username = '{$username}', password='{$password}', u_mobile='{$mobile}', u_email='{$email}' where id = '{$id}'";
    $result2 = $conn->query($sql2) or die(mysqli_error());

    if($result2){
        echo "<script> alert('Record Updated');window.location='account.php' ;</script>";
    }
}
?>
          
          <form method="post">
<table border=5px solid; bgcolor='white' width=90%; height=50%; text-align=center>
    <input type="hidden" name="id" value="<?php echo $row["id"];?>">
    <tr><th style='color:white;background-color:rgb(110,65,30); text-align:center'>USERNAME</th> <td align=center> <input disabled="disabled" type="text" value="<?php echo $row["username"]; ?>" name="txt1"></td></tr>
 	<tr><th style='color:white;background-color:rgb(110,65,30); text-align:center'>PASSWORD</th> <td align=center><input type="text" value="<?php echo $row["password"]; ?>" name="txt2"></td></tr>
 	<tr><th style='color:white;background-color:rgb(110,65,30); text-align:center'>MOBILE</th> <td align=center><input type="text" value="<?php echo $row["mobile"]; ?>" name="txt3"></td></tr>
 	<tr><th style='color:white;background-color:rgb(110,65,30); text-align:center'>EMAIL</th> <td align=center><input type="text" value="<?php echo $row["email"]; ?>" name="txt4"></td></tr>

  </table><br><br>
        
    <center><input type="submit" value="Update Record" style='color:white;background-color:rgb(110,65,30); text-align:center'></center>
</form>
          
        </div>
      <div class="x1">
        <figure>
          <img src="img/logo/mumu.png" style="width:300%; height:1000%;" alt="hello">
        </figure>
      </div>
    </div>
    <!-- sign-in-area-end -->

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
location.assign("m_edituser.php")
}

    </script>  
      
        
    </body>
</html>