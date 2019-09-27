<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        Prescription  Details
      </h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/view-prescription');?>">View-Prescription</a></li>
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
                             <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="label-control" style="font-weight:bold;"> Medication  Name</label> <br>
                                           
                                        </div>
                                        <div class="col-md-3">
                                            <label class="label-control" style="font-weight:bold;"> Doctor Name </label> <br>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            <label class="label-control" style="font-weight:bold;"> Patient note </label> <br>
                                           
                                        </div>
                                         <div class="col-md-3">
                                            <label class="label-control" style="font-weight:bold;">Issue Date</label> <br>
                                         
                                        </div>
                                        <div class="col-md-3">
                                            <label class="label-control" style="font-weight:bold;">End Date</label> <br>
                                         
                                        </div>
                                    </div>
                                    
                                   
                                    
                                   
                     
                                    </div>
                              <?php
                                if (!empty($arrview)) {
                                    foreach ($arrview as $arrviewobj) {
                                        ?>
                            <div class="row">
                               
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p> <?php echo $arrviewobj->doctor_specialty;?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p> <?php echo $arrviewobj->doctor_name;?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p> <?php echo $arrviewobj->patient_note;?></p>
                                        </div>
                                         <div class="col-md-3">
                                            <p> <?php echo date('d M Y',strtotime($arrviewobj->Issue_Date  )) ;?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p> <?php echo date('d M Y',strtotime($arrviewobj->end_date  )) ;?></p>
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