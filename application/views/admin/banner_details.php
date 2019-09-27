<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        Banner  Details
      </h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/banner');?>">View-Banner</a></li>
        <li class="breadcrumb-item active">Details</li>
      </ol>
    </section>

<section class="content">
<div class="row">
            <div class="container-fluid">
            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">

                        <li><a class="active" href="#timeline" data-toggle="tab">Basic Information </a></li>
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
                                if (!empty($data)) {
                                    foreach ($data as $arrviewobj) {
                                        ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                       


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Title :</label> <br>
                                            <p> <?php echo $arrviewobj->title;?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Description :</label><br> 
                                            <p><?php echo $arrviewobj->description;?></p>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Image :</label><br>
                                            <img src="<?php if(!empty($arrviewobj)){echo !empty($arrviewobj->image)?base_url().'/'.BANNER_IMAGE_PATH .'/1920x766_'. $arrviewobj->image:'';}?>" height="50" width="50">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Status :</label><br> 
                                            <p><?php echo ($arrviewobj->status==1)?"Active":"Deactive";?></p>
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