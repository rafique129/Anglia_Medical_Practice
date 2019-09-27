<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        Booking  Details
      </h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/view-appointment');?>">View-Appointment</a></li>
        <li class="breadcrumb-item active">Details </li>
      </ol>
    </section>

 <section class="content">
<div class="row">
            <div class="container-fluid">
            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">

                        <li><a class="active" href="#timeline" data-toggle="tab">Basic Information </a></li>
                         </ul>

                    <div class="tab-content">

                        <div class="active tab-pane" id="timeline">
                              <?php
                                if (!empty($data)) {
                                    foreach ($data as $arrviewobj) {
                                        ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Department Name :</label> <br>
                                            <p> <?php echo $arrviewobj->doctor_specialty;?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Doctor Name :</label> <br>
                                            <p> <?php echo $arrviewobj->doctor_name;?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Patient Name :</label><br> 
                                            <p><?php echo $arrviewobj->first_name." ".$arrviewobj->last_name;?></p>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Contact Number :</label><br>
                                            <p><?php echo $arrviewobj->contact_number;?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Email :</label><br> 
                                            <p><?php echo $arrviewobj->email;?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Appointment Date :</label><br> 
                                            <p><?php echo $arrviewobj->appointment_date;?></p>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;">  Created  Date :</label><br> 
                                            <p><?php echo $arrviewobj->created_date;?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Appointment Number :</label><br> 
                                            <p><?php echo ($arrviewobj->Appnmt_no) ?$arrviewobj->Appnmt_no :'';?></p>
                                        </div>
                                    </div>
                     
                                    </div>
                                   



                                </div>


     <?php }
                                }?>


                            </div>
                               
                        </div>
                      

                        </div>
                        <!-- /.tab-pane -->
                        </div>
                    
</div>
     <section>
    </div>