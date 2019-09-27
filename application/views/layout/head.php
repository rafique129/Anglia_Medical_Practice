<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content=""/>
<meta name="author" content=""/>
<meta name="robots" content=""/>
<meta name="description" content=""/>
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/favicon.png"/>
<!-- Page Title Here -->
<title>Home | Anglia Medical Practice</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>assets/javascripts/vendor/html5shiv.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/javascripts/vendor/respond.min.js"></script>
	<![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/flaticon.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/rev.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/skin-1.css">
<!--<link class="skin" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/skin/skin-1.css">-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/templete.css">
<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/settings.css">
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/navigation.css">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900" rel="stylesheet"> 
</head>
<body id="bg">
    <!--<img src="<?php if(!empty($updatedata)){echo !empty($updatedata->image)?base_url().'/'.BANNER_IMAGE_PATH .'/400x225_'. $updatedata->image:'';}?>" height="50" width="50">-->

<div id="loading-area"></div><div class="page-wraper">
    <!-- header -->
    <header class="site-header header header-style-4 style-1">
        <div class="bg-white">
			<div class="container header-contant-block">
				<div class="row">
					<div class="col-md-3">
						<div class="logo-header "><a href="#"><img src="<?php echo base_url(); ?>assets/images/logo.png" width="193" height="89" alt=""></a></div>
					</div>
					<div class="col-md-9">
						<ul class="contact-info style-1 clearfix text-primary">
							<li>
								<h6 class="text-primary"><i class="fa fa-phone"></i> Call Us</h6>
								<span>+0 123-456-7890</span> 
							</li>
							<li>
								<h6 class="text-primary"><i class="fa fa-envelope-o"></i> Send us a Mail</h6>
								<span>info@angliamedicalpractice.co.uk</span> 
							</li>
							<li>
								<h6 class="text-primary"><i class="fa fa-clock-o"></i> Opening Time</h6>
								<span>Mon -Sat: 7:00 - 17:00</span> 
							</li>
<!--							<li>
								<h6 class="text-primary"><i class="fa fa-phone"></i>Call Toll Free</h6>
								<span>+0 123-456-7890</span> 
							</li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="navigation-bar bg-primary">
                    <div class="container clearfix">
                        <!-- website logo -->
                        <div class="logo-header mostion"><a href="#"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></a></div>
                        <!-- nav toggle button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <!-- extra nav -->
<!--                        <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="site-button white"><i class="fa fa-search"></i></button>
                            </div>
                        </div>-->
                        <!-- Quik search -->
<!--                        <div class="dez-quik-search bg-primary">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span id="quik-search-remove"><i class="fa fa-remove"></i></span>
                            </form>
                        </div>-->
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse">
                            <ul class=" nav navbar-nav">
                                <li class="active"> <a href="<?php echo base_url(); ?>">Home<i class="fa fa-chevron-down"></i></a>
                                 <!--   <ul class="sub-menu">
                                        <li><a href="#">1. Home Dentist Center</a> </li>
                                        <li><a href="#">2. Home ENT Hospital</a></li>
                                        <li><a href="#">3. Home Pregnancy Center</a></li>
                                        <li><a href="#">4. Home Cardiology Hospitals</a></li>
										<li><a href="index-5.html">5. Home Surgery Hospital</a></li>
                                    </ul>-->
                                </li>
                               <li> <a href="<?php echo base_url('about-us');?>">About<i class="fa fa-chevron-down"></i></a>
<!--                                    <ul class="sub-menu">
                                        <li> <a href="javascript:;">Header Style Light</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Header 1</a></li>
                                                <li><a href="#">Header 2</a></li>
                                                <li><a href="#">Header 3</a></li>
                                                <li><a href="#">Header 4</a></li>
                                                <li><a href="#">Header 5</a></li>
                                                <li><a href="#">Header 6</a></li>
                                            </ul> 
                                        </li>-->
                                         <li> <a href="<?php echo base_url('book-appointment');?>">Appointmemnt<i class="fa fa-chevron-down"></i></a>
                                              <li> <a href="<?php echo base_url('terms-condition');?>">Terms Condition<i class="fa fa-chevron-down"></i></a>
                              <?php
                                $sess_data=$this->session->userdata("user");
                              if(!empty($sess_data))
                              {
                                  ?>
                               
                                              <li> <a href="<?php echo base_url('user-profile');?>">User Profile<i class="fa fa-chevron-down"></i></a>
                              <?php } else{?>
                                                    <li> <a href="<?php echo base_url('login');?>">Login<i class="fa fa-chevron-down"></i></a>
                              <?php } ?>
                                                  <!-- <ul class="sub-menu">
                                        <li> <a href="javascript:;">Header Style Light</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Header 1</a></li>
                                                <li><a href="#">Header 2</a></li>
                                                <li><a href="#">Header 3</a></li>
                                                <li><a href="#">Header 4</a></li>
                                                <li><a href="#">Header 5</a></li>
                                                <li><a href="#">Header 6</a></li>
                                            </ul> -->
                                        </li>
                                     <!--    <li> <a href="javascript:;">Header Style Dark</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Header 1</a></li>
                                                <li><a href="#">Header 2</a></li>
                                                <li><a href="#">Header 3</a></li>
                                                <li><a href="#">Header 4</a></li>
                                                <li><a href="#">Header 5</a></li>
                                                <li><a href="#">Header 6</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Footer</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Footer 1 </a></li>
                                                <li><a href="#">Footer 2</a></li>
                                                <li><a href="#">Footer 3</a></li>
                                                <li><a href="#">Footer 4</a></li>
                                                <li><a href="#">Footer 5</a></li>
                                                <li><a href="#">Footer 6</a></li>
                                                <li><a href="#">Footer 7</a></li>
                                                <li><a href="#">Footer 8</a></li>
                                                <li><a href="#">Footer 9</a></li>
                                                <li><a href="#">Footer 10</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Pages<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li> <a href="javascript:;">About us</a>
                                            <ul class="sub-menu">
                                                <li><a href="about-1.html">About us 1</a></li>
                                                <li><a href="about-2.html">About us 2</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">FAQ</a>
                                            <ul class="sub-menu">
                                                <li><a href="faq-1.html">FAQ 1</a></li>
                                                <li><a href="faq-2.html">FAQ 2</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="services-1.html">Services 1</a></li>
                                                <li><a href="#">Services 2</a></li>
                                                <li><a href="services-3.html">Services 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="career.html">Career</a></li>
                                        <li><a href="who-we-are.html">Who we are</a></li>
                                        <li><a href="help.html">Help Desk</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="javascript:;">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-1.html">Portfolio 1</a></li>
                                                <li><a href="portfolio-2.html">Portfolio 2</a></li>
                                                <li><a href="portfolio-3.html">Portfolio 3</a></li>
                                                <li><a href="portfolio-details.html">portfolio-details</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Galley</a>
                                            <ul class="sub-menu">
                                                <li><a href="full-page-gallery-dark.html">Gallery Full Page Style 1</a></li>
                                                <li><a href="full-page-gallery-light.html">Gallery Full Page Style 2</a></li>
                                                <li><a href="gallery-grid-2.html">Galley Grid 2</a></li>
                                                <li><a href="gallery-grid-3.html">Galley Grid 3</a></li>
                                                <li><a href="gallery-grid-4.html">Galley Grid 4</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Error</a>
                                            <ul class="sub-menu">
                                                <li><a href="error-403.html">Error 403</a></li>
                                                <li><a href="error-404.html">Error 404</a></li>
                                                <li><a href="error-405.html">Error 405</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Coming Soon</a>
                                            <ul class="sub-menu">
                                                <li><a href="coming-soon-1.html">Coming Soon 1</a></li>
                                                <li><a href="coming-soon-2.html">Coming Soon 2</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Login Page</a>
                                            <ul class="sub-menu">
                                                <li><a href="login-1.html">Login 1</a></li>
                                                <li><a href="login-2.html">Login 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Shop<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="product.html">Product</a></li>
                                        <li><a href="product-details.html">Product details</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Blog<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li> <a href="javascript:;">Default</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-half-img.html">Half image</a></li>
                                                <li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li>
                                                <li><a href="blog-half-img-left-sidebar.html">Half image sidebar left</a></li>
                                                <li><a href="blog-large-img.html">Large image</a></li>
                                                <li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li>
                                                <li><a href="blog-large-img-left-sidebar.html">Large image sidebar left</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid-2.html">Grid 2</a></li>
                                                <li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li>
                                                <li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li>
                                                <li><a href="blog-grid-3.html">Grid 3</a></li>
                                                <li><a href="blog-grid-3-sidebar.html">Grid 3 sidebar</a></li>
                                                <li><a href="blog-grid-3-sidebar-left.html">Grid 3 sidebar left</a></li>
                                                <li><a href="blog-grid-4.html">Grid 4</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Single</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Single</a></li>
                                                <li><a href="blog-single-sidebar.html">Single sidebar</a></li>
                                                <li><a href="blog-single-left-sidebar.html">Single sidebar right</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Full Page Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-full-grid-dark-style-1.html">Dark Style 1</a></li>
                                                <li><a href="blog-full-grid-dark-style-2.html">Dark Style 2</a></li>
                                                <li><a href="blog-full-grid-dark-style-3.html">Dark Style 3</a></li>
                                                <li><a href="blog-full-grid-light-style-1.html">Light Style 1</a></li>
                                                <li><a href="blog-full-grid-light-style-2.html">Light Style 2</a></li>
                                                <li><a href="blog-full-grid-light-style-3.html">Light Style 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-mega-menu "> <a href="javascript:;">Shortcodes<i class="fa fa-chevron-down"></i></a>
                                    <ul class="mega-menu">
                                        <li> <a href="javascript:;">Shortcodes</a>
                                            <ul>
                                                <li><a href="shortcode-buttons.html">Buttons</a></li>
                                                <li><a href="shortcode-icon-box-styles.html">Icon box styles</a></li>
                                                <li><a href="shortcode-pricing-table.html">Pricing table</a></li>
                                                <li><a href="shortcode-toggles.html">Toggles</a></li>
                                                <li><a href="shortcode-team.html">Team</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Shortcodes</a>
                                            <ul>
                                                <li><a href="shortcode-carousel-sliders.html">Carousel sliders</a></li>
                                                <li><a href="shortcode-image-box-content.html">Image box content</a></li>
                                                <li><a href="shortcode-tabs.html">Tabs</a></li>
                                                <li><a href="shortcode-counters.html">Counters</a></li>
                                                <li><a href="shortcode-all-widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Shortcodes</a>
                                            <ul>
                                                <li><a href="shortcode-accordians.html">Accordians</a></li>
                                                <li><a href="shortcode-dividers.html">Dividers</a></li>
                                                <li><a href="shortcode-images-effects.html">Images effects</a></li>
                                                <li><a href="shortcode-testimonials.html">Testimonials</a></li>
                                                <li><a href="shortcode-all-widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Shortcodes</a>
                                            <ul>
                                                <li><a href="shortcode-alert-box.html">Alert box</a></li>
                                                <li><a href="shortcode-icon-box.html">Icon-box</a></li>
                                                <li><a href="shortcode-list-group.html">List group</a></li>
                                                <li><a href="shortcode-title-separators.html">title-separators</a></li>
                                                <li><a href="shortcode-all-widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Contact us <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="contact.html">Contact us 1</a></li>
                                        <li><a href="contact-2.html">Contact us 2</a></li>
                                        <li><a href="contact-3.html">Contact us 3</a></li>
                                        <li><a href="contact-4.html">Contact us 4</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>