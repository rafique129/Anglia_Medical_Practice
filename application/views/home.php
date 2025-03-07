<!DOCTYPE html>

<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
<?php //var_dump($updatedata->title); ?>
<html lang="en">
    <?php
    $this->load->view('layout/head');
?>

    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                        <div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                            <ul>
                                 <?php
                                        foreach ($getbanner as $getbannerobj) {
                                                                          ?>
                                            <li data-index="rs-100" data-transition="parallaxvertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slide1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="WELCOME To Anglia Medical Practice" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="">
                                                <!-- MAIN IMAGE -->
                                                <img src="<?php echo base_url() . BANNER_IMAGE_PATH . '/' . $getbannerobj->image; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                                <!-- LAYERS -->
                                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 2;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                                                <!-- LAYER NR. 2 -->
                                                <div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-100-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['220','220','220','100']" data-fontsize="['50','50','50','30']" data-lineheight="['85','85','55','35']" data-width="['1000','1000','1000','420']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: normal;text-transform:left; font-weight:bold; line-height:50px; font-family: 'Open Sans', sans-serif; color:#fff;"><span class="text-primary"><?php echo $getbannerobj->title; ?> </span>DOCTORS</div>
                                                <!-- LAYER NR. 3 -->
                                                <div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-100-layer-4" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['310','310','310','145']" data-fontsize="['16','15','14','13']" data-lineheight="['22','22','22','22']" data-width="['700','600','600','420']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: normal;text-transform:left; line-height:80px; color:#fff; font-family:'Open Sans', sans-serif"><?php echo $getbannerobj->description; ?></div>
                                                <!-- LAYER NR. 4 -->
                                                <div class="tp-caption" id="slide-100-layer-5" data-x="['left','left','left','left']" data-hoffset="['53','53','60','30']" data-y="['top','top','top','top']" data-voffset="['410','410','410','250']" data-width="none" data-height="none" data-whitespace="nowrap" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; background-color:rgba(0, 0, 0, 0) !important;"> <a href="#" class="site-button button-lg">Read More </a> </div>
                                                <div class="tp-caption" id="slide-100-layer-6" data-x="['left','left','left','left']" data-hoffset="['230','230','230','180']" data-y="['top','top','top','top']" data-voffset="['410','410','410','250']" data-width="none" data-height="none" data-whitespace="nowrap" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; background-color:rgba(0, 0, 0, 0) !important;"> <a href="#" class="site-button  button-lg outline white">Our Solutions</a> </div>
                                            </li>
                                        <?php } ?>
                                <!-- SLIDE  -->
								<!-- SLIDE  -->

                                <!-- SLIDE  -->
                                
                            </ul>
                            <div class="tp-bannertimer tp-bottom bg-primary" style="height: 5px; "></div>
                        </div>
                                
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div>
        <!-- Slider END -->
        <!-- About Company -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-content bg-image">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="h3 text-uppercase">About<span class="text-primary"> Us</span></h3>
                            <p class="m-b10"><strong>At Anglia Medical Practice, our healthcare team has a variety of capabilities and services we bring to you. In essence, it represents a spirit and a passion for delivering the best medical care — in partnership with you with a focus on improving your health and your life. In practice, it has become the touchstone for a well-coordinated and systematic approach that teams physicians, nurses and support personnel in the pursuit of wellness.
</strong></p>
                            <p class="m-b30">Our mission is to be recognized as the foremost healthcare facility providing high-quality, cost-effective and state-of-the-art medical services in a compassionate, caring manner.
</p>
<a href="<?php echo base_url('about-us');?>" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
                            <div class="clearfix bg-primary text-white p-a30 about-appoint">
								<div class="dzFormMsg"></div>
								<!--<form method="post" class="dzForm" action="script/contact.php">-->
								<input type="hidden" value="Contact" name="dzToDo">
									<div class="row">
<!--										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input name="dzName" type="text" required class="form-control" placeholder="Your Name">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group"> 
													<input name="dzEmail" type="email" class="form-control" required placeholder="Your Email Id">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Phone">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input name="dzOther[Subject]" type="text" required class="form-control" placeholder="Subject">
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<div class="input-group">
													<textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
												</div>
											</div>
										</div>-->
										<div class="col-md-12">
                                                                                    <a href="<?php echo base_url('book-appointment');?>"><button  class="site-button white outline"> <span>Make An Appointment With Our Doctors</span> </button></a>
										</div>
									</div>
<!--								</form>	-->
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="dez-thum"><img class="image" src="<?php echo base_url(); ?>assets/images/worker1.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
		<!-- Why Choose Us  -->
        <div class="section-full bg-img-fix content-inner overlay-primary-dark text-white" style="background-image:url(<?php echo base_url(); ?>assets/images/background/bg9.jpg)">
            <div class="container">
                <div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="fa fa-line-chart text-white"></i>
								<span class="counter">7652</span>
							</div>
							<span class="counter-text">Successfull Outcomes</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="fa fa-user text-white"></i>
								<span class="counter">4562</span>
							</div>
							<span class="counter-text">Happy patients</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="fa fa-file-text text-white"></i>
								<span class="counter">3569</span>
							</div>
							<span class="counter-text">Questions Answered</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="fa fa-pencil-square-o text-white"></i>
								<span class="counter">2089</span>
							</div>
							<span class="counter-text"> Sucessfull Appointments and leave Questions Answered.</span>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- Why Choose Us END -->
		<!-- Services -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h3 class="h3 text-uppercase">Our Best <span class="text-primary">Services</span></h3>
					<p>Our team of more than 20 professionals are highly trained to serve our patients’ needs.</p>
                </div>
                <div class="section-content ">
                    <div class="row">
                        <?php
                        foreach($getServices as $getServicesobj)
                        {
                            ?>
                        <div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="<?php echo base_url().CENTER_IMAGE_PATH.'/500x306_'.$getServicesobj->image;?>" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#"><?php echo $getServicesobj->doctor_specialty;?></a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15"><?php echo $getServicesobj->description ;?> </p>
									<!--<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a>--> 
								</div>
							</div>
						</div>
                        <?php } ?>
<!--						<div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="<?php echo base_url(); ?>assets/images/our-services/service/pic2.jpg" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#">Orthodontics</a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>-->
<!--						<div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="<?php echo base_url(); ?>assets/images/our-services/service/pic3.jpg" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#">Tooth Extraction</a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>-->
<!--						<div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="<?php echo base_url(); ?>assets/images/our-services/service/pic4.jpg" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#">Root Canal Treatment</a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>-->
<!--						<div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="<?php echo base_url(); ?>assets/images/our-services/service/pic5.jpg" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#">Teeth Whitening</a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>-->
<!--						<div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="<?php echo base_url(); ?>assets/images/our-services/service/pic6.jpg" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#">Routine Dental Exam</a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>-->
					</div>
                </div>
            </div>
        </div>
        <!-- Services END -->
        <!-- Our Project -->
        <div class="section-full bg-img-fix overlay-primary-dark content-inner-1 dez-support" style="background-image:url(<?php echo base_url(); ?>assets/images/background/bg9.jpg)">
            <div class="container">
                <div class="row">
                    <?php
                    //(01) 234 5678
                    ?>
					<div class="col-md-12 text-center text-white ">
						<h2 class="m-b15 m-t0">we provide 24/7 support" to 0845 271 3333.</h2>
						<h3 class="m-t0 m-b20">Please feel free to contact us at 0845 271 3333 for emergency case.</h3>
						<a href="#" class="site-button white radius-sm">Read More</a>
					</div>
			   </div>
            </div>
        </div>
        <!-- Our Project END -->
        <!-- Meet Our Team -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h3 class="h3 text-uppercase">Meet Our  <span class="text-primary">Doctors</span></h3>
                    <p>Our team of more than 20 professionals are highly trained to serve our patients’ needs.</p>
                </div>
                <div class="section-content ">
                    <div class="row">
                 						 <?php
                                foreach($getdoctorlist as $getdoctorlistobj)
                                {
                                ?>
                                <div class="col-md-3 col-sm-6 dez-team">
                                    <div class="dez-box m-b30">
                                        <div class="dez-media text-center dez-img-effect "> 
                                            <a href="javascript:;"> <img src="<?php echo base_url().'/'.DOCTOR_IMAGE_PATH .'/500x600_'. $getdoctorlistobj->doctor_image;?>" alt=""> </a>
                                            <div class="dez-info-has ">
                                                <ul class="dez-social-icon dez-social-icon-lg border">
                                                    <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="p-lr10 p-tb20 bg-gray text-center">
                                            <h4 class="dez-title text-uppercase m-a5"><a href="javascript:;"><?php echo $getdoctorlistobj->doctor_name;?></a></h4>
                                            <p class="m-b5"><?php echo $getdoctorlistobj->description;?></p>
                                            <span class="dez-member-position text-primary font-weight-700"><?php echo $getdoctorlistobj->doctor_specialty;?></span> 
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
<!--                        <div class="col-md-3 col-sm-6 dez-team">
							<div class="dez-box m-b30">
								<div class="dez-media text-center dez-img-effect "> 
									<a href="javascript:;"> <img src="<?php echo base_url(); ?>assets/images/our-team/pic1.jpg" alt=""> </a>
									<div class="dez-info-has ">
										<ul class="dez-social-icon dez-social-icon-lg border">
											<li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
										</ul>
									</div>
								</div>
								<div class="p-lr10 p-tb20 bg-gray text-center">
									<h4 class="dez-title text-uppercase m-a5"><a href="javascript:;">Jonathan Smith</a></h4>
									<p class="m-b5">Lorem Ipsum is simply dummy text of the printing and typesetting..</p>
									<span class="dez-member-position text-primary font-weight-700">Dentist</span> 
								</div>
							</div>
						</div>-->
						
                    </div>
                </div>
            </div>
        </div>
        <!-- Meet Our Team END -->
        <!-- Testimoniay -->
		<div class="section-full owl-dots-style bg-img-fix md-testimonial" style="background-image:url(<?php echo base_url(); ?>assets/images/background/bg4.jpg);background-size:cover">
			<div class="container-fluid p-a0">
				<div class="section-content col-md-6 overlay-primary-dark content-inner-1 bg-img-fix " style="background-image:url(<?php echo base_url(); ?>assets/images/background/bg9.jpg)">
					<div class="testimonial-six relative z-index2">
						<div class="item">
							<div class="testimonial-1 testimonial-bg">
								<div class="testimonial-pic quote-left radius shadow"><img src="<?php echo base_url(); ?>assets/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>The costs of treatments are very reasonable at SANA and I have always been impressed with the results. The fully medically qualified team at the clinic are professional, friendly and trustworthy.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-1 testimonial-bg">
								<div class="testimonial-pic quote-left radius shadow"><img src="<?php echo base_url(); ?>assets/images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
                                                                    <p>Wonderful Doctors, who makes you feel important and who takes time to listen, which most doctors don’t do. Loved him from the first visit! Very professional assistance.
</p>
                                                                </div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-1 testimonial-bg">
								<div class="testimonial-pic quote-left radius shadow"><img src="<?php echo base_url(); ?>assets/images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>Excellent service with attentive care, I would definetly reccomend.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimoniay END -->
        <!-- Latest Blog -->
		<div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h3 class="h3 text-uppercase">Latest <span class="text-primary">News</span></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content owl-none">
                    <div class="blog-carousel">
                        <div class="item">
							<div class="dez-box">
								<div class="dez-media"> 
									<a href="#"><img src="<?php echo base_url(); ?>assets/images/our-services/service/pic7.jpg" alt=""></a> 
								</div>
								<div class="dez-info p-a20 border-1">
									<div class="dez-post-meta ">
                                        <ul>
                                            <li class=""> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0</a> </li>
                                        </ul>
                                    </div>
									<h4 class="dez-title m-t15"><a href="#">Provide qualtiy productivity..</a></h4>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...]</p>
									<!--<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a>--> 
								</div>
							</div>
						</div>
						<div class="item">
							<div class="dez-box">
								<div class="dez-media"> 
									<a href="#"><img src="<?php echo base_url(); ?>assets/images/our-services/service/pic8.jpg" alt=""></a> 
								</div>
								<div class="dez-info p-a20 border-1">
									<div class="dez-post-meta ">
                                        <ul>
                                            <li class=""> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0</a> </li>
                                        </ul>
                                    </div>
									<h4 class="dez-title m-t15"><a href="#">Provide qualtiy productivity..</a></h4>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...]</p>
									<!--<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a>--> 
								</div>
							</div>
						</div>
						<div class="item">
							<div class="dez-box">
								<div class="dez-media"> 
									<a href="#"><img src="<?php echo base_url(); ?>assets/images/our-services/service/pic9.jpg" alt=""></a> 
								</div>
								<div class="dez-info p-a20 border-1">
									<div class="dez-post-meta ">
                                        <ul>
                                            <li class=""> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0</a> </li>
                                        </ul>
                                    </div>
									<h4 class="dez-title m-t15"><a href="#">Provide qualtiy productivity..</a></h4>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...]</p>
									<!--<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a>--> 
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Blog END -->
		<div class="section-full bg-primary overlay-primary-dark bg-img-fix" style="background-image:url(<?php echo base_url(); ?>assets/images/background/bg9.jpg)">
			<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-sm-6 ov-white1 text-white">
					<div class="icon-bx-wraper p-a40 center">
						<div class="icon-md m-b20"> <span class="icon-cell"><i class="fa fa-clock-o"></i></span> </div>
						<div class="icon-content">
							<h5 class="dez-tilte text-uppercase">CALL CENTER 24/7</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ov-white2 text-white">
					<div class="icon-bx-wraper p-a40 center">
						<div class="icon-md m-b20"> <span class="icon-cell"><i class="fa fa-user"></i></span> </div>
						<div class="icon-content">
							<h5 class="dez-tilte text-uppercase">Professional staff</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ov-white3 text-white">
					<div class="icon-bx-wraper p-a40 center">
						<div class="icon-md m-b20"> <span class="icon-cell"><i class="fa fa-pencil"></i></span> </div>
						<div class="icon-content">
							<h5 class="dez-tilte text-uppercase">Modern Equipment</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ov-white4 text-white">
					<div class="icon-bx-wraper p-a40 center">
						<div class="icon-md m-b20"> <span class="icon-cell"><i class="fa fa-file-text"></i></span> </div>
						<div class="icon-content">
							<h5 class="dez-tilte text-uppercase">ONLINE APPOINTMENT</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
        <!-- Content END-->
	</div>
    <!-- Footer -->
    <?php
  $this->load->view('layout/footer');
  ?>
   