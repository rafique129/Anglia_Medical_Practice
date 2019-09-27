<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
          
            <?php echo!empty($updatedata) ? "Edit Department" : "Add Department"; ?>
        </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/viewdepartment'); ?>">Departments</a></li>
             <li class="breadcrumb-item active"><?php echo !empty($updatedata) ? "Edit" : "Add";?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Validation Forms -->
        <div class="box box-default padding-0">
            <div class="box-header with-border">
<!--                <h3 class="card-title"> <?php echo!empty($updatedata->id) ? "Update Yoga Instructors" : "Add New Yoga Instructors"; ?> </h3>-->
                <h3 class="card-title mt-10"> <?php
                    if (!empty($updatedata)) {
                        echo!empty($updatedata) ? "Update " . $updatedata->doctor_specialty 	 . " Profile" : "Add New  Profile";
                    } 
                    ?> </h3>
                <!--<h6 class="card-subtitle">Bootstrap Form Validation check the <a href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>-->

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form novalidate action="<?php echo base_url('admin/department-add'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="updateid" value="<?php if (!empty($updatedata)) {
                        echo!empty($updatedata->id) ? $updatedata->id : '';
                    } ?>">
                          
 <div class="row">
                                <div class="col-sm-4">
                                    <h5>Specialty<span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="doctor_specialty" class="form-control" required data-validation-required-message="This field is required" value="<?php
if (!empty($updatedata)) {
    echo!empty($updatedata->doctor_specialty) ? $updatedata->doctor_specialty: '';
}
?>"> <div class="help-block"></div></div>
                                <!--<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>-->
                                </div>
                               <div class="col-sm-4">
                                    <h5>  	title  <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control" required data-validation-required-message="This field is required" value="<?php
if (!empty($updatedata)) {
    echo!empty($updatedata->title) ? $updatedata->title : '';
}
?>"> <div class="help-block"></div></div>
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
                                                    <img src="<?php if(!empty($updatedata)){echo !empty($updatedata->image)?base_url().'/'.CENTER_IMAGE_PATH .'/500x306_'. $updatedata->image:'';}?>" height="150" width="150">
                                                </div>
                                               <?php } ?>
     </div>

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


