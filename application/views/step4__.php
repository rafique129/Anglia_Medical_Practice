<html lang="en">
    <?php
 //var_dump($doctor_data);exit;
 $this->load->view('layout/head');


   
?>
          <div class="page-content">
            <!-- About Company -->
            <div class="section-full content-inner bg-white appointment">
                <div class="container">
                     
                    <div class="row">
                    
                        <div class="col-sm-8 col-sm-offset-2">
                            <h5 class="text-uppercase text-center no-margin h5">APPOINTMENT BOOKING SYSTEM</h5>   
                  <div class="stage tmm-current col-md-3 col-sm-3">
            <div class="stage-header head-icon head-icon-details"></div>
            <div class="stage-content">
              <h3 class="stage-title">Patient details</h3>
              <div class="stage-info">
              </div>
            </div>
          </div><!--/ .stage-->

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-xs-12">

            <div class="well app_schedule_well">
                
                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label control-label="" for="inputEmail1">PROF  DR  <?php echo $sess_name;?></label>
                        </div>    
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label control-label="" for="inputEmail1">Anglia Medical Practice</label>
                        </div>    
                    </div>

                    <div class="col-lg-6">
                        <p>Appointment Date :<?php echo !empty($_GET['date'])?$_GET['date']:'';?></p>
                        <p>Booking Time : <?php echo $_GET['time']." To ".$_GET['to_time'];?> </p>
                    </div>

                    <div class="col-lg-6">
                        <div class="radio">
                            <label><input class="styled" type="radio" name="radio" checked>Old Patients</label>
                        </div> 
                    </div>

                    <div class="col-lg-6">
                        For new Patients please  <a href="http://www.apollodhaka.com/request-an-ppointment/" target="_blank"/>click here</a>
                    </div>

                </div>


            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-xs-12">

            <form class="form-horizontal" id="newForm" role="form" method="post" action="<?php echo base_url('submit-step4');?>">
                
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-3 control-label">UHID:</label>
                    <div class="col-lg-8">
                        <input type="text" name="uhid" class="form-control col-lg-8 " id="uhid" placeholder="UHID" value="" required >
                        <span class="help-block"></span>
                        <span class="help-block" id="uhid-error"></span>
                    </div>
                </div>

                <div class="form-group" id="uhidValidation" style="padding-top:0px">
                  
                </div>
            
         
          
                <div class="form-group">
                    <label for="inputPassword1" class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input type="email" name="patient_email" class="form-control" id="inputEmail"  required placeholder="Email"value="">
                        <span class="help-block"></span>
                        <span class="help-block" id="email-error"></span>
                         <input type="hidden" name="department_id" value="<?php echo $_GET['depcode'];?>"/>
                        <input type="hidden" name="appointment_date" value="<?php echo $_GET['date'];?>"/>
                        <input type="hidden" name="appointment_time" value="<?php echo $_GET['time']."-".$_GET['to_time'];?>"/>
                        <!--<input type="hidden" name="toTime" value="<?php echo $_GET['to_time'];?>"/>-->
                        <input type="hidden" name="doctor_id" value="<?php echo $_GET['doctorCode'];?>"/>
                    </div>
                </div>
     
                <div class="form-group">
                    <label for="inputPassword1" class="col-lg-3 control-label">Contact Number:</label>
                    <div class="col-lg-8">
                        <input type="text" name="patient_phone" class="form-control" id="mob" placeholder="Enter Your Mobile Number"value="">
                        <span class="help-block"></span>
                        <span class="help-block" id="mob-error"></span>
                    </div>
                </div>

                <div class="form_item">
                    <div class="form_element cf_textarea" style="text-align: center">
                        <img src="captcha_code_file.php?rand=1109889509" id='captchaimg' ><br>
                        <label for='message'>Enter the code above here :</label><br>
                        <input id="captchaCode" name="captchaCode" type="text"><br>
                        <small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
                    </div>
                    <div class="cfclear">&nbsp;</div>
                </div>

                <div class="form-group">

                    <div class="col-lg-4">
                        <button id="" class="back_button btn btn-primary btn-block" type="button" value="" name="Back" onclick="goBack()"><i class="fa fa-arrow-circle-left"></i> Go back</button>
                    </div>
                    <div class="col-lg-4 pull-right">
                        <button type="submit" class="btn btn-primary btn-block" name="newsubmit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


                    </div>
                </div>
            </div>
            <!-- About Company -->

            <!-- Content END-->
        </div>
 <!-- Footer -->
    <?php
  $this->load->view('layout/footer');
  ?>
<script type="text/javascript">
    $('body').on('change','.speclity',function(){
     var id=$(this).val();
     $.ajax({
         url:"<?php echo base_url('filter_doctor');?>",
         type:"POST",
         data:{id:id},
         success:function(html)
 { $('#Doctor').removeClass('bs-select-hidden');
   $('#Doctor').html(html);
 }
     })
    })
    </script>
     <script>
		function goBack() {
		    window.history.back();
		}
		</script>
    

