<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        User Details
      </h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/patient');?>">New User</a></li>
        <li class="breadcrumb-item active">User Details</li>
      </ol>
    </section>

 <section class="content">
<div class="row">
            <div class="container-fluid">
            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">

                        <li><a class="active" href="#timeline" data-toggle="tab">Basic Information</a></li>
<!--                        <li><a href="#overview" class="" data-toggle="tab" id="art">Overview</a></li>
                         <li><a href="#Package" class="" data-toggle="tab" id="art">Package</a></li>
                        <li><a href="#highlights" class="" data-toggle="tab" id="art">Highlights</a></li>
                        <li><a href="#styles" class="" data-toggle="tab">Styles</a></li>
                        <li><a href="#additional_box" class="" data-toggle="tab">Additional Boxes</a></li>
                        <li><a href="#gallery" class="" data-toggle="tab">Gallery</a></li>-->


                    </ul>

                    <div class="tab-content">

                        <div class="active tab-pane" id="timeline">
                              <?php
                                if (!empty($arrview)) 
                                    {
                                   
                                        ?>
                            <div class="row">
                                <div class="col-md-12">
                                   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Name :</label><br> 
                                            <p><?php echo $arrview[0]->first_name.' '.$arrview[0]->last_name;?></p>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Email :</label><br>
                                            <p><?php echo $arrview[0]->email;?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Phone :</label><br> 
                                            <p><?php echo $arrview[0]->contact_number;?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Gender :</label><br> 
                                            <p><?php echo $arrview[0]->Gender;?></p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Address :</label><br> 
                                            <p><?php echo $arrview[0]->address;?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> City :</label><br> 
                                            <p><?php echo $arrview[0]->city;?></p>
                                        </div>


                                    </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Created Date :</label><br> 
                                            <p><?php echo date('d M Y',strtotime($arrview[0]->created_date));?></p>
                                        </div>
<!--                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Phone :</label><br> 
                                            <p><?php echo $arrview[0]->email;?></p>
                                        </div>-->


                                    </div>
                                   
                                    <div class="row">
<!--                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;">Status :</label><br> 
                                            <p><?php echo $arrview[0]->address; ?><p>
                                        </div>-->

<!--
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;">Spoken Languages :</label><br>
                                            <p>English</p>
                                        </div>-->
                                    </div>
                                   



                                </div>





                            </div>
                               <?php } ?>
                        </div>
                        <!-- /.tab-pane -->

                        </div>
                    </div>
                </div>
    </div>
 </section>
    </div>
                        