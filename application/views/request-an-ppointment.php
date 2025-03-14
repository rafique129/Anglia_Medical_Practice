<html lang="en">
    <?php
   
 
    $this->load->view('layout/head');
?>
    
       <div class="page-content">
            <!-- About Company -->
            <div class="section-full content-inner bg-white appointment">
                <div class="container">
                    <?php
                    $msg=$this->session->flashdata("succ");
                    if(!empty($msg))
                    {
                        ?>
                 <h6>Your Appointment Has Been Booked Successfully.</h6>
                 <h6>Your appointment will be confirmed via e-mail or telephonic communication.</h6>
                   <?php }
                    ?>
                  <?php
                    $captcha=$this->session->flashdata("captcha");
                    if(!empty($captcha))
                    {
                        ?>
                 <h6>Captcha Code not match.</h6>
                 <!--<h6>Your appointment will be confirmed through return e-mail or telephonic communication.</h6>-->
                   <?php }
                    ?>
                    <h2>Request an Appointment from Call Centre</h2>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h5 class="text-uppercase text-center m-a0 h5">Patient Details</h5>

                            <form action="<?php echo base_url('request-an-ppointment');?>" method="post" class="form clearfix form-horizontal" id="registerForm" name="standardform">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="col-sm-4 control-label">First Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="first_name"  class="form-control" id="formGroupExampleInput" placeholder="First Name" id="first_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput1" class="col-sm-4 control-label">Last Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="last_name" class="form-control" id="formGroupExampleInput1" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDate" class="col-sm-4 control-label">DOB</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="dob" class="form-control" id="exampleInputDate" placeholder="Date of Birth" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <h6 class="text-right">Gender</h6>
                                    </div>
                                    <div class="col-sm-8">
                                        <label class="radio-inline p-l0">
                                            <input type="radio" name="Gender" value="male" checked> &nbsp; &nbsp; &nbsp; Male</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="Gender" value="female">&nbsp; &nbsp; &nbsp; Female</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2" class="col-sm-4 control-label">Contact Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="contact_number" id="formGroupExampleInput2" placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleEmail" class="col-sm-4 control-label">E-mail</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="contact_email" class="form-control" id="formGroupExampleEmail" placeholder="abc@gmail.com" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleEmail" class="col-sm-4 control-label">Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="address" class="form-control" id="formGroupExampleEmail" placeholder="Address" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleEmail" class="col-sm-4 control-label">City</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="city" class="form-control" id="formGroupExampleEmail" placeholder="City" required>
                                    </div>
                                </div>
<!--                                <div class="form-group">
                                    <label for="request" class="col-sm-4 control-label">Request For</label>
                                    <div class="col-sm-8">
                                            <select id="request" class="form-control" name="request_for">
                                                    <option>Choose one</option>
                                                      <option>Xray</option>
                                                        <option>Fizetherpy</option>
                                                  </select>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                        <label for="specialty" class="col-sm-4 control-label">Specialty for consultation</label>
                                        <div class="col-sm-8">
                                                <select id="specialty" class="form-control specialty" name="specialty_id" required>
                                                        <option>Choose Specialty</option>
                                                         <?php
                                            if(!empty($doctor_speclity) && empty($_GET['depcode']))
                                            {
                                             foreach($doctor_speclity as $doctor_speclityobj)
                                             {
                                            ?>
                                          <option value="<?php echo $doctor_speclityobj->id ;?>"><?php echo $doctor_speclityobj->doctor_specialty ;?></option>
                                            <?php }}else if(!empty($_GET['depcode'])){
                                                
                                                foreach($doctor_speclity as $doctor_speclityobj)
                                             {?>
                                            <option value="<?php echo $doctor_speclityobj->id ;?>" <?php if($doctor_speclityobj->id==$_GET['depcode']){echo "selected";} ?>><?php echo $doctor_speclityobj->doctor_specialty ;?></option><?php }} ?>
                                                      </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="consultant" class="col-sm-4 control-label">Doctor</label>
                                            <div class="col-sm-8">
                                                    <select id="Doctor" class="form-control" name="doctor_id" required>
                                                            <option>Select Consultant</option>
                                                            <?php
                                                            if(!empty($doctor_list))
                                                            {
                                                                foreach($doctor_list as $doctor_listobj)
                                                                {
                                                               ?>
                                                            <option value="<?php echo $doctor_listobj->id;?>" <?php if($doctor_listobj->id==$_GET['doctorCode']){echo "selected";} ?>><?php echo $doctor_listobj->doctor_name;?></option>
                                                            <?php }} ?>
                                                          </select>
                                            </div>
                                        </div>                                
                              
                                <div class="form-group">
                                    <label for="exampleInputDate1" class="col-sm-4 control-label">Preferred Date</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" name="appointment_date" value="<?php echo !empty($_GET['date'])?$_GET['date']:'';?>" id="exampleInputDate1" placeholder="Date" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTime" class="col-sm-4 control-label">Preferred Time</label>
                                    <div class="col-sm-8 selectbox-time">
                                    <select name="hour">
                                        <option value="">HH</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>  
                                    <select name="minute">
                                        <option value="">MM</option>
                                        <option value="00">00</option>
                                        <option value="05">05</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="30">30</option>
                                        <option value="35">35</option>
                                        <option value="40">40</option>
                                        <option value="45">45</option>
                                        <option value="50">50</option>
                                        <option value="55">55</option>
                                    </select>     
                                    <select name="am_pm">         
                                        <option value="AM">AM</option>
                                        <option value="PM">PM</option>
                                    </select>                            
                                 </div>
                                </div>
<!--                                <div class="form-group">
                                        <label for="formGroupExampleInput6" class="col-sm-4 control-label">ID No</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="id_no" class="form-control" id="formGroupExampleInput6" placeholder="ID No" required> 
                                        </div>
                                    </div>-->
                                    <div class="form-group spam">
                                           <div class="col-sm-4">

                                           </div>
                                           <div class="col-sm-8">
                                           <p id="captImg"><?php  echo $image;?>
                                           </p>     
                                            <a href="javascript:void(0);" class="refreshCaptcha" >
                                                <img src="<?php echo base_url().'assets/images/refresh.png'; ?>" style="height:50px;"/>
                                            </a> 
                                            <p id="captmsg" style="display:none">Inavlid captcha</p>
                                           </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="formGroupExampleInput6" class="col-sm-4 control-label">Spam check</label><!--                                                                                     
-->                                            <div class="col-sm-8">
                                                    <input type="text"  name="captcha" class="form-control" id="formGroupExampleInput6" placeholder="Type here">
                                            </div>                                         
                                 </div>
                                <!--<img src="<?php echo base_url();?>/assets/images/refresh.png">-->
                                <button type="button" onclick="return validateForm()" class="btn btn-primary btn-block Request">Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Company -->

            <!-- Content END-->
        </div>
   <?php
  $this->load->view('layout/footer');
  ?>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
  <script type="text/javascript">
     function validateForm() {
    var x = document.forms["standardform"]["first_name"].value;
    if (x == "") {
        alert("First Name must be filled out");
        document.forms["standardform"]["first_name"].focus();
        return false;
    }
    var x = document.forms["standardform"]["last_name"].value;
    if (x == "") {
        alert("Last Name must be filled out");
         document.forms["standardform"]["last_name"].focus();
        return false;
    }
    var x = document.forms["standardform"]["dob"].value;
    if (x == "") {
        alert("Dob must be filled out");
        document.forms["standardform"]["dob"].focus();
        return false;
    }
    var x = document.forms["standardform"]["contact_number"].value;
    if (x == "") {
        alert("Contact Number must be filled out");
         document.forms["standardform"]["contact_number"].focus();
        return false;
    }
    var x = document.forms["standardform"]["contact_email"].value;
    if (x == "") {
        alert("Email must be filled out");
         document.forms["standardform"]["contact_email"].focus();
        return false;
    }
    var x = document.forms["standardform"]["specialty_id"].value;
    if (x == "") {
        alert("Please select Specialty");
         document.forms["standardform"]["specialty_id"].focus();
        return false;
    }
//     var x = document.forms["standardform"]["specialty_id"].value;
//    if (x == "") {
//        alert("Please select specialty");
//        return false;
//    }
     var x = document.forms["standardform"]["doctor_id"].value;
    if (x == "") {
        alert("Please select Docter");
         document.forms["standardform"]["doctor_id"].focus();
        return false;
    }
    var x = document.forms["standardform"]["appointment_date"].value;
    if (x == "") {
        alert("Please enter Appointment Date");
         document.forms["standardform"]["appointment_date"].focus();
        return false;
    }
    var x = document.forms["standardform"]["captcha"].value;
    if (x == "") {
        alert("Please enter captcha");
          document.forms["standardform"]["captcha"].focus();
        return false;
    }
    else
    {
        NameAFunctionName();
    }
     }
     </script>
<div id="overlay">
<span>
    <img  src="<?php echo base_url().'assets/loading.gif'?>"/>                               
</span>
</div> 
     <style type="text/css">
 #overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    text-align: center;
    background-color: #000;
    filter: alpha(opacity=80);
    -moz-opacity: 0.8;
    opacity: 0.8;
    display: none;
}

#overlay span {
    padding: 5px;
    border-radius: 5px;
    color: #000;
    background-color: #fff;
    height:auto;
    width:50px;
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-50px;
    margin-top:-50px;
    display:block;
}

</style>

<script type="text/javascript">
    $('body').on('change','.specialty',function(){
     
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
    $(document).ready(function(){
        $('.refreshCaptcha').on('click', function(){
            $.get('<?php echo base_url().'home/refresh'; ?>', function(data){
                $('#captImg').html(data);
            });
        });
    });
    </script>
    <script type="text/javascript">
      function NameAFunctionName() {
          $("#overlay").show();
           var form=$('form').serialize();
          $.ajax({
           url:"<?php echo base_url('saverequst');?>",
           type:'POST',
           dataType:'json',
           data:form,
           success:function(res){
               if(res.status)
               {
         $('#captmsg').show();
           $("#overlay").hide();
        }
        else{
       
       window.location.href=res.redir_url;  
       $("#overlay").hide();
        }
           }
          })
         }
        </script>
        