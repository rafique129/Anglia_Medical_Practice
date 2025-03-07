<html lang="en">
    <?php
 //var_dump($doctor_data);exit;
 $this->load->view('layout/head');
?>
      <div class="page-content">
            <!-- About Company -->
            <div class="section-full content-inner bg-10 appointment">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h5 class="text-uppercase text-center no-margin h5">PATIENT DETAILS</h5>
                            <div class="form-outer">
                                <ul class="steps">
                                    <li class="success">
                                        <span>
                                            <i class="fa fa-user-md"></i>
                                        </span>
                                        Find Doctors
                                    </li>
                                    <li class="success">
                                        <span>
                                            <i class="fa fa-pencil-square-o"></i>
                                        </span>
                                        Appoint. Schedules</li>
                                        <li class="success">
                                        <span>
                                            <i class="fa fa-calendar-o"></i>
                                        </span>
                                        Select Time Slot</li>
                                        <li class="active">
                                        <span>
                                            <i class="fa fa-table"></i>
                                        </span>
                                        Patient details</li>
                                </ul>
                                <div class="schedule p-lr20">
                                    <div class="bg-grey p-a15">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h6><strong>Dr. <?php echo $sess_name;?></strong></h6>
                                                <p class="m-a0"> Appointment Date :<?php echo !empty($_GET['date'])?$_GET['date']:'';?>
                                                </p>
                                                <p>Appointment Time : <?php echo $_GET['time']." To ".$_GET['to_time'];?> </p>

                                            </div>
                                            <div class="col-sm-6">
<!--                                                   <h6><strong> Department Name</strong></h6>-->
                                                   <div class="checkbox">
                                                        <label class="p-l0">
                                                            <input type="radio">&nbsp;&nbsp;Old Patients</label>
                                                    </div>
                                                    <p class="m-a0">
                                                            For new Patients please  <a href="<?php echo base_url('request-an-ppointment')."?depcode=".$_GET['depcode']."&date=".$_GET['date']."&doctorCode=".$_GET['doctorCode'];?>" class="btn btn-link">click here</a>
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr />
                                <div class="row">
                                    <div class="col-sm-offset-1 col-md-10">
                                       <form class="form-horizontal" id="newForm" role="form" name="newForm" method="post" action="<?php echo base_url('submit-step4');?>">                                  
                                          <input type="hidden" name="department_id" value="<?php echo $_GET['depcode'];?>"/>
                        <input type="hidden" name="appointment_date" value="<?php echo $_GET['date'];?>"/>
                        <input type="hidden" name="appointment_time" value="<?php echo $_GET['time']."-".$_GET['to_time'];?>"/>
                        <!--<input type="hidden" name="toTime" value="<?php echo $_GET['to_time'];?>"/>-->
                        <input type="hidden" name="doctor_id" value="<?php echo $_GET['doctorCode'];?>"/>
                        <input type="hidden" name="patient_name" id="patient_name" value=""/>
                  <?php $a = null;?>
                                            <div class="form-group">
                                                <label for="formGroupExampleInput6" class="col-sm-4 control-label">ID No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="uhid" id="uhid" value="<?php echo !empty($userdata['uhid'])?$userdata['uhid']:'';?>" placeholder="ID No" required>
                                                </div>
                                                 <span class="help-block" id="uhid-error"></span>
                                            </div>
                        <div class="form-group" id="uhidValidation" style="padding-top:0px"></div>
                                            <div class="form-group">
                                                    <label for="formGroupExampleEmail" class="col-sm-4 control-label">E-mail</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="patient_email" id="formGroupExampleEmail"  value="<?php echo !empty($userdata['patient_email'])?$userdata['patient_email']:'';?>" placeholder="abc@gmail.com" required>
                                                   
                                                    </div>
                                                </div>
<!--                                                <div class="form-group">
                                                    <label for="country" class="col-sm-4 control-label">Country Code</label>
                                                    <div class="col-sm-8">
                                                            <select id="country" class="form-control">
                                                                    <option>Select Country Code</option>
                                                                  </select>
                                                    </div>
                                                </div>-->
                                                <div class="form-group">
                                                        <label for="country" class="col-sm-4 control-label">Contact Number</label>
                                                        <div class="col-sm-8">
                                                                <input type="text" name="patient_phone"  class="form-control" value="<?php echo !empty($userdata['patient_phone'])?$userdata['patient_phone']:'';?>" id="country" placeholder="Enter Contact Number" required>
                                                        </div>
                                                    </div>
<!--                                                    <div class="form-group">
                                                            <label for="formGroupExampleInput6" class="col-sm-4 control-label">Spam check</label>
                                                            <div class="col-sm-2 p-tb10">
                                                                6 + 3 =
                                                            </div>                                           
                                                            <div class="col-sm-6">
                                                                    <input type="text" class="form-control" id="formGroupExampleInput6" placeholder="9">
                                                            </div>
                                                           
                                                        </div>-->
                                        <!--<button type="submit" class="btn btn-primary">Back</button>-->
                                        <input type="submit"  class="btn btn-primary right" value="Submit">                                  
                                </form>
                            </div>
                        </div>
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
<!-- <script type="text/javascript">
     function validateForm(e) {
    var x = document.forms["newForm"]["uhid"].value;
    if (x == "") {
        alert("First Name must be filled out");
        document.forms["newForm"]["uhid"].focus();
        return false;
    }
     }
    </script>-->
<script type="text/javascript">
    
    $("#uhid").keyup(function () {
        value = $(this).val();
          $('.right').hide();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>home/uhidvalid",
                data: {
                    'uhid' : value
                },
                dataType: "html",
                success: function(msg){
                    if(msg=="Invalid UHID")
                    {
                    $('#uhidValidation').empty();
                    $('#uhid-error').html("Please enter valid UHID")
                    $('.right').hide();
                }else
                {
                    $('#uhid-error').empty();
                    $('#uhidValidation').html(msg)
                    var avoid = "Your Name Is "
                  var name=msg.replace(avoid, '');
                    $('#patient_name').val(name);
                     $('.right').show();
                }
                
                   
                }
            });
        
    });
    </script>
     <script>
		function goBack() {
		    window.history.back();
		}
		</script>

