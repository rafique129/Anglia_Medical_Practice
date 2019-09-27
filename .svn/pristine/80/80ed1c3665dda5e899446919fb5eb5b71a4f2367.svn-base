<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
         Banner Details
            <?php // echo!empty($updatedata->id) ? "Update Instructors" : "Add  Instructors"; ?>
        </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/banner'); ?>">View-Banner</a></li>   
         <li class="breadcrumb-item active"><?php echo !empty($updatedata) ? "Edit" : "Add";?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Validation Forms -->
        <div class="box box-default padding-0">
<!--            <div class="box-header with-border">
                <h3 class="card-title"> <?php echo!empty($updatedata->id) ? "Update Yoga Instructors" : "Add New Yoga Instructors"; ?> </h3>
                <h3 class="card-title mt-10"> <?php
                    if (!empty($updatedata)) {
                        echo!empty($updatedata) ? "Update " . $updatedata->doctor_name . " Profile" : "Add New  Profile";
                    } 
                    ?> </h3>
                <h6 class="card-subtitle">Bootstrap Form Validation check the <a href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>-->
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form novalidate action="<?php echo base_url('admin/banner-add'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="updateid" value="<?php if (!empty($updatedata)) {
                        echo!empty($updatedata->id) ? $updatedata->id : '';
                    } ?>">
                            <input type="hidden" name="updatecenterid" value="<?php if (!empty($updatedata)) {
                        echo!empty($updatedata->retreat_centre_id) ? $updatedata->retreat_centre_id : '';
                    } ?>">

                            <div class="row">
<?php
                                                     $urlsegment = $this->uri->segment(3);
                                            if(!empty($updatedata->id) && !empty($urlsegment)){?>
<!--                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <h5>    <span class="text-danger">*</span></h5>
                                        <select class="form-control select2" style="width: 100%;" name="speciality_id">
                                          <?php
                                             foreach ($doctor_speclity as $doctor_speclityobj) {
                                                    ?>
                                                    <option value="<?php echo $doctor_speclityobj->id; ?>" <?php if ($doctor_speclityobj->id == $updatedata->speciality_id ) {
            echo "selected";
        } ?>><?php echo $doctor_speclityobj->doctor_specialty; ?></option>
                                            <?php } 
                                            ?>
                                           
                                        </select>
                                    </div>
                         
                                </div>-->
                                            <?php } elseif(empty($updatedata->id)) {?>
<!--                                           <div class="col-sm-3">
                                    <div class="form-group">
                                        <h5>  
   <span class="text-danger">*</span></h5>
                                        <select class="form-control select2" style="width: 100%;" name="speciality_id">
                                          <?php
                                             foreach ($doctor_speclity as $arrcenternameobj) {
                                                    ?>
                                                 <option value="<?php echo $arrcenternameobj->id;?>"><?php echo $arrcenternameobj->doctor_specialty ;?></option>
                                            <?php } 
                                            ?>
                                           
                                        </select>
                                    </div>
                         
                                </div>-->
                                                
                                         <?php   } ?>
<!--                                <div class="col-sm-4">
                                    <h5>Name   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="doctor_name" class="form-control" required data-validation-required-message="This field is required" value="<?php
if (!empty($updatedata)) {
    echo!empty($updatedata->doctor_name) ? $updatedata->doctor_name : '';
}
?>"> <div class="help-block"></div></div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                                </div>-->
<!--                               <div class="col-sm-4">
                                    <h5> Email <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="email" name="doctor_email" class="form-control" required data-validation-required-message="This field is required" value="<?php
if (!empty($updatedata)) {
    //echo!empty($updatedata->doctor_email) ? $updatedata->doctor_email : '';
}
?>"> <div class="help-block"></div></div>
                                </div>-->
<!--                                <div class="col-sm-4">
                                    <h5>Phone   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="doctor_phone" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                if (!empty($updatedata)) {
                                    echo!empty($updatedata->doctor_phone) ? $updatedata->doctor_phone : '';
                                }
                                ?>"><div class="help-block"></div> </div>
                                </div>
                                 <div class="col-sm-4">
                                    <h5>Degree   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="doctor_degree" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                if (!empty($updatedata)) {
                                    echo!empty($updatedata->doctor_degree) ? $updatedata->doctor_degree : '';
                                }
                                ?>"><div class="help-block"></div> </div>
                                </div>-->
                                <div class="col-sm-4">
                                    <h5> Titles   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <textarea name="title" id="textarea" class="form-control" required placeholder="Textarea text"><?php
                                            if (!empty($updatedata)) {
                                                echo!empty($updatedata->title) ? $updatedata->title : '';
                                            }
                                            ?></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                </div>  
                                <div class="col-sm-4">
                                    <h5> Description   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <textarea name="description" id="textarea" class="form-control" required placeholder="Textarea text"><?php
                                            if (!empty($updatedata)) {
                                                echo!empty($updatedata->description) ? $updatedata->description : '';
                                            }
                                            ?></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                </div> 
                                <div class="col-sm-4">
						<h5>Upload File     <span class="text-danger">*</span></h5>
						<div class="form-group">
							<input type="file"  name="image" <?php echo empty($updatedata->id)? "required data-validation-required-message='This field is required'":'';?> class="form-control"> <div class="help-block"></div></div>
                                                        <input type="hidden"  id="old"  name="old_image"  value="<?php echo !empty($updatedata->image)?$updatedata->image:'';?>">
                                               <?php 
                                               if(!empty($updatedata->image))
                                               {
                                                   ?>
                                               
                                                <div>
                                                    <img src="<?php if(!empty($updatedata)){echo !empty($updatedata->image)?base_url().'/'.BANNER_IMAGE_PATH .'/400x225_'. $updatedata->image:'';}?>" height="150" width="150">
                                                </div>
                                               <?php } ?>


                          </div>
<?php //var_dump($instructor_id); ?>
<?php
if (!empty($updatedata)) {
    $arraystatus = array('0' => "Deactive", '1' => "Active");
    ?>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h5> Status   <span class="text-danger">*</span></h5>
                                            <select class="form-control select2" style="width: 100%;" name="Status">
    <?php
    foreach ($arraystatus as $arraystatuskey => $arraystatusval) {
        ?>
                                                    <option value="<?php echo $arraystatuskey; ?>" <?php echo ($arraystatuskey == $updatedata->status) ? "selected" : ''; ?>><?php echo $arraystatusval; ?></option>
    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
<?php } ?>

                            </div>





                           	   <div class="text-xs-right">
<?php if (empty($updatedata)) {
    ?>
                                    <button type="submit" class="btn btn-info">Submit</button>
<?php } else { ?>
                                    <button type="submit" class="btn btn-info">Update</button>
<?php } ?>
                            </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


