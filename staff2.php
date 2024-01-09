<?php
	//for build Connection php file with database
	$con=mysqli_connect('localhost','root','mysql','davacade_dav');
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finbiz Contact Us (Business Consultant)</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-5.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- start header area -->
    <!-- start header area -->
    <header class="header--sticky header-one">
        <div class="header-top header-top-one bg-1">
            <div class="container">
                <div class="row bg-dark">
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="left">
                            <div class="mail">
                                <a href="mailto:webmaster@example.com"><i class="fal fa-envelope"></i> davacademy.omtd@gmail.com</a>
                            </div>
                            <div class="working-time">
                                <p><i class="fal fa-clock"></i> School: 8.00am - 2.00pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="right">
                            <ul class="top-nav">
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="blog-list.html">News</a></li>
                                <li><a href="contactus.html">Contact</a></li>
                            </ul>
                            <ul class="social-wrapper-one">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="mr--0" href="#"><i class="pe-2 fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-one" style="background:#FEFAE0; height:100px;"   >
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="thumbnail">
                            <a href="index.html" class="d-flex">
                                <img src="assets/images/logo.jpeg" alt="finbiz-logo" class="pb-4"style="object-fit:cover;height:60px;"><div  class=" pt-1 ps-3" style="font-size:2.6rem;font-family: 'Britney', cursive;font-weight:bold;text-shadow:2px 2px 4px white;">DAV Aacademy</div>
                            </a>
                        </div>
                    </div>
                    <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="main-header">
                            <nav style="position:relative; left:100px;"class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="index.html">Home</a>
                                       <!-- <ul class="submenu menu-link1">
                                            <li class="menu-item">
                                                <a class="tag" href="#">Multipages</a>
                                                <ul>
                                                    <li><a href="index.html">Main Home</a></li>
                                                    <li><a href="index-two.html">Consulting Home</a></li>
                                                    <li><a href="index-three.html">Corporate Home</a></li>
                                                    <li><a href="index-four.html">Insurance Home</a></li>
                                                    <li><a href="index-five.html">Marketing Home</a></li>
                                                    <li><a href="index-six.html">Home finance</a></li>
                                                    <li><a href="index-seven.html">Human Resources</a></li>
                                                    <li><a href="index-eight.html">IT Solutions</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="tag" href="#">Onepages</a>
                                                <ul>
                                                    <li><a href="onepage-one.html">Main Home Onepage</a></li>
                                                    <li><a href="onepage-two.html">Consulting Home Onepage</a></li>
                                                    <li><a href="onepage-three.html">Corporate Home Onepage</a></li>
                                                    <li><a href="onepage-four.html">Insurance Home Onepage</a></li>
                                                    <li><a href="onepage-five.html">Marketing Home Onepage</a></li>
                                                    <li><a href="onepage-six.html">Finance Home Onepage</a></li>
                                                    <li><a href="onepage-seven.html">Human resource Onepage</a></li>
                                                    <li><a href="onepage-eight.html">IT Solutions Onepage</a></li>
                                                </ul>
                                            </li>
                                        </ul>-->
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">About Us</a>
                                       <!-- <ul class="submenu menu-link3">
                                            <li class="sub-droupdown">
                                                <a class="sub-menu-link" href="#">Our Service</a>
                                                <ul class="submenu third-lvl">
                                                    <li><a href="our-service.html">Service 1</a></li>
                                                    <li><a href="service-2.html">Service 2</a></li>
                                                    <li><a href="service-3.html">Service 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>-->
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="infrastructure.html">Infrastructure</a>
                                       <!-- <ul class="submenu menu-link">
                                            <li class="menu-item">
                                                <a class="tag" href="#">Pages</a>
                                                <ul>
                                                    <li><a href="appoinment.html">Appoinment</a></li>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="price-plan.html">Price Plans</a></li>
                                                    <li><a href="our-service.html">Our Services</a></li>
                                                    <li><a href="testimonial-style-1.html">Testimonial</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="tag" href="#">Portfolio</a>
                                                <ul>
                                                    <li><a href="project.html">Portfolio Style 1</a></li>
                                                    <li><a href="portfolio-style-2.html">Portfolio Style 2</a></li>
                                                    <li><a href="portfolio-style-3.html">Portfolio Style 3</a></li>
                                                    <li><a href="portfolio-style-4.html">Portfolio Style 4</a></li>
                                                    <li><a href="portfolio-style-5.html">Portfolio Style 5</a></li>
                                                    <li><a href="project-details.html">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="tag" href="#">Our Teams</a>
                                                <ul>
                                                    <li><a href="team.html">Team Style 1</a></li>
                                                    <li><a href="team-style-2.html">Team Style 2</a></li>
                                                    <li><a href="team-style-3.html">Team Style 3</a></li>
                                                    <li><a href="team-style-4.html">Team Style 4</a></li>
                                                    <li><a href="team-style-5.html">Team Style 5</a></li>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>-->
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Syllabus</a>
                                       <!-- <ul class="submenu">
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>-->
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="gallery.html">Gallery</a>
                                        <!--<ul class="submenu menu-link2">
                                            <li class="menu-item">
                                                <ul>
                                                    <li><a href="accordion.html">Accordion</a></li>
                                                    <li><a href="address-box.html">Address Box</a></li>
                                                    <li><a href="button.html">Button</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog-slider.html">Blog Slider</a></li>
                                                    <li><a href="blog-quote.html">Blog Quote</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <ul>
                                                    <li><a href="heading.html">Heading</a></li>
                                                    <li><a href="cta.html">Call To Action</a></li>
                                                    <li><a href="contact-form.html">Contact Form</a></li>
                                                    <li><a href="counter.html">Counter Up</a></li>
                                                    <li><a href="brand.html">Brand Logo</a></li>
                                                    <li><a href="video.html">Video Addon</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <ul>
                                                    <li><a href="pricing.html">Pricing Table</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="tab-addon.html">Tab Addon</a></li>
                                                    <li><a href="progress-bar.html">Progress Bar</a></li>
                                                    <li><a href="testimonial.html">Testimonial</a></li>
                                                    <li><a href="working-process.html">Working Process</a></li>
                                                </ul>
                                            </li>
                                        </ul>-->
                                    </li>
                                    <li><a class="nav-item" href="#">Notices</a></li>
									<li><a class="nav-item" href="#">Activity</a></li>
									<li><a class="nav-item" href="#">Home Work</a></li>
									<li><a class="nav-item" href="contactus.html">contacts</a></li>
                                </ul>
                            </nav>
                            <div class="button-area">
                                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                    <img class="menu-dark" src="assets/images/icon/menu.png" alt="Menu-icon">
									<img class="menu-light" src="assets/images/icon/menu-light.png" alt="Menu-icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header area -->

    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="index.html"><img class="logo" src="assets/images/logo/logo-1.svg" alt="finbiz_logo"></a>
            <a class="logo-2" href="index.html"><img class="logo" src="assets/images/logo/logo-4.svg" alt="finbiz_logo"></a>
            <a class="logo-3" href="index.html"><img class="logo" src="assets/images/logo/logo-3.svg" alt="finbiz_logo"></a>
            <a class="logo-4" href="index.html"><img class="logo" src="assets/images/logo/logo-5.svg" alt="finbiz_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">+8801234566789</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#">example@gmail.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="#">www.webexample.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">13/A, New Pro State, NYC</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">
                <nav class="nav-main mainmenu-nav">
                    <ul class="mainmenu">
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Home</a>
                            <ul class="submenu">
                                <li>
                                    <ul>
                                        <a href="#0" class="tag">Homepages</a>
                                        <li class="mobile-menu-link"><a href="index.html">Main Home</a></li>
                                        <li class="mobile-menu-link"><a href="index-two.html">Consulting Home</a></li>
                                        <li class="mobile-menu-link"><a href="index-three.html">Corporate Home</a></li>
                                        <li class="mobile-menu-link"><a href="index-four.html">Insurance Home</a></li>
                                        <li class="mobile-menu-link"><a href="index-five.html">Marketing Home</a></li>
                                        <li class="mobile-menu-link"><a href="index-six.html">Finance Home</a></li>
                                        <li class="mobile-menu-link"><a href="index-seven.html">Human Resources</a></li>
                                        <li class="mobile-menu-link"><a href="index-eight.html">IT Solutions</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <a href="#0" class="tag">Onepages</a>
                                        <li class="mobile-menu-link"><a href="onepage-one.html">Main Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="onepage-two.html">Consulting Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="onepage-three.html">Corporate Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="onepage-four.html">Insurance Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="onepage-five.html">Marketing Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="onepage-six.html">Finance Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="onepage-seven.html">Human Resources Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="onepage-eight.html">IT Solutions Onepage</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="about-us.html">About Us</a></li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Services</a>
                            <ul class="submenu">
                                <li class="has-droupdown sub-droupdown">
                                    <a href="#">Our Service</a>
                                    <ul class="submenu third-lvl mobile-menu">
                                        <li><a href="our-service.html">Service 1</a></li>
                                        <li><a href="service-2.html">Service 2</a></li>
                                        <li><a href="service-3.html">Service 3</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-link"><a href="service-details.html">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Pages</a>
                            <ul class="submenu">
                                <li class="mobile-menu-link"><a href="project.html">Project</a></li>
                                <li class="mobile-menu-link"><a href="project-details.html">Project Details</a></li>
                                <li class="mobile-menu-link"><a href="team.html">Team</a></li>
                                <li class="mobile-menu-link"><a href="team-details.html">Team Details</a></li>
                                <li class="mobile-menu-link"><a href="appoinment.html">appoinment</a></li>
                                <li class="mobile-menu-link"><a href="price-plan.html">Price Plan</a></li>
                                <li class="mobile-menu-link"><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Blog</a>
                            <ul class="submenu">
                                <li class="mobile-menu-link"><a href="blog-list.html">Blog List</a></li>
                                <li class="mobile-menu-link"><a href="blog-grid.html">Blog Grid</a></li>
                                <li class="mobile-menu-link"><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item"><a class="menu-link" href="contactus.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="social-wrapper-two menu mobile-menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
                <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a>
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>

    <div id="anywhere-home">
    </div>
    <!-- ENd Header Area -->

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area bg_image" style="background-image: url(assets/images/IMG_4537.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" style="text-shadow: 3px 2px black;">Contact Us</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.html">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


   
    <!-- Start of table -->
<table style="align:center; padding-left:30px;padding-top:30px;">
               <table class="table table-hover table-responsive table-bordered table-striped">
            <?php
				$i=1;
               $selectquery="SELECT * FROM `staff_details`  order by  `emp_type`";
                $query=mysqli_query($con,$selectquery);
                $num=mysqli_num_rows($query);
				$emp='';
                while($res=mysqli_fetch_array($query)){
				if($emp==''){
				$emp = $res['emp_type'];
			
					echo '<table class="table table-hover table-responsive table-bordered table-striped">
	
				   <th colspan="15" style="text-align:center; font-size:35px;color:black;border-style:none;padding:15px;">
Teaching Staff</th>
				   
					<tr style="text-align:center; font-size:20px;background-color:#d9534f;color:white">
					<th width="5%">S.No.</th>
					<th>Name</th>
					<th>Father Name</th>
					<th>Address</th>
					<th>Phone No</th>
					<th>Date Of Joining</th>
					<th>Designation</th>
					<th>D.O.B</th>
					<th>Qualification </th>
					<th>Trained</th>
					<th>Probation</th>

					
					
				</tr>';
				echo '<br>	';
					}

					if($emp!=$res['emp_type']){
						$i=1;
						echo '<br>	';
						$emp = $res['emp_type'];
							echo '<table class="table table-hover table-responsive table-bordered table-striped">
							<th colspan="15" <th colspan="15" style="text-align:center; font-size:30px;color:black;border-style:none;">'.$res['emp_type'].'</th>
		   
								<tr style="text-align:center; font-size:22px;background-color:#d9534f;color:white">
								<th>S.No.</th>
								<th>Name</th>
								<th>Father Name</th>
								<th>Address</th>
								<th>Phone No</th>
								<th>Date Of Joining</th>
								<th>Designation</th>
								<th>DOB</th>
								<th>Qualification </th>
								<th>Trained</th>
								<th>Probation</th>
							</tr>';
							}	
						?>
                    <tr>
                    <td><?php echo $i++;?></td>
					<td><?php echo $res['name'];?></td>
					<td><?php echo $res['fname'];?></td>
					<td><?php echo $res['address'];?></td>
				    <td><?php echo $res['phn_no'];?></td>
					<td><?php echo $res['date_join'];?></td>
					<td><?php echo $res['desination'];?></td>
					<td><?php echo $res['dob'];?></td>
					<td><?php echo $res['qulification'];?></td>
					<td><?php echo $res['trained'];?></td>
					<td><?php echo $res['provision'];?></td>
                </tr>
            
                <?php
                } 
                ?> 
            </table>
	
	
	
	
	
	<!-- Start of table -->



    <!-- start header area -->
    <!-- rts footer area start -->
    <div class="rts-footer-area footer-one rts-section-gapTop bg-footer-one">
        <div class="container bg-shape-f1">
            <!-- footer call to action area -->
            <div class="row">
                <div class="col-12">
                    <div class="rts-cta-wrapper">
                        <div class="background-cta">
                            <div class="row">
                                <!-- cta-left -->
                                <div class="col-lg-6">
                                    <div class="cta-left-wrapepr">
                                        <p class="cta-disc">
                                            Latest Business Ideas
                                        </p>
                                        <h3 class="title">Sign Up Newsletter</h3>
                                    </div>
                                </div>
                                <!-- cta left end -->
                                <div class="col-lg-6">
                                    <!-- cta right -->
                                    <form class="cta-input-arae">
                                        <input type="email" name="email" placeholder="Enter Email Address" required="">
                                        <button type="submit" class="rts-btn btn-primary">Subscribe Now</button>
                                    </form>
                                    <!-- cta right End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer call to action area End -->
            <!-- rts footer area -->
            <div class="row pt--120 pt_sm--80 pb--80 pb_sm--40">
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized">
                        <div class="wized-title">
                            <h5 class="title">Quick Links</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="quick-link-inner">
                            <ul class="links">
                                <li><a href="#"><i class="far fa-arrow-right"></i> Forum Support</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Help & FAQ</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Pricing & Plans</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Cookie Policy</a></li>
                            </ul>
                            <ul class="links margin-left-70">
                                <li><a href="#"><i class="far fa-arrow-right"></i> About Us</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> My Account</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i>Our Company</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i>Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer mid area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized mid-bg">
                        <div class="wized-title">
                            <h5 class="title">Opening Hours</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="opening-time-inner">
                            <div class="single-opening">
                                <p class="day">Week Days</p>
                                <p class="time">09.00 - 24:00</p>
                            </div>
                            <div class="single-opening">
                                <p class="day">Saturday</p>
                                <p class="time">08:00 - 03.00</p>
                            </div>
                            <div class="single-opening mb--30 mb_sm--10">
                                <p class="day">Sunday</p>
                                <p class="time">Day Off</p>
                            </div>
                            <a href="#" class="rts-btn btn-primary contact-us">Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- footer mid area end -->

                <!-- footer end area post -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized margin-left-65">
                        <div class="wized-title">
                            <h5 class="title">Popular Updates</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="post-wrapper">
                            <!-- single post -->
                            <div class="single-footer-post mb--30">
                                <div class="left-thumbnail">
                                    <img style="height:300px;width:60rem !important; object-fit:cover; border-radius:1px !important;"src="assets/images/all.jpeg" alt="finbiz_business-post">
                                </div>
                                <div class="post-right">
                                    <p> <i class="fal fa-clock"></i> 24 Dec 2023</p>
                                    <a href="#">
                                        <h6 class="title">Educational websites can include websites topic related resources that act as tools to enhance learning and supplement classroom teaching. These websites help make the process of learning entertaining and attractive to the student, especially in today's age.</h6>
                                    </a>
                                    <!-- <a class="red-more" href="blog-details.html">Read More<i class="far fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                            <!-- single post End -->
                            <!-- single post -->
                            <!-- <div class="single-footer-post"> -->
                                <!-- <div class="left-thumbnail"> -->
                                    <!-- <img src="assets/images/footer/post/02.png" alt="finbiz_business-post"> -->
                                <!-- </div> -->
                                <!-- <div class="post-right"> -->
                                    <!-- <p> <i class="fal fa-clock"></i> 15th April, 2022</p> -->
                                    <!-- <a href="blog-details.html"> -->
                                        <!-- <h6 class="title">Best Business Ideas For -->
                                            <!-- Getting Solution</h6> -->
                                    <!-- </a> -->
                                    <!-- <a class="red-more" href="blog-details.html">Read More<i class="far fa-arrow-right"></i></a> -->
                                <!-- </div> -->
                            <!-- </div> -->
                            <!-- single post End -->
                        </div>
                    </div>
                </div>
                <!-- footer end area post end-->
            </div>
            <!-- rts footer area End -->
        </div>
        <!-- copyright area start -->
        <div class="rts-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <p>© All Rights Reserved|♥2023 Design by Weknow Technologies pvt.Ltd DAV Tanda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>
	
	
	
    
    <!-- ENd Header Area -->

    <!-- start loader -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End loader -->

    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- progress Back to top End -->


    <!-- scripts start form hear -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/jqueryui.js"></script>
    <script src="assets/js/vendor/waypoint.js"></script>
    <script src="assets/js/plugins/swiper.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/plugins/sal.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/contact.form.js"></script>
    <!-- main Js -->
    <script src="assets/js/main.js"></script>
    <!-- scripts end form hear -->
</body>

</html>