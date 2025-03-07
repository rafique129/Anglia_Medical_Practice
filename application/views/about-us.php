<?php //var_dump($updatedata->title); ?>
<html lang="en">
    <?php
    $this->load->view('layout/head');
?>
     <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(<?php echo base_url();?>assets/images/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">About us</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li>About us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="clearfix">
            <!-- Our Awesome Services -->
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 text-center section-head">
								<h3 class="h3">About Us</h3>
								<div class="dez-separator bg-primary"></div>
                                <div class="clear"></div>
                                <p>The Anglia Medical Practice carries out nearly one million outpatient appointments, day case procedures and inpatient admissions annually. The population we serve is predominantly the people of Norfolk and Cambridgeshire although some patients are referred from further afield especially to access specialist services available at this Trust.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center section-head">
								<h3 class="h3">Our services:  How it works? </h3>
								<div class="dez-separator bg-primary"></div>
                                <div class="clear"></div>
                                <p>Every year our staff of more than 7,000 provide acute medical care to more than 822,500 people from the East Anglia, from neighbouring counties and from further afield. Our patients are referred to us by around 100 local GP practices but also from other acute hospitals around the country.</p>
                            </div>
                             <div class="col-md-12 text-center section-head">
                                <p>We provide a full range of acute clinical services, including more specialist services such as orthopaedics, cardiologist, physiotherapy and surgery. We also work closely with the Anglia Ruskin University of Faculty of Medicine and Health Sciences to train health professionals and undertake clinical research.</p>
                             </div>
                            <div class="col-md-12 text-center section-head">
                                <p>We have world class facilities, highly skilled staff and are rated highly by our patients for our quality of care.  We were authorised as an NHS Foundation Trust.</p>
                             </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center section-head">
								<h3 class="h3">Who we serve</h3>
								<div class="dez-separator bg-primary"></div>
                                <div class="clear"></div>
                                <p>The Trust carries out nearly 1 million outpatient appointments, day case procedures and inpatient admissions annually.</p>
                                </br> 
                             <p>The population we serve is predominantly the people of Norfolk and Cambridgeshire, although some patients are referred from further afield especially to access specialist services available at this Trust.
Some medical treatments are not eligible for NHS funding and we are therefore not commissioned to provide such services. We accept referrals of patients for all those services that the Trust is commissioned to provide under the NHS and a full list of our clinical specialities is available here. 
Some healthcare providers do not accept referral of patients with underlying or chronic conditions such as diabetes, high blood pressure etc. We do not apply such restrictions and referrals are accepted on the basis of clinical need, regardless of age, gender or race.
The Trust does however reserve the right to decline to treat patients who are abusive, violent or aggressive towards our staff</p>
                               
                            </div>
                        </div>
<!--                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 right m-r50">
                                    <div class="icon-bx-md radius bg-primary"><span class="icon-cell"><i class="fa fa-user-md" aria-hidden="true"></i></span></div>
                                    <div class="icon-content p-r40">
                                        <h5 class="dez-tilte">Our Best Doctor</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20  right m-r50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell"><i class="fa fa-ambulance" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-r40">
                                        <h5 class="dez-tilte">Fast Ambulance Searvice</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 right m-r50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell"><i class="fa fa-users" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-r40">
                                        <h5 class="dez-tilte ">Well Qualified Staff</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 text-center ">
                                <div class="worker"> <img src="https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/images/service-image.png" alt=""/> </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 left m-l50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell"><i class="fa fa-stethoscope" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-l40">
                                        <h5 class="dez-tilte ">24X7 Service</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 left m-l50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell"><i class="fa fa-wheelchair" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-l40">
                                        <h5 class="dez-tilte ">Health Care</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b10 p-a20 left m-l50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell"><i class="fa fa-medkit" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-l40">
                                        <h5 class="dez-tilte ">Emergency Service</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- Our Awesome Services END -->
            <!-- Company Stats  -->
<!--            <div class="section-full bg-img-fix content-inner-1 overlay-black-dark our-projects-galery" style="background-image:url(https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/images/background/bg3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-group"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">5000</span> + </h3>
                                    <h6>Passionate Employee</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-university"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">700</span> + </h3>
                                    <h6>Hospital in Worldwide</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-globe"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">245</span> + </h3>
                                    <h6>Modern Style Care</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-trophy"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">648</span> + </h3>
                                    <h6>International Awards</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Company Stats END -->
            <!-- Team member -->
<!--            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-head text-center ">
                        <h3 class="h3">Meet our Dedicate Team</h3>
                        <div class="dez-separator bg-primary"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                    </div>
                    <div class="section-content ">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/images/our-team/pic1.jpg" alt=""></a> </div>
                                    <div class="dez-info p-a20 p-t40 border-1">
                                        <h4 class="dez-title m-tb0"><a href="#">Jimmy Morris</a></h4>
                                        <div class="bg-primary skew-content-box">
                                            <ul class="dez-social-icon">
                                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                        <span>Senor Vice President</span>
                                        <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/images/our-team/pic2.jpg" alt=""></a> </div>
                                    <div class="dez-info p-a20 p-t40 border-1">
                                        <h4 class="dez-title m-tb0"><a href="#">Jimmy Morris</a></h4>
                                        <div class="bg-primary skew-content-box">
                                            <ul class="dez-social-icon">
                                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                        <span>Senor Vice President</span>
                                        <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 m-b10">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/images/our-team/pic3.jpg" alt=""></a> </div>
                                    <div class="dez-info p-a20 p-t40 border-1">
                                        <h4 class="dez-title m-tb0"><a href="#">Jimmy Morris</a></h4>
                                        <div class="bg-primary skew-content-box">
                                            <ul class="dez-social-icon">
                                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                        <span>Senor Vice President</span>
                                        <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Team member -->
<!--             Testimonials 
            <div class="section-full bg-img-fix content-inner overlay-black-dark testimonials" style="background-image:url(https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/images/background/bg3.jpg);">
                <div class="container">
                    <div class="section-head text-center text-white">
                        <h3 class="h3"> Testimonials</h3>
                        <div class="dez-separator bg-primary"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                    </div>
                    <div class="section-content">
                        <div class="testimonial-five">
                            <div class="item">
                                <div class="testimonial-6">
                                    <div class="testimonial-text bg-white quote-left quote-right">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                    </div>
                                    <div class="testimonial-detail clearfix bg-primary text-white">
                                        <h4 class="testimonial-name m-tb0">David Matin</h4>
                                        <span class="testimonial-position">Student</span>
                                        <div class="testimonial-pic radius"><img src="https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-6">
                                    <div class="testimonial-text bg-white quote-left quote-right">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                    </div>
                                    <div class="testimonial-detail clearfix bg-primary text-white">
                                        <h4 class="testimonial-name m-tb0">David Matin</h4>
                                        <span class="testimonial-position">Student</span>
                                        <div class="testimonial-pic radius"><img src="https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/images/testimonials/pic2.jpg" alt="" width="100" height="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Testimonials End -->
        </div>
        <!-- contact area END -->
    </div>
<!-- Footer -->
    <?php
  $this->load->view('layout/footer');
  ?>                                                                                                                                                                                               